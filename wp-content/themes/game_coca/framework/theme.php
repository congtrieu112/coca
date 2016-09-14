<?php
/**
 * @package WordPress
 * @subpackage Theme
 * @since theme 1.0
 */

if( !class_exists( 'SetupQuiz' ) ) {
	class SetupQuiz{
		protected $func_args = array();

		function __construct()
		{
			$this->contant();
			//spl_autoload_register( array( $this, 'autoLoadIncs' ) );
			$this->setFuncs_Args();

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
		}

		public function frontendScripts()
		{
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
			wp_localize_script('custom_js','MyCongfig',array('AjaxUrl'=>admin_url('admin-ajax.php' ),'home_url'=>home_url('/')) );
			

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
		public static function menu(){

		}
		
	}
}

