<?php
/*
* Template Name: Test satart
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
                    <ul class="nav navbar-nav max-with-menu coca-menu-top">
                        <li class="active"><a href="#"> <span >TRANG CHỦ</span></a></li>
                        <li><a href="#"><span>TRANH TÀI NGAY</span></a></li>
                        <li><a href="#"><span>Thể lệ & Giải thưởng</span></a></li>
                        <li><a href="#"><span>Bảng xếp hạng</span></a></li>
                        <li><a href="#"><span>kết quả</span></a></li>
                        <li><a href="#"><span>Đăng nhâp</span></a></li>
                    </ul>
                   
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
    <main>
           
            <div id="signupbox"  class="mainbox">
            	<ul class="nav nav-tabs start-text" role="tablist">
            		<li class="first"></li>
            		<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">1</a></li>
            		<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">2</a></li>
            		<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">3</a></li>
            		<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">4</a></li>
            		<li class="end"></li>
            	</ul>
            	<div class="tab-content">
            	<div role="tabpanel" class="tab-pane active" id="home">
            		<div class="panel panel-info ">
                    <div class="panel-heading col-md-offset-1 col-md-10 col-md-offset-1">
                        <div class="panel-title clear">Đăng ký</div>
                        <p class="content-info-form clear">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>  
                    <div class="panel-body col-md-offset-2 col-md-8 col-md-offset-2" >
                        <div>

						  <!-- Nav tabs -->
						  

						  <!-- Tab panes -->
						  

						</div>
                    </div>
                    <div class="effect-right-form"></div>
                    <div class="effect-left-form"></div>
                </div>
            	</div>
            		<div role="tabpanel" class="tab-pane" id="profile">
            			<div class="panel panel-info ">
                    <div class="panel-heading col-md-offset-1 col-md-10 col-md-offset-1">
                        <div class="panel-title clear">Đăng ký</div>
                        <p class="content-info-form clear">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>  
                    <div class="panel-body col-md-offset-2 col-md-8 col-md-offset-2" >
                        <div>

						  <!-- Nav tabs -->
						  

						  <!-- Tab panes -->
						  

						</div>
                    </div>
                    <div class="effect-right-form"></div>
                    <div class="effect-left-form"></div>
                </div>
            		</div>
            		<div role="tabpanel" class="tab-pane" id="messages">
            			<div class="panel panel-info ">
                    <div class="panel-heading col-md-offset-1 col-md-10 col-md-offset-1">
                        <div class="panel-title clear">Đăng ký</div>
                        <p class="content-info-form clear">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>  
                    <div class="panel-body col-md-offset-2 col-md-8 col-md-offset-2" >
                        <div>

						  <!-- Nav tabs -->
						  

						  <!-- Tab panes -->
						  

						</div>
                    </div>
                    <div class="effect-right-form"></div>
                    <div class="effect-left-form"></div>
                </div>
            		</div>
            		<div role="tabpanel" class="tab-pane" id="settings">
            			<div class="panel panel-info ">
                    <div class="panel-heading col-md-offset-1 col-md-10 col-md-offset-1">
                        <div class="panel-title clear">Đăng ký</div>
                        <p class="content-info-form clear">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>  
                    <div class="panel-body col-md-offset-2 col-md-8 col-md-offset-2" >
                        <div>

						  <!-- Nav tabs -->
						  

						  <!-- Tab panes -->
						  

						</div>
                    </div>
                    <div class="effect-right-form"></div>
                    <div class="effect-left-form"></div>
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
    <?php wp_footer(); ?>
  </body>
</html>