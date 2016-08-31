<?php
// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}
class SettingQuiz 
{
	

	function update_setting(){
		
			$status = filter_var($_POST['game_status'],FILTER_SANITIZE_NUMBER_INT );
			$time_end = filter_var($_POST['time_end'], FILTER_SANITIZE_STRING);
			$intervel = filter_var($_POST['time_interval'],FILTER_SANITIZE_NUMBER_INT );
			
			$message= array();
			if(!preg_match('/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/', $time_end)){ 
			   
			   $message ['time_game'] = __(" date incorrect","wp-quiz");
			}
			if($intervel <= 0){
				$message ['interval'] = __(" interval incorrect","wp-quiz");
			}

			if(!$message){
				update_option("status_game",$status);
				update_option("end_time_game",$time_end);
				update_option("interval",$intervel);
			}
			return $message;

	}

}