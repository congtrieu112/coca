<?php
/**
 * @package WordPress
 * @subpackage Coca
 * @since Coca 1.0
 */

require_once get_template_directory() . '/framework/theme.php';

$customTheme = new SetupQuiz();
$customTheme->init();

add_action( 'wp_ajax_check_mail', 'check_mail' );
add_action( 'wp_ajax_nopriv_check_mail', 'check_mail' );
function check_mail(){
    $email = get_user_by_email($_POST['email']);
    $isAvailable = true;
    if($email){
        $isAvailable = false;
    }
    echo json_encode(array(
        'valid' => $isAvailable,
    ));
    exit();
}