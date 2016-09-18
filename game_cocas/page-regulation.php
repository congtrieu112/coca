 */ 
<?php
 /* 
 * Template Name: Register
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
            		<div class="panel-heading col-md-offset-1 col-md-10 col-md-offset-1">
                        <div class="panel-title clear help-title">Hướng dẫn chơi</div>
                        
                    </div>   

            		<div class="conent-help">
            			<div id="help-play">
            				<div id="scrollbar1">
            					<div class="scrollbar" style="height: 300px;"><div class="track" style="height: 300px;"><div class="thumb" style="top: 0px; height: 130.624px;"><div class="end"></div></div></div></div>
	            				
								<div class="conent-play clear viewport">
									<div class="overview">
										<h2 class="clear play-game-title">cách chơi</h2>
										<br><br>
 
										Hãy cùng thử thách kiến thức và hiểu biết của bạn về hệ thống Success Factors - Dữ liệu nhân viên với trò chơi chạy đua công nghệ! <br><br>

										Mỗi người chơi sẽ có 3 "mạng" (lượt chơi) khi mới bắt đầu tham gia. Mỗi mạng sẽ có thời gian tối đa là 1 phút 30 giây. Trong mỗi mạng, người chơi phải trả lời 15 câu hỏi ngẫu nhiên từ chương trình. <br><br>

										Mời thêm người chơi, nhận ngay mạng thưởng! <br><br>

										- Để nhận mạng thưởng, bạn có thể gửi lời mời đến một đồng nghiệp khác bất kì trong công ty cùng chơi thì cả hai người sẽ được tặng 1 mạng. Tuy nhiên, sau đó hai <br><br>
										Hãy cùng thử thách kiến thức và hiểu biết của bạn về hệ thống Success Factors - Dữ liệu nhân viên với trò chơi chạy đua công nghệ! <br><br>

										Mỗi người chơi sẽ có 3 "mạng" (lượt chơi) khi mới bắt đầu tham gia. Mỗi mạng sẽ có thời gian tối đa là 1 phút 30 giây. Trong mỗi mạng, người chơi phải trả lời 15 câu hỏi ngẫu nhiên từ chương trình. <br><br>

										Mời thêm người chơi, nhận ngay mạng thưởng! <br><br>

										- Để nhận mạng thưởng, bạn có thể gửi lời mời đến một đồng nghiệp khác bất kì trong công ty cùng chơi thì cả hai người sẽ được tặng 1 mạng. Tuy nhiên, sau đó hai 
									</div>
									
								</div>
							</div>
							
            			</div>
            			
            			<div class="play-game">
            				<form id="playgame" class="form-horizontal" role="form">
            					<fieldset>
            						<legend>Cấp bậc chơi</legend>
            						<div class="form-group">
            							<div class="item-center">
            								<div class="row">
            									<div class="col-md-6">
            										<input class="magic-radio" type="radio" name="radio" id="1" value="option1">
            										<label for="1">
            											<?php _e('Quản lý','coca'); ?> 
            										</label>
            									</div>
            									<div class="col-md-6">
            										<input class="magic-radio" type="radio" name="radio" id="2" value="option2">
            										<label for="2">
            											<?php _e('Nhân viên','coca'); ?>
            										</label>
            									</div>
            								</div>
            							</div>
            						</div>
            						<div class="form-group">
                                <!-- Button -->                                        
                                
                                    <button  id="btn-signup" type="button" class="btn btn-info clear" >Bắt đầu</button>
                                      
                                
                            </div>
            					</fieldset>
            				</form>
            			</div>

            		</div>

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
    <?php wp_footer(); ?>
  </body>
</html>