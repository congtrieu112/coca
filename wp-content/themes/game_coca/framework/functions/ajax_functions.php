<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
if( !class_exists( 'TheCoCa_Ajax' ) ) {
	class TheCoCa_Ajax {
		function __construct(){
			$this->init();
		}
		public function init(){
			$ajax_events = array(
				'register_user'	=> true,
				'ajax_login'=>true,
				'check_mail'=>true,
				'key_active'=>true,
                'result'=>true,
			);
			foreach ( $ajax_events as $ajax_event => $nopriv ) {
				add_action( 'wp_ajax_' . $ajax_event, array( __CLASS__, $ajax_event ) );
				if ( $nopriv ) {
					add_action( 'wp_ajax_nopriv_' . $ajax_event, array( __CLASS__, $ajax_event ) );
				}
			}
		}
		public static  function result(){
            $datas = filter_var_array($_POST['data'],FILTER_SANITIZE_STRING);
            $sum = array();
            $i = 0;
            if($datas){
                foreach ($datas as $key=>$item){
                    $id = $item['postid'];
                    $data = get_post_meta( $id, "question", true );
                    $chance = filter_var($_POST['chance'],FILTER_SANITIZE_NUMBER_INT );
                    $data = json_decode($data,true, 512, JSON_UNESCAPED_UNICODE);
                    $correct = array();
                    $correct_compere = explode('-',$item['answer']);
                    $correct_compere = end($correct_compere);
                    $correct_compere = (int)$correct_compere ;
                    if($data){
                        $question = isset($data['description-question']) ? $data['description-question'] : "";
                        $explain = isset($data['explain']) ? $data['explain'] : "";
                        $answer = isset($data['answer']) ? $data['answer'] : array();
                        $correct = isset($data['correct_answer']) ? $data['correct_answer'] : array();
                    }
                    $correct_result =array_filter($correct);
                    $correct_result = array_keys($correct_result);
                    $correct_result = $correct_result[0];
                    $chance --;
                    if($correct_compere == $correct_result){
                       $i++;
                        $result_data[] = array(
                            'post_id'=> $id,
                            'correct'=>true,
                            'select'=> $correct_compere,
                            'answer'=> $answer,
                            'question'=>$question,
                            'explain'=>$explain,
                            'chance'=> $chance
                        );
                    }else{
                        $result_data[] = array(
                            'post_id'=> $id,
                            'correct'=>false,
                            'select'=> $correct_compere,
                            'answer'=> $answer,
                            'question'=>$question,
                            'explain'=>$explain,
                            'chance'=> $chance
                        );
                    }
                }
            }
            $_SESSION['review']= $result_data ;
            $_SESSION['point'] = $i;
            print json_encode($i);
         exit();
        }


		public static function register_user(){
			if (!wp_verify_nonce($_POST['coca-register-form'],'register-game') ) die( 'Security check' );

			$level = filter_var($_POST['level'],FILTER_SANITIZE_NUMBER_INT );
			$first_name = filter_var($_POST['firstname'],FILTER_SANITIZE_STRING);
			$last_name = filter_var($_POST['lastname'],FILTER_SANITIZE_STRING);
			$department = filter_var($_POST['department'],FILTER_SANITIZE_NUMBER_INT );
			$pass = filter_var($_POST['passwd'],FILTER_SANITIZE_STRING);
			$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
			$user_name = ($email) ? explode("@", $email) : "";
			$array_values = array_values($user_name);
			$user_name = array_shift($array_values);
			$display_name = $first_name." ".$last_name;
            $role = ($level == 2) ? 'contributor':'subscriber';
			
			$userdata = array(
			    'user_login'  =>  $user_name,
			    'user_email'    =>  $email,
			    'user_pass'   =>  $pass,  // When creating an user, `user_pass` is expected.
				'display_name' => $display_name,
				'first_name'=>$first_name,
				'last_name'=>$last_name,
                'role'=> $role,

			);
			if($level==2){
				$result = self::check_level($email);
				if(!self::check_level($email)){
					print json_encode(array('level'=>1));
					exit();
				}

			}

			if($level && $display_name && $email && $pass && $user_name && $department){

				$user_id = wp_insert_user( $userdata ) ;
                // SENDS EMAIL NOTIFICATION
//                wp_new_user_notification($user_id, $pass);


				if($user_id){
					$user = array(
						'level'=> $level,
						'department' =>$department,
						'display_name'=>$display_name,
						'user_id' => $user_id
					);
					if($key = self::create_charts($user)){
                        // Use 'update_user_meta()' to add or update the user information fields.
                        global $wpdb;
                       $result =  $wpdb->update( $wpdb->users, array('user_activation_key'=>$key), array('ID'=>$user_id) );
						$url_key = admin_url("admin-ajax.php")."?action=key_active&key=$key";
						$subject = "Hoàn tất đăng ký";
						self::sent_mail($url_key,$email,$display_name,$subject);
						print json_encode(array('success'=>$user_id));
						exit();

					}
					
					
				}
				
			}
			
			// sleep(2);
			
			wp_die();
		}

		public static function check_level($email){
			global $wpdb;
			$result = $wpdb->get_row( "SELECT id  FROM $wpdb->posts WHERE post_type = 'manager' AND  post_title='$email'" );
			return $result;
		}
		public static function create_charts($user){
			
            $chance = !empty(get_option('chance')) ? get_option('chance') : '';

			// Create post object
			$charts = array(
			  'post_title'    =>  'Tổng lượt chơi của user : '.$user['display_name'],
			  'post_type' => 'winner',
			  'post_status'   => 'publish',
    		  'post_author'   => 1,

			);
		
			 
			//Insert the post into the database
			$post_id = wp_insert_post( $charts );
			$key = wp_generate_password( 30, false );
			if($post_id){
				update_post_meta($post_id,"chance",$chance);
				update_post_meta($post_id,"user_play",$user['user_id']);
				update_post_meta($post_id,"level",$user['level']);
				update_post_meta($post_id,"department",$user['department']);
				update_post_meta($post_id,"key_active",$key);
				update_post_meta($post_id,"status",0);

				update_post_meta($post_id,"total_correct_question",0);
				update_post_meta($post_id,"total_incorrect_question",0);
				update_post_meta($post_id,"total_point",0);
				update_post_meta($post_id,"total_time_finish",0);
				update_post_meta($post_id,"prize",0);
				return $key;
			}



			
			
		}
		public static  function key_active(){
			require_once(THEME_BACKEND.'active_user.php');
			exit();
		}

		public static function ajax_login(){
			// First check the nonce, if it fails the function will break
			check_ajax_referer( 'ajax-login-nonce', 'security' );


			// Nonce is checked, get the POST data and sign user on
			$info = array();
			$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
			$user_name = ($email) ? explode("@", $email) : "";
			$array_values = array_values($user_name);
			$user_name = array_shift($array_values);
			$pass = filter_var($_POST['pass'],FILTER_SANITIZE_STRING);
			$info['user_login'] = $user_name;
			$info['user_password'] = $pass;
            $redirect = filter_var($_POST['redirect'], FILTER_VALIDATE_BOOLEAN); // true

			$user_signon = wp_signon( $info, false );

//            wp_logout();
//            new WP_Error( 'broke', __( "I've fallen and can't get up", "my_textdomain" ) );
			if ( is_wp_error($user_signon)  ){

                print json_encode(array('loggedin'=>false,'redirect'=> $redirect, 'message'=>__('Wrong username or password.')));
			} else if($status = $user_signon->data->user_status){
                $status = (int)$status;
                print json_encode(array('loggedin'=>true,'redirect'=>$redirect, 'url_referer'=>$_POST['_wp_http_referer'],'level'=>$user_signon->roles[0],'stauts'=>$status));
			} else{
                wp_logout();
                print json_encode(array('loggedin'=>true,'redirect'=>$redirect, 'url_referer'=>$_POST['_wp_http_referer'],'level'=>$user_signon->roles[0],'stauts'=>false));
            }

			die();


		}
		public static function check_mail(){
			$email = get_user_by_email($_POST['email']);
			$isAvailable = true;
			if($email){
				$isAvailable = false;
			}
			print  json_encode(array(
				'valid' => $isAvailable,
			));
			exit();
		}

		public static  function sent_mail($url,$email,$name,$subject){
			$to = $email;

			ob_start();

			// include $template_name."-".$part_name.".php";
			require_once(THEME_BACKEND.'template_mail.php');
			$body = ob_get_contents();
			ob_end_clean();
			$headers = array('Content-Type: text/html; charset=UTF-8');
			wp_mail( $to, $subject, $body, $headers );


		}

	}

	new TheCoCa_Ajax();
}
