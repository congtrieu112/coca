<?php
 /* 
 * Template Name: login
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
                            <li class="active"><a href="#"> <span >TRANG CHỦ</span></a></li>
                            <li><a href="#"><span>TRANH TÀI NGAY</span></a></li>
                            <li><a href="#"><span>Thể lệ & Giải thưởng</span></a></li>
                            <li><a href="#"><span>Bảng xếp hạng</span></a></li>
                            <li><a href="#"><span>kết quả</span></a></li>
                            <li><a href="#">Đăng nhập</a></li>
                        </ul>
                    </div>
                   
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
    <main class="main-home content-width">

        <div class="main-left">
            <div class="row">
                <div class="col-md-6 col-md-offset-6">
                    <h1 class="title-main clear">CHINH PHỤC CÔNG NGHỆ <br /> bứt phá rào cản</h1>
                    <a href="javascript:void(0);" class="button-play">Tranh tài ngay</a>
                </div>
                <div class="col-md-9 col-md-offset-3">
                    <div class="prize">
                        <article class="col-md-3">
                            <div class="image-fixed">
                                <img src="<?php print THEME_IMG_URI; ?>prize-encourage.png" alt="" class="img-responsive">
                            </div>
                            <div class="info-article">
                                <h1 class="title-articlee clear">Giải khuyến khích</h1> 
                                <p class="description-article clear">
                                    Một cặp vé <br />xem phim CGV
                                </p> 
                            </div>
                        </article>  
                        <article class="col-md-3">
                            <div class="image-fixed">
                                <img src="<?php print THEME_IMG_URI; ?>prize-second.png" alt="" class="img-responsive">
                            </div>
                            <div class="info-article">
                                <h1 class="title-articlee clear">Giải nhì</h1> 
                                <p class="description-article clear">
                                    Điện thoại OPPO S1S 
                                </p> 
                            </div>
                        </article> 
                        <article class="col-md-3">
                            <div class="image-fixed">
                                <img src="<?php print THEME_IMG_URI; ?>prize-third.png" alt="" class="img-responsive">
                            </div>
                            <div class="info-article">
                                <h1 class="title-articlee clear">Giải ba</h1> 
                                <p class="description-article clear">
                                    Một camera <br /> quay phim 360 độ
                                </p> 
                            </div>
                        </article> 
                        <article class="col-md-3">
                            <div class="image-fixed">
                                <img src="<?php print THEME_IMG_URI; ?>prize-first.png" alt="" class="img-responsive">
                            </div>
                            <div class="info-article">
                                <h1 class="title-articlee clear">Giải nhất</h1> 
                                <p class="description-article clear">
                                    Một chuyến du lịch <br />trong nước
                                </p> 
                            </div>
                        </article>  
                    </div>

                </div>
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
    <?php get_template_part('template/login' ); ?>

    <?php wp_footer(); ?>
    <script>
    $(document).ready(function () {
        

        $(".bs-example-modal-sm").modal('show'); 
        $('.bs-example-modal-sm').on('shown.bs.modal', function (e) {
          var $scrollbar_five = $("#scrollbar5"); 
            $scrollbar_five.tinyscrollbar();
        }) 
        
        $('a.close_nofication').click(function(event) {
            $(".bs-example-modal-sm").modal('hide');   
        });
        
    });
</script>
  </body>
</html>