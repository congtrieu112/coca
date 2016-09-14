<?php
/*
Plugin Name: WP-quiz-custom
Plugin URI: #
Description: A powerful and beautiful quiz plugin for WordPress.
Version: 0.37
Author: Congtrieu
Author URI: #
Text Domain: wp-quiz
Domain Path: /languages
*/
// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'WPQUIZ__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define('WPQUIZ__PLUGIN_URl',plugin_dir_url( __FILE__ ));
if ( !class_exists( 'WpQuizCustom' ) ) {
    class WpQuizCustom
    {
    	public function __construct(){

    		if(is_admin()){

    			$this->plugin_name = basename( dirname( __FILE__ ) ) . '/' . basename( __FILE__ );

	            // Activate for New Installs
	            register_activation_hook( $this->plugin_name, array( &$this, 'activate_quiz' ) );

	            // Activate for Updates
            	add_action( 'plugins_loaded', array( &$this, 'activate_quiz' ) );

	    		// Add the admin menu
	            add_action( 'admin_menu', array( &$this, 'add_menu' ) );

	            // add post type quiz and game
	            add_action("init",array(&$this,"create_post_type"));

	            // add meta box with post type quiz
	            add_action( 'add_meta_boxes',array( &$this,'register_meta_boxes_quiz') );

	            // save post with post type quiz
				add_action( 'save_post', array(&$this,'save_quiz_meta') );

				// Add the script and style files
            	add_action( 'admin_enqueue_scripts', array( &$this, 'load_resources' ) );

            	// Add user profile
            	// add_action( 'show_user_profile', array(&$this, 'additional_user_fields') );
		
				// add_action( 'edit_user_profile', array(&$this,'additional_user_fields') );

				// save user profile
				// add_action( 'personal_options_update', array(&$this,'save_additional_user_meta') );
				
				// add_action( 'edit_user_profile_update', array(&$this,'save_additional_user_meta') );

				// add column view game
				add_filter('manage_game_posts_columns' , array(&$this,'set_game_columns'));
    			
				// add column view winner
				add_filter('manage_winner_posts_columns' , array(&$this,'set_winner_columns'));
    			
    			// add custom view game
    			add_action( 'manage_game_posts_custom_column', array(&$this,'bs_game_table_content'),10,2 );
    			
    			// add custom view winner
    			add_action( 'manage_winner_posts_custom_column', array(&$this,'bs_winner_table_content'),10,2 );

    			// update meta game
    			add_action( 'save_post', array(&$this,'update_meta_game') );

    			// update meta game
    			add_action( 'save_post', array(&$this,'update_meta_winner') );

    			//sort table game
    			add_action( 'pre_get_posts', array(&$this,'my_slice_orderby') );

    			//sort table winner
    			add_action( 'pre_get_posts', array(&$this,'my_winner_orderby') );


    			add_filter( 'manage_edit-game_sortable_columns', array(&$this,'bs_event_table_sorting' ));

    		 	 //Hook the filter options form
    			add_action('restrict_manage_posts',array(&$this,'add_meta_value_to_posts'));
    			

    			// Hook delete user
    			add_action('deleted_user' , array(&$this,'delete_user_info'));
    		}

    	}

    		function delete_user_info($user_id){
    			// get id create by user id
    			$array = array(
    				'post_type'=>'winner',
    				'meta_query' => array(
						array(
							'key'     => 'user_play',
							'value'   => array( $user_id ),
							'compare' => 'IN',
						),
					),
    			);
    			$query = get_posts($array);
    			if($query && isset($query[0]->ID)){
    				wp_delete_post($query[0]->ID);
					delete_post_meta($query[0]->ID,'key_active');
					delete_post_meta($query[0]->ID,"total_correct_question");
					delete_post_meta($query[0]->ID,"total_incorrect_question");
					delete_post_meta($query[0]->ID,"total_point");
					delete_post_meta($query[0]->ID,"total_time_finish");
					delete_post_meta($query[0]->ID,"chance");
					delete_post_meta($query[0]->ID,"prize");
					delete_post_meta($query[0]->ID,"user_play");
					delete_post_meta($query[0]->ID,"level");
					delete_post_meta($query[0]->ID,"department");
    			}
    			


    		}
	    	function add_meta_value_to_posts(){

		        // only add filter to shop_order
		        global $post_type;
		        if( $post_type == 'game' ) {

		            

		            // Generate select field from meta values
		            echo '<select name="user_id" id="_payment_method">';
		            echo '<option value="" >All user</option>';
		            	$args = array(
		            		'role'=>'Subscriber'
		            		);
		            	$users = get_users($args);
		            	$select = (isset($_GET['user_id']) && $_GET['user_id']) ? $_GET['user_id'] : "";
		            	foreach ($users as $user) {
		            		$selected = ($select == $user->ID) ? "selected" : "";
		            		echo '<option value="'.$user->ID.'" '.$selected.'  >'.$user->display_name.'</option>';
		            	}
		                    
		                
		            echo '</select>';

		        }

		    }


			


	    	function bs_event_table_sorting( $columns ) {
	    		$columns['correct_question'] = 'correct_question';
	    		$columns['incorrect_question'] = 'incorrect_question';
	    		$columns['point_game'] = 'point_game';
	    		$columns['user_play'] = 'user_play';
	    		return $columns;
	    	}


			function my_slice_orderby( $query ) {
			    if( ! is_admin() )
			        return;
			    
			    $user_id = 0;
			    if(isset($_GET['user_id']) && $_GET['user_id'] > 0 ){
			    	$user_id = $_GET['user_id'];
			    }
				if( $query->get('post_type')=='game' ){
						 
					if($user_id){
							$query->set('meta_key','user_play');
							$query->set('meta_value',$user_id);
					}else if( $query->get('orderby') == '' ){
				        	$query->set('meta_key','correct_question');
				            $query->set('orderby','meta_value');
				    }
		        	
			        if( $query->get('order') == '' )
			            $query->set('order','desc');

				 }

			}

			function my_winner_orderby( $query){
				if( ! is_admin() )
			        return;
			    if( $query->get('post_type')=='winner' ){
						 
					 if( $query->get('orderby') == '' ){
				        	$query->set('meta_key','total_point');
				            $query->set('orderby','meta_value');
				    }
		        	
			        if( $query->get('order') == '' )
			            $query->set('order','desc');

				 }

			}
			function update_meta_winner($post_id){
				// Add nonce for security and authentication.
	        $nonce_name   = isset( $_POST['custom_nonce'] ) ? $_POST['custom_nonce'] : '';
	        $nonce_action = 'custom_nonce_action';
	 
	        // Check if nonce is set.
	        if ( ! isset( $nonce_name ) ) {
	            return;
	        }
	 
	        // Check if nonce is valid.
	        if ( ! wp_verify_nonce( $nonce_name, $nonce_action ) ) {
	            return;
	        }
	 
	        // Check if user has permissions to save data.
	        if ( ! current_user_can( 'edit_post', $post_id ) ) {
	            return;
	        }
	 
	        // Check if not an autosave.
	        if ( wp_is_post_autosave( $post_id ) ) {
	            return;
	        }
	 
	        // Check if not a revision.
	        if ( wp_is_post_revision( $post_id ) ) {
	            return;
	        }


	        
			$total_correct_question = filter_var($_POST['total_correct_question'],FILTER_SANITIZE_NUMBER_INT );
		    $total_incorrect_question = filter_var($_POST['total_incorrect_question'],FILTER_SANITIZE_NUMBER_INT );
			$total_point = filter_var($_POST['total_point'],FILTER_SANITIZE_NUMBER_INT );
			$total_time_finish = filter_var($_POST['total_time_finish'],FILTER_SANITIZE_NUMBER_INT );
			$user_play = filter_var($_POST['user_play'],FILTER_SANITIZE_NUMBER_INT );
			$chance = filter_var($_POST['chance'],FILTER_SANITIZE_NUMBER_INT );
			$prize = filter_var($_POST['prize'],FILTER_SANITIZE_NUMBER_INT );
			$department = filter_var($_POST['department'],FILTER_SANITIZE_NUMBER_INT );
			$level = filter_var($_POST['level'],FILTER_SANITIZE_NUMBER_INT );
			if(!$total_correct_question || !$total_incorrect_question || !$total_point || !$total_time_finish || !$user_play )
				return false;
			
			update_post_meta($post_id,"total_correct_question",$total_correct_question);
			update_post_meta($post_id,"total_incorrect_question",$total_incorrect_question);
			update_post_meta($post_id,"total_point",$total_point);
			update_post_meta($post_id,"total_time_finish",$total_time_finish);
			update_post_meta($post_id,"chance",$chance);
			update_post_meta($post_id,"prize",$prize);
			update_post_meta($post_id,"user_play",$user_play);
			update_post_meta($post_id,"level",$level);
			update_post_meta($post_id,"department",$department);
			}

    		function update_meta_game($post_id){
				// Add nonce for security and authentication.
	        $nonce_name   = isset( $_POST['custom_nonce'] ) ? $_POST['custom_nonce'] : '';
	        $nonce_action = 'custom_nonce_action';
	 
	        // Check if nonce is set.
	        if ( ! isset( $nonce_name ) ) {
	            return;
	        }
	 
	        // Check if nonce is valid.
	        if ( ! wp_verify_nonce( $nonce_name, $nonce_action ) ) {
	            return;
	        }
	 
	        // Check if user has permissions to save data.
	        if ( ! current_user_can( 'edit_post', $post_id ) ) {
	            return;
	        }
	 
	        // Check if not an autosave.
	        if ( wp_is_post_autosave( $post_id ) ) {
	            return;
	        }
	 
	        // Check if not a revision.
	        if ( wp_is_post_revision( $post_id ) ) {
	            return;
	        }
	        
			$correct_question = filter_var($_POST['correct_question'],FILTER_SANITIZE_NUMBER_INT );
		    $incorrect_question = filter_var($_POST['incorrect_question'],FILTER_SANITIZE_NUMBER_INT );
			$point_game = filter_var($_POST['point_game'],FILTER_SANITIZE_NUMBER_INT );
			$time_finish = filter_var($_POST['time_finish'],FILTER_SANITIZE_NUMBER_INT );
			$time_start = filter_var($_POST['time_start'],FILTER_SANITIZE_NUMBER_INT );
			$user_play = filter_var($_POST['user_play'],FILTER_SANITIZE_NUMBER_INT );
			if(!$correct_question || !$incorrect_question || !$point_game || !$time_finish || !$time_start || !$user_play )
				return false;
			
			update_post_meta($post_id,"correct_question",$correct_question);
			update_post_meta($post_id,"incorrect_question",$incorrect_question);
			update_post_meta($post_id,"point_game",$point_game);
			update_post_meta($post_id,"time_finish",$time_finish);
			update_post_meta($post_id,"time_start",$time_start);
			update_post_meta($post_id,"user_play",$user_play);
			
			}

			
			function set_game_columns($columns) {
			    $columns['correct_question'] = __('Correct question','wp-quiz');
			    $columns['incorrect_question'] = __('InCorrect question','wp-quiz');
			    $columns['user_play'] = __('User play','wp-quiz');
			    $columns['point_game'] = __('Point ','wp-quiz');
			    unset($columns['date']);
			    return $columns;
			}

			function set_winner_columns($columns){
				$columns['user_play'] = __('User play','wp-quiz');
				$columns['total_correct_question'] = __('Total correct question','wp-quiz');
			    $columns['total_incorrect_question'] = __('Total inCorrect question','wp-quiz');
			    $columns['total_time_finish'] = __('Total time finish','wp-quiz');
			    $columns['total_point'] = __('Total Point ','wp-quiz');
			    unset($columns['date']);
			    unset($columns['title']);
			    return $columns;

			}


		    
			function bs_game_table_content( $column_name, $post_id ) {
			    if ( 'correct_question' == $column_name ){
					//Get number of slices from post meta
				    $correct_question = get_post_meta($post_id, 'correct_question', true);
				    echo intval($correct_question);
			        
			    }
			    if ( 'incorrect_question' == $column_name ){
					//Get number of slices from post meta
				    $incorrect_question = get_post_meta($post_id, 'incorrect_question', true);
				    echo intval($incorrect_question);
			        
			    }
			    if ( 'point_game' == $column_name ){
					//Get number of slices from post meta
				    $point_game = get_post_meta($post_id, 'point_game', true);
				    echo intval($point_game);
			        
			    }

			    if ( 'user_play' == $column_name ){
					//Get number of slices from post meta
				    $user_play = get_post_meta($post_id, 'user_play', true);
				    $user = get_user_by('id', $user_play);
				    echo '<a href="user-edit.php?user_id='.$user->ID.'">'.$user->display_name.'</a>';
			        
			    }
			    
			}

			function bs_winner_table_content( $column_name, $post_id ) {
			    if ( 'total_correct_question' == $column_name ){
					//Get number of slices from post meta
				    $total_correct_question = get_post_meta($post_id, 'total_correct_question', true);
				    echo intval($total_correct_question);
			        
			    }
			    if ( 'total_incorrect_question' == $column_name ){
					//Get number of slices from post meta
				    $total_incorrect_question = get_post_meta($post_id, 'total_incorrect_question', true);
				    echo intval($total_incorrect_question);
			        
			    }
			    if ( 'total_point' == $column_name ){
					//Get number of slices from post meta
				    $total_point = get_post_meta($post_id, 'total_point', true);
				    echo intval($total_point);
			        
			    }
			    if ( 'total_time_finish' == $column_name ){
					//Get number of slices from post meta
				    $total_time_finish = get_post_meta($post_id, 'total_time_finish', true);
				    echo intval($total_time_finish);
			        
			    }

			    if ( 'user_play' == $column_name ){
					//Get number of slices from post meta
				    $user_play = get_post_meta($post_id, 'user_play', true);
				    $user = get_user_by('id', $user_play);
				    echo '<a href="post.php?post='.$post_id.'&action=edit">'.$user->display_name.'</a>';
			        
			    }
			    
			}
		
		


		/**
		* Saves additional user fields to the database
		*/
		function save_additional_user_meta( $user_id ) {

			if($this->get_user_role() != "administrator")
				return false;	
		 
		    // only saves if the current user can edit user profiles
		    if ( !current_user_can( 'edit_user', $user_id ) )
		        return false;
		    
		 	$deparment = filter_var($_POST['user_meta_id_department'],FILTER_SANITIZE_NUMBER_INT );

		    update_usermeta( $user_id, 'user_meta_id_department', $deparment );
		}
		 
		

    	// On Activation - Create SlickQuiz Database Table And Setup Options
        function activate_quiz()
        {
            $this->create_quiz_table_user_request();
            

           
        }
     

        // Create Quiz Database Table
        function create_quiz_table_user_request()
        {
            global $wpdb;

			if (!function_exists('dbDelta')) {
            	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        	}

			$table_name = $wpdb->prefix . 'plugin_custom_quiz_user_request';

			dbDelta( "CREATE TABLE {$table_name} (
			  id_chance int(10) unsigned NOT NULL AUTO_INCREMENT,
			  user_id_sent int(11) NOT NULL, 
			  user_id_received int(11) NOT NULL ,
			  PRIMARY KEY  (id_chance)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8; ");
		}

		/**
		 * Adds additional user fields
		 * more info:
		 */
		 
		function additional_user_fields( $user ) { ?>
		    <h3><?php _e( 'Additional User Meta', 'wp-quiz' ); ?></h3>
		 
		    <table class="form-table">
		        
		        <tr>
		            <th><label for="user_meta_id_department"><?php _e( 'Department', 'wp-quiz' ); ?></label></th>
		            <td>
		                <select name="user_meta_id_department" id="user_meta_id_department" >
		                	<?php $this->get_deparment($user->ID); ?>
		                </select>
		            </td>
		        </tr>
		        
		 
		    </table><!-- end form-table -->
		<?php } // additional_user_fields

		function get_deparment($id_user){
			$deparment = get_the_author_meta( 'user_meta_id_department', $id_user );
			$args = array(  'post_type'=> 'department','posts_per_page' => -1 );
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) :  ?>
				<option <?php print ($deparment == $post->ID) ? "selected":""; ?> value="<?php print $post->ID; ?>"><?php print $post->post_title; ?></option>
		<?php endforeach; 
			wp_reset_postdata();
		}


		function get_user_role() {
			global $current_user;

			$user_roles = $current_user->roles;
			$user_role = array_shift($user_roles);

			return $user_role;
		}

    	// Add Quiz Menu to Navigation
        function add_menu()
        {
            // Accessible to Authors, Editors, and Admins
            add_menu_page( 'CustomQuiz', 'CustomQuiz', 'publish_posts', 'customQuiz', array( &$this, 'direct_route' ), 'dashicons-awards' );

            // Accessible to Editors and Admins
            add_submenu_page( 'customQuiz', 'Add Quiz', 'Table of users’ results', 'publish_pages', 'customquiz-new', array( &$this, 'direct_route') );

            // Accessible to Admins
            add_submenu_page( 'customQuiz', 'Default Options', 'Default Options', 'manage_options', 'customquiz-options', array( &$this, 'direct_route') );
        }
         // Basic Router
        function direct_route()
        {
        	switch ( $_GET['page'] ) {
            case 'customQuiz' :
            	include_once ( WPQUIZ__PLUGIN_DIR.'inc/model/class.setting.php' );
                include_once ( WPQUIZ__PLUGIN_DIR.'inc/view/template_setting_quiz.php' );
                break;
           
            default :
                // include_once ( dirname ( __FILE__ ) . '/php/slickquiz-admin.php' );
                break;
            }
        }
        function create_post_type(){
        		// register quiz
			  register_post_type( 'quiz',
			    array(
			      'labels' => array(
			        'name' => __( 'Question','wp-quiz' ),
			        'singular_name' => __( 'quiz','wp-quiz' )
			      ),
			      'public' => true,
			      'has_archive' => true,
			      'rewrite' => array('slug' => 'quizs'),
				  'supports' => array( 'title' ),
			    )
			  );
			  	// register game
			  register_post_type( 'game',
			    array(
			      'labels' => array(
			        'name' => __( 'History game','wp-quiz' ),
			        'singular_name' => __( 'game','wp-quiz' )
			      ),
			      'public' => true,
			      'has_archive' => true,
			      'rewrite' => array('slug' => 'games'),
				  'supports' => array( 'title' ),
			    )
			  );
			  // register game
			  register_post_type( 'department',
			    array(
			      'labels' => array(
			        'name' => __( 'Department','wp-quiz' ),
			        'singular_name' => __( 'department','wp-quiz' )
			      ),
			      'public' => true,
			      'has_archive' => true,
			      'rewrite' => array('slug' => 'departments'),
				  'supports' => array( 'title' ),
			    )
			  );
			  // register game
			  register_post_type( 'prize',
			    array(
			      'labels' => array(
			        'name' => __( 'Prize','wp-quiz' ),
			        'singular_name' => __( 'prize','wp-quiz' )
			      ),
			      'public' => true,
			      'has_archive' => true,
			      'rewrite' => array('slug' => 'prizes'),
				  'supports' => array( 'title' ),
			    )
			  );

			  // Table of winners
			  register_post_type( 'winner',
			    array(
			      'labels' => array(
			        'name' => __( 'Charts','wp-quiz' ),
			        'singular_name' => __( 'winner','wp-quiz' )
			      ),
			      'public' => true,
			      'has_archive' => true,
			      'rewrite' => array('slug' => 'winners'),
				  'supports' => array( 'title' ),
			    )
			  );

			// Table of winners
			register_post_type( 'manager',
				array(
					'labels' => array(
						'name' => __( 'Manager','wp-quiz' ),
						'singular_name' => __( 'manager','wp-quiz' )
					),
					'public' => true,
					'has_archive' => true,
					'rewrite' => array('slug' => 'managers'),
					'supports' => array( 'title' ),
				)
			);
			  

        }
        /**
		 * Register meta box(es).
		 */
		function register_meta_boxes_quiz() {
		    add_meta_box( 'meta-box-quiz-id', __( 'My question', 'wp-quiz' ), array(&$this,'quiz_meta'), 'quiz' );
		    add_meta_box( 'meta-box-game-id', __( 'My game', 'wp-quiz' ), array(&$this,'game_meta'), 'game' );
		    add_meta_box( 'meta-box-winner-id', __( 'My winner', 'wp-quiz' ), array(&$this,'winner_meta'), 'winner' );
		}
		function game_meta($post){
			// Add nonce for security and authentication.
        	wp_nonce_field( 'custom_nonce_action', 'custom_nonce' );
			require_once(WPQUIZ__PLUGIN_DIR.'inc/view/template_meta_box_game.php');
		}

		function quiz_meta($post){
			// Add nonce for security and authentication.
        	wp_nonce_field( 'custom_nonce_action', 'custom_nonce' );
        	$data = get_post_meta( $post->ID, "question", true );
        	$data = json_decode($data,true, 512, JSON_UNESCAPED_UNICODE);
        	
        	require_once(WPQUIZ__PLUGIN_DIR.'inc/view/template_meta_box.php');

		}

		function winner_meta($post){
			// Add nonce for security and authentication.
        	wp_nonce_field( 'custom_nonce_action', 'custom_nonce' );
			require_once(WPQUIZ__PLUGIN_DIR.'inc/view/template_meta_box_winner.php');
		}
		function save_quiz_meta($post_id){
			// Add nonce for security and authentication.
	        $nonce_name   = isset( $_POST['custom_nonce'] ) ? $_POST['custom_nonce'] : '';
	        $nonce_action = 'custom_nonce_action';
	 
	        // Check if nonce is set.
	        if ( ! isset( $nonce_name ) ) {
	            return;
	        }
	 
	        // Check if nonce is valid.
	        if ( ! wp_verify_nonce( $nonce_name, $nonce_action ) ) {
	            return;
	        }
	 
	        // Check if user has permissions to save data.
	        if ( ! current_user_can( 'edit_post', $post_id ) ) {
	            return;
	        }
	 
	        // Check if not an autosave.
	        if ( wp_is_post_autosave( $post_id ) ) {
	            return;
	        }
	 
	        // Check if not a revision.
	        if ( wp_is_post_revision( $post_id ) ) {
	            return;
	        }
	        
			$data = json_encode($_POST['question'],JSON_UNESCAPED_UNICODE);
			$data = stripcslashes($data);
			update_post_meta($post_id,"question",$data);
			
			

		}

		


		// Add Admin JS and styles
        function load_resources()
        {
        	// Only load resources when in customQuiz Admin page
            
            if(isset($_GET['page']) && $_GET['page']=='customQuiz'){
            	wp_enqueue_script( 'jquery' );
	            wp_enqueue_script( 'customquiz_date_first_js', plugins_url( '/js/jquery.js', __FILE__ ) );
	            wp_enqueue_script( 'customquiz_date_js', plugins_url( '/js/jquery-ui.js', __FILE__ ) );
	            wp_enqueue_script( 'customquiz_date_custom_js', plugins_url( '/js/custom.js', __FILE__ ) );
	            wp_enqueue_style( 'customquiz_date_css', plugins_url( '/css/jquery-ui.css', __FILE__ ) );
            }
            // Only load resources when in CustomQuiz Admin section
            preg_match( '/post/is', $_SERVER['REQUEST_URI'], $matches );
            if ( count( $matches) == 0 ) return;

            // Scripts
            wp_enqueue_script( 'jquery' );
            wp_enqueue_script( 'customquiz_admin_js', plugins_url( '/js/admin.js', __FILE__ ) );
            wp_localize_script( 'customquiz_admin_js', 'URL_PLUGIN',
		        array( 
		            'url' => WPQUIZ__PLUGIN_URl,
		        )
		    );


            
 			
        }



    }
}

if ( class_exists( 'WpQuizCustom' ) ) {
    global $customQuiz;
    $customQuiz = new WpQuizCustom();
}

if ( class_exists( 'Redux' ) ) {
	
    require_once(WPQUIZ__PLUGIN_DIR.'/config-quiz.php');
}
