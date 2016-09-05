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
        <div class="container">    
           
            <div id="signupbox" style="margin-top:50px" class="mainbox col-md-9 col-md-offset-1 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Đăng ký</div>
                    </div>  
                    <div class="panel-body" >
                        <form id="signupform" class="form-horizontal" role="form">

                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>
                            <div class="form-group">
                                <label for="firstname" class="col-md-4 control-label">Tên bạn</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="firstname" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="col-md-4 control-label">Họ bạn</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="lastname" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Mail công cty</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="email" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Phòng ban</label>
                                <div class="col-md-8">
                                    <select name="department" id="" class="form-control">
                                       <?php 
                                          $args = array(  'post_type'=> 'department','posts_per_page' => -1 );
                                          $myposts = get_posts( $args );
                                          foreach ( $myposts as $post ) :  ?>
                                             <option  value="<?php print $post->ID; ?>"><?php print $post->post_title; ?></option>
                                       <?php endforeach; 
                                          wp_reset_postdata();
                                       ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Cấp bậc</label>
                                <div class="col-md-8">
                                    <select name="level" id="" class="form-control">
                                        <option value="1">Non-Manager</option>
                                        <option value="2">Manager</option>
                                    </select>
                                </div>
                            </div>



                            
                            
                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Password</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="passwd" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="re-passwd" >
                                </div>
                            </div>



                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-4 col-md-8">
                                    <button  id="btn-signup" type="button" class="btn btn-info" ><i class="icon-hand-right"></i> &nbsp Tạo tài khoản</button>
                                      
                                </div>
                            </div>

                            <?php wp_nonce_field( 'register-game', 'coca-register-form' ); ?>



                        </form>
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