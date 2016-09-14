<footer>
    <div class="info-footer">
        <div class="col-md-6">
            <h1 class="title-footer-left"><a href="javascript:void(0)"><img src="<?php print THEME_IMG_URI; ?>logo-footer-left.png" alt=""></a></h1>
        </div>
        <div class="col-md-6">
            <h1 class="title-footer-left"><a href="javascript:void(0)"><img src="<?php print THEME_IMG_URI; ?>logo-footer-right.png" alt=""></a></h1>
        </div>
    </div>
    <a href="<?php print home_url('/'); ?>" class="logo-center"></a>
</footer>
<?php
if(is_page_template('page_profile.php') || is_page_template('page_result.php')){
    get_template_part('template/invite');
}
if(is_page_template('page_result.php')){
    get_template_part('template/review');
}
get_template_part('template/nofication');
if(!is_user_logged_in()):
get_template_part('template/login');
endif;
?>
<?php wp_footer(); ?>
</body>
</html>