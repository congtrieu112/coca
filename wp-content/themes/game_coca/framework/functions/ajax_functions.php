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
				'ajax_login'	=> true,
			);
			foreach ( $ajax_events as $ajax_event => $nopriv ) {
				add_action( 'wp_ajax_nth_' . $ajax_event, array( __CLASS__, $ajax_event ) );
				if ( $nopriv ) {
					add_action( 'wp_ajax_nopriv_nth_' . $ajax_event, array( __CLASS__, $ajax_event ) );
				}
			}

			
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

			
			$userdata = array(
			    'user_login'  =>  $user_name,
			    'user_email'    =>  $email,
			    'user_pass'   =>  $pass,  // When creating an user, `user_pass` is expected.
				'display_name' => $display_name,
				'first_name'=>$first_name,
				'last_name'=>$last_name,

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

				if($user_id){
					$user = array(
						'level'=> $level,
						'department' =>$department,
						'display_name'=>$display_name,
						'user_id' => $user_id
					);
					if(self::create_charts($user)){
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
			
			$chance = 3;

			// Create post object
			$charts = array(
			  'post_title'    =>  'Tổng lượt chơi của user : '.$user['display_name'],
			  'post_type' => 'winner',
			  'post_status'   => 'publish',
    		  'post_author'   => 1,

			);
		
			 
			//Insert the post into the database
			$post_id = wp_insert_post( $charts );
			if($post_id){
				update_post_meta($post_id,"chance",$chance);
				update_post_meta($post_id,"user_play",$user['user_id']);
				update_post_meta($post_id,"level",$user['level']);
				update_post_meta($post_id,"department",$user['department']);


				update_post_meta($post_id,"total_correct_question",0);
				update_post_meta($post_id,"total_incorrect_question",0);
				update_post_meta($post_id,"total_point",0);
				update_post_meta($post_id,"total_time_finish",0);
				update_post_meta($post_id,"prize",0);
				return $post_id;
			}



			
			
		}

		public static function ajax_login(){
			$json = $_POST;
			if (!wp_verify_nonce($_REQUEST['coca-register-form'],'register-game') ) die( 'Security check' );
			echo wp_json_encode($json);
			wp_die();
		}

	}

	new TheCoCa_Ajax();
}
