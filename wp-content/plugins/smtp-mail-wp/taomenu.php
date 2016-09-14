<?php
add_action("admin_menu",'mylove_taomenu');
function mylove_taomenu(){

		add_menu_page('Config SMTP', 'Config SMTP', 'edit_themes', "parent_slug", "mylove_option","dashicons-edit",58	);

    }
function mylove_option(){
	include "setting.php";
}

add_action( 'phpmailer_init', 'configure_smtp' );
function configure_smtp( PHPMailer $phpmailer ){
     $user = get_option('smtp_user_name'); echo !empty($value) ? get_option('smtp_user_name') : '';
    $pass = get_option('smtp_pass'); echo !empty($value) ? get_option('smtp_pass') : '';
    $form = get_option('smtp_from'); echo !empty($value) ? get_option('smtp_from') : '';
    $form_name = get_option('smtp_from_name'); echo !empty($value) ? get_option('smtp_from_name') : '';


    $phpmailer->isSMTP(); //switch to smtp
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 587;
    $phpmailer->Username = $user;
    $phpmailer->Password = $pass;
    $phpmailer->SMTPSecure = 'tls';
    $phpmailer->From = $form;
    $phpmailer->FromName = $form_name;
}

?>