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
            		<li class="first"><a href="javascript:void(0)"><i class="glyphicon glyphicon-triangle-left"></i></a></li>
            		<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">1</a></li>
            		<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">2</a></li>
            		<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">3</a></li>
            		<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">4</a></li>
            		<li role="presentation" ><a href="#home" aria-controls="home" role="tab" data-toggle="tab">5</a></li>
            		<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">6</a></li>
            		<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">7</a></li>
            		<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">8</a></li>
            		<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">9</a></li>
            		<li class="end"><a href="javascript:void(0)"><i class="glyphicon glyphicon-triangle-right"></i></a></li>
            	</ul>
            	<div class="tab-content">
	            	<div role="tabpanel" class="tab-pane active" id="home">
	            		<div class="panel panel-info ">
		                    <div class="panel-heading col-md-offset-1 col-md-10 col-md-offset-1">
		                    	<div class="row header-question">
		                    		<div class="status-stat-test col-md-4">
										<span class="title-chance">Lượt chơi : </span> <i class="chance"></i>
										<i class="chance"></i>
										<i class="chance-none"></i>
		                    		</div>
		                    		<div class="status-stat-test col-md-4">
										Bạn đã trả lời : 5/5
		                    		</div>
		                    		<div class="status-stat-test col-md-4">
										<i class="glyphicon glyphicon-time"></i> 15:00
		                    		</div>
		                    	</div>
		                    </div>  
		                   
		                    <div class="question">
								<p class="question-info clear">Đâu là những lợi ích của hệ thống Success Factors?</p>
							  	<div class="list-question">
								  	<div class="row ">
								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="1" value="option1">
								  			<label for="1">
								  				A. Giảm công việc giấy tờ, tự động hóa các quy trình nhân sự
								  			</label>
							  			</div>
							  			<div class="clearfix"></div>
								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="2" value="option1">
								  			<label for="2">
								  				B. Trao quyền cho quản lý và nhân viên  
								  			</label>
								  		</div>
							  			<div class="clearfix"></div>

								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="3" value="option1">
								  			<label for="3">
								  				C. Tạo điều kiện thuận lợi để tăng hiệu suất làm việc
								  			</label>
								  		</div>
							  			<div class="clearfix"></div>

								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="4" value="option1">
								  			<label for="4">
								  				D. Tất cả những điều trên.
								  			</label>
								  		</div>

								  		
								  	</div>
							  		
							  	</div>
							  	<div class="paging">
							  		<a href="javascript:void(0)" class="prev-page"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Câu trước</a>
							  		<a href="javascript:void(0)" class="next-page">Câu tiếp theo<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							  	</div>

							</div>
		                   
		                    <div class="effect-right-form"></div>
		                    <div class="effect-left-form"></div>
	                	</div>
	                </div>
	                <div role="tabpanel" class="tab-pane" id="profile">
            			<div class="panel panel-info ">
		                    <div class="panel-heading col-md-offset-1 col-md-10 col-md-offset-1">
		                    	<div class="row header-question">
		                    		<div class="status-stat-test col-md-4">
										<span class="title-chance">Lượt chơi : </span> <i class="chance"></i>
										<i class="chance"></i>
										<i class="chance-none"></i>
		                    		</div>
		                    		<div class="status-stat-test col-md-4">
										Bạn đã trả lời : 5/5
		                    		</div>
		                    		<div class="status-stat-test col-md-4">
										<i class="glyphicon glyphicon-time"></i> 15:00
		                    		</div>
		                    	</div>
		                    </div>  
		                   
		                    <div class="question">
								<p class="question-info clear">Đâu là những lợi ích của hệ thống Success Factors?</p>
							  	<div class="list-question">
								  	<div class="row ">
								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="1" value="option1">
								  			<label for="1">
								  				A. Giảm công việc giấy tờ, tự động hóa các quy trình nhân sự
								  			</label>
							  			</div>
							  			<div class="clearfix"></div>
								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="2" value="option1">
								  			<label for="2">
								  				B. Trao quyền cho quản lý và nhân viên  
								  			</label>
								  		</div>
							  			<div class="clearfix"></div>

								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="3" value="option1">
								  			<label for="3">
								  				C. Tạo điều kiện thuận lợi để tăng hiệu suất làm việc
								  			</label>
								  		</div>
							  			<div class="clearfix"></div>

								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="4" value="option1">
								  			<label for="4">
								  				D. Tất cả những điều trên.
								  			</label>
								  		</div>

								  		
								  	</div>
							  		
							  	</div>
							  	<div class="paging">
							  		<a href="javascript:void(0)" class="prev-page"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Câu trước</a>
							  		<a href="javascript:void(0)" class="next-page">Câu tiếp theo<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							  	</div>

							</div>
		                   
		                    <div class="effect-right-form"></div>
		                    <div class="effect-left-form"></div>
	                	</div>
            		</div>
            		<div role="tabpanel" class="tab-pane" id="messages">
            			<div class="panel panel-info ">
		                    <div class="panel-heading col-md-offset-1 col-md-10 col-md-offset-1">
		                    	<div class="row header-question">
		                    		<div class="status-stat-test col-md-4">
										<span class="title-chance">Lượt chơi : </span> <i class="chance"></i>
										<i class="chance"></i>
										<i class="chance-none"></i>
		                    		</div>
		                    		<div class="status-stat-test col-md-4">
										Bạn đã trả lời : 5/5
		                    		</div>
		                    		<div class="status-stat-test col-md-4">
										<i class="glyphicon glyphicon-time"></i> 15:00
		                    		</div>
		                    	</div>
		                    </div>  
		                   
		                    <div class="question">
								<p class="question-info clear">Đâu là những lợi ích của hệ thống Success Factors?</p>
							  	<div class="list-question">
								  	<div class="row ">
								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="1" value="option1">
								  			<label for="1">
								  				A. Giảm công việc giấy tờ, tự động hóa các quy trình nhân sự
								  			</label>
							  			</div>
							  			<div class="clearfix"></div>
								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="2" value="option1">
								  			<label for="2">
								  				B. Trao quyền cho quản lý và nhân viên  
								  			</label>
								  		</div>
							  			<div class="clearfix"></div>

								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="3" value="option1">
								  			<label for="3">
								  				C. Tạo điều kiện thuận lợi để tăng hiệu suất làm việc
								  			</label>
								  		</div>
							  			<div class="clearfix"></div>

								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="4" value="option1">
								  			<label for="4">
								  				D. Tất cả những điều trên.
								  			</label>
								  		</div>

								  		
								  	</div>
							  		
							  	</div>
							  	<div class="paging">
							  		<a href="javascript:void(0)" class="prev-page"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Câu trước</a>
							  		<a href="javascript:void(0)" class="next-page">Câu tiếp theo<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							  	</div>

							</div>
		                   
		                    <div class="effect-right-form"></div>
		                    <div class="effect-left-form"></div>
	                	</div>
            		</div>
            		<div role="tabpanel" class="tab-pane" id="settings">
            			<div class="panel panel-info ">
		                    <div class="panel-heading col-md-offset-1 col-md-10 col-md-offset-1">
		                    	<div class="row header-question">
		                    		<div class="status-stat-test col-md-4">
										<span class="title-chance">Lượt chơi : </span> <i class="chance"></i>
										<i class="chance"></i>
										<i class="chance-none"></i>
		                    		</div>
		                    		<div class="status-stat-test col-md-4">
										Bạn đã trả lời : 5/5
		                    		</div>
		                    		<div class="status-stat-test col-md-4">
										<i class="glyphicon glyphicon-time"></i> 15:00
		                    		</div>
		                    	</div>
		                    </div>  
		                   
		                    <div class="question">
								<p class="question-info clear">Đâu là những lợi ích của hệ thống Success Factors?</p>
							  	<div class="list-question">
								  	<div class="row ">
								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="1" value="option1">
								  			<label for="1">
								  				A. Giảm công việc giấy tờ, tự động hóa các quy trình nhân sự
								  			</label>
							  			</div>
							  			<div class="clearfix"></div>
								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="2" value="option1">
								  			<label for="2">
								  				B. Trao quyền cho quản lý và nhân viên  
								  			</label>
								  		</div>
							  			<div class="clearfix"></div>

								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="3" value="option1">
								  			<label for="3">
								  				C. Tạo điều kiện thuận lợi để tăng hiệu suất làm việc
								  			</label>
								  		</div>
							  			<div class="clearfix"></div>

								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="4" value="option1">
								  			<label for="4">
								  				D. Tất cả những điều trên.
								  			</label>
								  		</div>

								  		
								  	</div>
							  		
							  	</div>
							  	<div class="paging">
							  		<a href="javascript:void(0)" class="prev-page"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Câu trước</a>
							  		<a href="javascript:void(0)" class="next-page">Câu tiếp theo<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
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