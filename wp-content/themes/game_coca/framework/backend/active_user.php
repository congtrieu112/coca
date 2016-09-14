<?php
get_header();

print '<div style="min-height:300px"></div>';
$key = filter_var($_GET['key'],FILTER_SANITIZE_STRING);
$setting = array(

'meta_key'         => 'key_active',
'meta_value'       => $key,
'post_type'        =>'winner'
);
global $options;
$options = get_posts( $setting );
$option = "";
if($options) {

    $option = array_shift($options);
    if(isset($option->ID)){
        update_post_meta($option->ID, "status", 1);
        update_post_meta($option->ID, "key_active", '');
    }


}

get_footer();

?>
<script>
    $(document).ready(function () {
        var message = "<?php print ($option) ? "Bạn đã active thành công <br /> vui lòng đăng nhập lại":"Đường link không tồn tại"; ?>";
        $('.error-nofiaction').html(message);
        $('.nofication-poups').modal('show');
        $('.nofication-poups').on('hidden.bs.modal', function (e) {
            location.href = "<?php print home_url('/'); ?>";

        })
    });
</script>


