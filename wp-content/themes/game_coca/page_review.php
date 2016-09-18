<?php
/*
* Template Name: Review
*/
if(!is_user_logged_in()){
    header("location:".home_url('/'));
}
get_header();
?>

    <main>
           
            <div id="signupbox"  class="mainbox">
            	
            	<div class="panel panel-info ">
            		
                    <h2 class="clear title-reslut">Kết quả</h2>
                    <div class="icon-flag"></div>
                    <p class="text-number-result clear">5/15 CÂU ĐÚNG</p> 
                    <a href="javascript:void(0)" class="review-result"><i class="icon-view-result"></i>Xem lại kết quả</a>
                    <h1 class="sum-point-result clear">tổng điểm đạt được</h1>
            		<div class="content-sum-point-result">
                        150 ĐIỂM      
                    </div>
                    <div class="continue-game">
                        <div class="block-left-game">
                            <p class="more-chance clear">Mời thêm bạn <br> để có thêm lượt chơi</p>
                            <a href="javascript:void(0)" class="sent-invite-buttom"><i class="icon-person"></i>gửi lời mời</a>
                        </div>
                        <div class="block-right-game">
                            <p class="more-chance clear">Bạn vẫn còn 2 lượt chơi</p>
                            <a href="javascript:void(0)" class="sent-invite-buttom"><i class="icon-process"></i>gửi lời mời</a>
                        </div>
                    </div>
                    <div class="line-foot-play"></div>
                    <div class="background-person-play"></div>
            		<div class="effect-right-form"></div>
                    <div class="effect-left-form"></div>
            	</div>
            		
            	
                
            </div> 


    </main>
    <?php get_footer(); ?>