<?php
get_header();
print '<div style="min-height:300px"></div>';
$key = filter_var($_GET['key'],FILTER_SANITIZE_STRING);
global $wpdb;
$option = "";
$option = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM $wpdb->users WHERE user_activation_key = %s ", $key ) );

if($option) {
    if(isset($option[0])&& $user_id = $option[0]){
        $wpdb->update( $wpdb->users, array('user_activation_key'=>'','user_status'=>1), array('ID'=>$user_id) );
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


