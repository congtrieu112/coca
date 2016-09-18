<?php
/**
 * @package WordPress
 * @subpackage Theme
 * @since theme 1.0
 */

if( !class_exists( 'SetupQuiz' ) ) {
	class SetupQuiz{
		protected $func_args = array();
        protected  $time_interval = "";
        protected $active_game = true;
        protected $page_start = false;
        protected $page_result = false;
		function __construct()
		{
			$this->contant();
			//spl_autoload_register( array( $this, 'autoLoadIncs' ) );
			$this->setFuncs_Args();
            add_action('init', array($this,'myStartSession'), 1);

		}
        function myStartSession() {
            if(!session_id()) {
                session_start();
            }
        }
		public function  check_active_game(){
             $date_end = !empty(get_option('end_time_game')) ? get_option('end_time_game') : '';
             $status =  !empty(get_option('status_game')) ? get_option('status_game') : '';
             $date = strtotime($date_end);
             $curent = time();

            if( $curent > $date || !$status){
                $this->active_game = false;
            }
        }

		
		public function contant()
		{
			//

			// $this->define('OPS_THEME', 'theshopier_datas');
			$this->define('THEME_NAME', 'CoCa');
			$this->define('THEME_DIR', get_template_directory() . '/');
			$this->define('THEME_URI', get_template_directory_uri() . '/');

			$this->define('THEME_IMG_URI', THEME_URI . 'images/');
			$this->define('THEME_CSS_URI', THEME_URI . 'css/');
			$this->define('THEME_JS_URI', THEME_URI . 'js/');

			$this->define('THEME_FRAMEWORK', THEME_DIR . 'framework/');
			$this->define('THEME_FRAMEWORK_INCS', THEME_FRAMEWORK . 'incs/');
			$this->define('THEME_FRAMEWORK_FUNC', THEME_FRAMEWORK . 'functions/');

			$this->define('THEME_FRONTEND', THEME_FRAMEWORK . 'frontend/');
			$this->define('THEME_FE_LIBS', THEME_FRONTEND . 'libs/');
			$this->define('THEME_FE_IMG', THEME_FRONTEND . 'images/');
			$this->define('THEME_FE_CSS', THEME_FRONTEND . 'css/');
			$this->define('THEME_FE_JS', THEME_FRONTEND . 'js/');

			$this->define('THEME_FRAMEWORK_URI', THEME_URI . 'framework/');
			$this->define('THEME_FRONTEND_URI', THEME_FRAMEWORK_URI . 'frontend/');
			$this->define('THEME_FE_CSS_URI', THEME_FRONTEND_URI . 'css/');
			$this->define('THEME_FE_JS_URI', THEME_FRONTEND_URI . 'js/');
			$this->define('THEME_FE_IMG_URI', THEME_FRONTEND_URI . 'images/');

			$this->define('THEME_BACKEND', THEME_FRAMEWORK . 'backend/');
			$this->define('THEME_BACKEND_CSS', THEME_BACKEND . 'css/');
			$this->define('THEME_BACKEND_INCS', THEME_BACKEND . 'incs/');
			$this->define('THEME_BACKEND_FUNC', THEME_BACKEND . 'functions/');

			$this->define('THEME_BACKEND_URI', THEME_FRAMEWORK_URI . 'backend/');
			$this->define('THEME_BACKEND_CSS_URI', THEME_BACKEND_URI . 'css/');
			$this->define('THEME_BACKEND_JS_URI', THEME_BACKEND_URI . 'js/');
	
		}

		public function init(){
			$this->init_Incs_Args();
			add_action('wp_enqueue_scripts', array($this, 'frontendScripts'));

			if (!current_user_can('administrator') && !is_admin()) {
				add_filter('show_admin_bar', '__return_false');
			}
		}

		public function frontendScripts()
		{

		    $this->time_interval = !empty(get_option('interval')) ? get_option('interval') : '';
            $this->page_start = (is_page_template('page_test_start.php')) ? true: false;
            $this->check_active_game();
            $this->page_result = get_page_link(get_id_of_template("page_result.php"));
			wp_enqueue_style('bootstrap.min', THEME_URI . 'css/bootstrap.min.css');
			wp_enqueue_style('radio_css', THEME_URI . 'css/magic-check.css');
       		wp_enqueue_style('font-awesome_css', THEME_URI . 'css/font-awesome.css');
			wp_enqueue_style('scroll_css', THEME_URI . 'css/tinyscrollbar.css');
			wp_enqueue_style('custom.css', THEME_URI . 'css/style.css');


			wp_register_script('jquery_google','https://code.jquery.com/jquery-latest.min.js',array(),false,true);
			wp_register_script('boostrap_js',THEME_URI.'js/bootstrap.min.js',array(),false,true);
			wp_register_script('scroll_js',THEME_URI.'js/jquery.tinyscrollbar.js',array(),false,true);
			wp_register_script('custom_js',THEME_URI.'js/process.js',array(),false,true);
			wp_register_script('validate_js',THEME_URI.'js/bootstrapValidator.js',array(),false,true);
			wp_localize_script('custom_js','MyCongfig',array('page_result_url'=>$this->page_result,'template_root_url'=>get_template_directory_uri(),'page_template_start'=>$this->page_start,'active_game'=>$this->active_game,'time_end'=>$this->time_interval,'AjaxUrl'=>admin_url('admin-ajax.php' ),'home_url'=>home_url('/')) );
			

			wp_enqueue_script('jquery_google');
			wp_enqueue_script('scroll_js');
			wp_enqueue_script('boostrap_js');
			wp_enqueue_script('validate_js');
			wp_enqueue_script('custom_js');

		}
		private function define($name, $value)
		{
			if (!defined($name)) {
				define($name, $value);
			}
		}
		private function setFuncs_Args()
		{
			$this->func_args = array(
				
				'' => array(
					'path' => THEME_FRAMEWORK_FUNC,
					'args' => array('ajax_functions','menu_functions'),
				),
			);
		}

		private function init_Incs_Args()
		{
			// foreach ($this->libs as $k => $incs) {
			// 	$conditions = $this->checkConditions($k);
			// 	if ($conditions) {
			// 		// $incs['args'] = explode( ',', $incs['args'] );
			// 		foreach ($incs['args'] as $inc) {
			// 			include_once $incs['path'] . trim($inc) . ".php";
			// 		}
			// 	}

			// }

			// foreach ($this->incs_args as $k => $incs) {
			// 	$conditions = $this->checkConditions($k);
			// 	if ($conditions) {
			// 		//$incs['args'] = explode( ',', $incs['args'] );
			// 		foreach ($incs['args'] as $inc) {
			// 			include_once $incs['path'] . trim($inc) . ".php";
			// 		}
			// 	}

			// }

			foreach ($this->func_args as $k => $incs) {
				$conditions = $this->checkConditions($k);
				if ($conditions) {
					/*$incs['args'] = explode( ',', $incs['args'] );*/
					foreach ($incs['args'] as $inc) {
						include_once $incs['path'] . trim($inc) . ".php";
					}
				}

			}

		}
		private function checkConditions($conditions = '')
		{
			$return = false;
			switch ($conditions) {
				case 'frontend':
					$return = !is_admin() ? true : false;
					break;
				case 'backend':
					$return = is_admin() ? true : false;
					break;
				default:
					$return = true;
			}
			return $return;
		}

		public function get_id_of_template_name($name){
			$args = [
				'post_type' => 'page',
				'fields' => 'ids',
				'nopaging' => true,
				'meta_key' => '_wp_page_template',
				'meta_value' => $name
			];

			$pages = get_posts( $args );
			return apply_filters('get_id_of_template_name',array_shift($pages));
		}

		
	}
}

