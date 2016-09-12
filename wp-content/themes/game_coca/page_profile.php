<?php
 /* 
 * Template Name: Profile
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
                    <div class="bg-marsk">
                        <h1 class="title-prize-list">profile</h1>
                        <div class="row">
                            <div class="col-md-8">
                            <div class="profile-first">
                                <div class="col-md-4">
                                   <div class="profile-avata-block">
                                       <div class="avata-user-profile avata-mark" style="background:url(<?php print THEME_IMG_URI ?>avata-user.png) 50% 0%;">
                                        <div class="change-image">
                                            
                                        </div>
                                   </div>
                                   <div class="circle">
                                       <img src="<?php print THEME_IMG_URI ?>circle.png" alt="">
                                       <p class="info-change"><a href="javascript:void(0)"><i class="fa fa-upload"></i> Thay ảnh</a></p>
                                   </div>
                                   </div> 
                                   
                                   
                               </div>
                               <div class="col-md-8">
                                   <div class="info-user-top">
                                   <table>
                                       <tr>
                                           <td >Tên nhân viên</td>
                                           <td class="right-info-user">Nguyễn Văn A</td>
                                       </tr>
                                       <tr>
                                           <td >Phòng ban</td>
                                           <td class="right-info-user">Hành chính văn phòng</td>
                                       </tr>
                                       <tr>
                                           <td >Password</td>
                                           <td class="right-info-user"><input disabled type="password" name="password-user" value="password"> <a href="javascript:void(0)" class="change-info-text"><i class="fa fa-pencil"></i>thay đổi</a></td>
                                       </tr>
                                   </table> 
                                       
                                   </div> 
                               </div>
                            </div>
                               
                            </div>
                        <div class="col-md-4">

                            <div class="charts">
                                <h1 class="title-prize-list">Bảng xếp hạng</h1>
                                <a class="btn  btn-select btn-select-light">
                                    <input type="hidden" class="btn-select-input" id="" name="" value="" />
                                    <span class="btn-select-value clear"><?php _e('Chọn phòng ban','coca'); ?></span>
                                    <span class='btn-select-arrow glyphicon glyphicon-triangle-bottom'></span>
                                    <ul>
                                        <?php 
                                          $args = array(  'post_type'=> 'department','posts_per_page' => -1 );
                                          $myposts = get_posts( $args );
                                          foreach ( $myposts as $post ) :  ?>
                                          <li><?php print $post->post_title; ?></li>
                                           <?php endforeach; 
                                              wp_reset_postdata();
                                           ?>
                                        
                                    </ul>
                                </a>
                                <div class="table-charts">
                                    <div id="scrollbar2">
                                        <div class="scrollbar" style="height: 600px;"><div class="track" style="height: 600px;"><div class="thumb" style="top: 0px; height: 130.624px;"><div class="end"></div></div></div></div>

                                        <div class="conent-play clear viewport">
                                            <div class="overview">
                                                <table class="table table-hover"> 

                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td> 
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>

                                                    </tr> 
                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td> 
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>
                                                    </tr> 
                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td> 
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>
                                                    </tr> 
                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td> 
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>
                                                    </tr> 
                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td> 
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>
                                                    </tr> 
                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td> 
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>
                                                    </tr> 
                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td> 
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>
                                                    </tr> 
                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td> 
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>
                                                    </tr> 
                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td> 
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>
                                                    </tr>
                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td> 
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>
                                                    </tr> 
                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td> 
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>
                                                    </tr> 
                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td>
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>
                                                    </tr> 
                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td>  
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>
                                                    </tr> 
                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td> 
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>
                                                    </tr> 
                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td>
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>
                                                    </tr> 
                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td> 
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>
                                                    </tr> 
                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td>
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>
                                                    </tr> 
                                                    <tr> 
                                                        <td class="bg-hover"></td> 
                                                        <td>001</td>
                                                        <td class="user-charts"><a href="javascript:void(0)" class="avata-user"><img src="http://coca.dev/wp-content/themes/game_coca/images/avata.png" alt=""></a></td>
                                                        <td class="info-user-charts">
                                                            <p class="name-user-charts clear">Nguyen A 100 diem</p>
                                                            <p class="point-user-charts clear"> 100 diem</p>
                                                            <p class="department-user-charts clear">Phòng nhân sự</p>
                                                        </td>
                                                    </tr>  
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <button id="btn-signup" type="button" class="btn btn-info clear"><span>Xếp hạng của bạn</span></button>

                            </div>
                        </div>
                        </div>
                		

                		<div class="effect-right-form"></div>
                        <div class="effect-left-form"></div>
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