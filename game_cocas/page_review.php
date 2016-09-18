<?php
/*
* Template Name: Review
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php
    wp_head(); 
    ?>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-default color-none">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#">Brand</a> -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="fix-center">
                	<ul class="nav navbar-nav max-with-menu coca-menu-top">
                        <li class="active"><a href="javascript:void(0)"> <span >TRANG CHỦ</span></a></li>
                        <li><a href="javascript:void(0)"><span>TRANH TÀI NGAY</span></a></li>
                        <li><a href="javascript:void(0)"><span>Thể lệ & Giải thưởng</span></a></li>
                        <li><a href="javascript:void(0)"><span>Bảng xếp hạng</span></a></li>
                        <li><a href="javascript:void(0)"><span>kết quả</span></a></li>
                        <li class="loged">
                    		<a href="javascript:void(0)" class="avata-user"><img src="<?php print THEME_IMG_URI; ?>avata.png" alt=""></a>
                        	<a href="javascript:void(0)" class="profile-user">Nguyễn Văn A</a> 
                        	<a href="javascript:void(0)" class="logout-user">Đăng xuất</a>
                        </li>
                    </ul>
                </div>
                    
                   
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
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
    <footer>
        <div class="info-footer">
            <div class="col-md-6">
                <h1 class="title-footer-left"><a href="javascript:void(0)"><img src="<?php print THEME_IMG_URI; ?>logo-footer-left.png" alt=""></a></h1>
            </div>
            <div class="col-md-6">
                <h1 class="title-footer-left"><a href="javascript:void(0)"><img src="<?php print THEME_IMG_URI; ?>logo-footer-right.png" alt=""></a></h1>
            </div>
        </div>
        <a href="javascript:void(0);" class="logo-center"></a>
    </footer>
    <?php get_template_part('template/review' ); ?>
    <?php wp_footer(); ?>

    <script>
    $(document).ready(function () {
        $(".bs-example-modal-sm").modal('show');  
        $(".review-result").click(function(event) {
            $(".bs-example-modal-sm").modal('show');  
        });
         
        $('a.close_nofication').click(function(event) {
            $(".bs-example-modal-sm").modal('hide');   
        });
        
    });
</script>
  </body>
</html>