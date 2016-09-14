<?php 
	if(($_SERVER['REQUEST_METHOD'] == 'POST')):

	update_option( 'smtp_user_name', $_POST['smtp_user_name'] );
	update_option( 'smtp_pass', $_POST['smtp_pass'] );
	update_option( 'smtp_from', $_POST['smtp_from'] );
	update_option( 'smtp_from_name', $_POST['smtp_from_name'] );


	endif;
?>
<div class="wrap">
<div id="icon-options-general" class="icon32"><br></div><h2>Setting SMTP gmail : </h2>
<form method="post" action="">
<h3 class="title">Update setting :</h3>
<table class="form-table">
<tbody>

<tr valign="top">
<th scope="row">User mail :</th>
<td><input name="smtp_user_name" type="text" id="smtp_user_name" value="<?php $value = get_option('smtp_user_name'); echo !empty($value) ? get_option('smtp_user_name') : ''; ?>" class="regular-text ltr"></td>
</tr>
<tr valign="top">
<th scope="row">Pass mail :</th>
<td><input name="smtp_pass" type="text" id="smtp_pass" class="regular-text ltr"></td>
</tr>
<tr valign="top">
<th scope="row">Email from :</th>
<td><input name="smtp_from" type="text" id="smtp_from" value="<?php $value = get_option('smtp_from'); echo !empty($value) ? get_option('smtp_from') : ''; ?>" class="regular-text ltr"></td>
</tr>

<tr valign="top">
<th scope="row">Name Email : </th>
<td><input name="smtp_from_name" type="text" id="smtp_from_name" value="<?php $value = get_option('smtp_from_name'); echo !empty($value) ? get_option('smtp_from_name') : ''; ?>" class="regular-text ltr"></td>
</tr>
<th scope="row">if erro send  mail ,help with <a target="_blank" href="http://stackoverflow.com/questions/3949824/smtp-error-could-not-authenticate-in-phpmailer/#answer-16298867">click</a> </th>


</tbody></table>
<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Cập nhật"></p></form>
</div>
<div class="clear"></div>

