<?php
/**
 * @package WordPress
 * @subpackage Coca
 * @since Coca 1.0
 */

require_once get_template_directory() . '/framework/theme.php';

$customTheme = new SetupQuiz();
$customTheme->init();



function get_id_of_template($name){
    $custom = new SetupQuiz();
    return $custom->get_id_of_template_name($name);
}

function gui_mail(){
    $to = 'ittrjeu@gmail.com';
    $subject = 'The subject';
    $body = 'The email body content';
    $headers = array('Content-Type: text/html; charset=UTF-8');

    wp_mail( $to, $subject, $body, $headers );
}

