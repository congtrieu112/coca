<div class="modal fade bs-example-modal-sm login-form" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog register-not-manager" role="document">
  <h1 class="title-prize-list left-noficatioin">Đăng nhập</h1>
  <h1 class="title-prize-list right-noficatioin"><a href="javascript:void(0)" class="close_nofication"><img src="<?php print THEME_IMG_URI ?>icon-close.png" alt=""></a></h1>
    <div class="modal-content invite-poup">
      <p class="info-nofication-invite clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <form id="loginform" class="form-horizontal" role="form">
      	<div class="form-group">
      		<input type="email" class="form-control" name="email" id="email" placeholder="Email công ty">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="pass" name="pass" placeholder="password" >
        </div>
        <?php wp_nonce_field( 'ajax-login-nonce', 'security',wp_nonce_url(get_page_link(76)) ); ?>
        <small class="help-block text-center nofication-result"></small>

      	 <button id="btn-invite" type="submit" class="btn btn-info clear profile-end"><span>Đăng nhập</span></button>
      </form>
      <div class="line-login"></div>
      	<p class="clear content-login">Nếu bạn chưa có tài khoản, vui lòng bấm vào <a class="register-login-a" href="<?php print get_page_link(get_id_of_template('page_register.php')); ?>">đây</a> để đăng ký.</p>
    </div>
  </div>
</div>
