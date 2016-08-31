<?php
 /* 
 * Template Name: Example Template 
 */ 
 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="<?php echo TEMLATE_ROOT_URL; ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <header>
    	<nav class="navbar navbar-default">
    		<div class="container-fluid">
    			<!-- Brand and toggle get grouped for better mobile display -->
    			<div class="navbar-header">
    				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    					<span class="sr-only">Toggle navigation</span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    				</button>
    				<a class="navbar-brand" href="#">Brand</a>
    			</div>

    			<!-- Collect the nav links, forms, and other content for toggling -->
    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    				<ul class="nav navbar-nav">
    					<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
    					<li><a href="#">Link</a></li>
    					<li class="dropdown">
    						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
    						<ul class="dropdown-menu">
    							<li><a href="#">Action</a></li>
    							<li><a href="#">Another action</a></li>
    							<li><a href="#">Something else here</a></li>
    							<li role="separator" class="divider"></li>
    							<li><a href="#">Separated link</a></li>
    							<li role="separator" class="divider"></li>
    							<li><a href="#">One more separated link</a></li>
    						</ul>
    					</li>
    				</ul>
    				<form class="navbar-form navbar-left">
    					<div class="form-group">
    						<input type="text" class="form-control" placeholder="Search">
    					</div>
    					<button type="submit" class="btn btn-default">Submit</button>
    				</form>
    				<ul class="nav navbar-nav navbar-right">
    					<li><a href="#">Link</a></li>
    					<li class="dropdown">
    						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
    						<ul class="dropdown-menu">
    							<li><a href="#">Action</a></li>
    							<li><a href="#">Another action</a></li>
    							<li><a href="#">Something else here</a></li>
    							<li role="separator" class="divider"></li>
    							<li><a href="#">Separated link</a></li>
    						</ul>
    					</li>
    				</ul>
    			</div><!-- /.navbar-collapse -->
    		</div><!-- /.container-fluid -->
    	</nav>
    </header>
    <main>
    	<div class="container">    
    		<div id="loginbox" style="display:none;margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
    			<div class="panel panel-info" >
    				<div class="panel-heading">
    					<div class="panel-title">Sign In</div>
    					<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
    				</div>     

    				<div style="padding-top:30px" class="panel-body" >

    					<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

    					<form id="loginform" class="form-horizontal" role="form">

    						<div style="margin-bottom: 25px" class="input-group">
    							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    							<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
    						</div>

    						<div style="margin-bottom: 25px" class="input-group">
    							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    							<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
    						</div>



    						<div class="input-group">
    							<div class="checkbox">
    								<label>
    									<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
    								</label>
    							</div>
    						</div>


    						<div style="margin-top:10px" class="form-group">
    							<!-- Button -->

    							<div class="col-sm-12 controls">
    								<a id="btn-login" href="#" class="btn btn-success">Login  </a>
    								<a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

    							</div>
    						</div>


    						<div class="form-group">
    							<div class="col-md-12 control">
    								<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
    									Don't have an account! 
    									<a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
    										Sign Up Here
    									</a>
    								</div>
    							</div>
    						</div>    
    					</form>     



    				</div>                     
    			</div>  
    		</div>
    		<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    			<div class="panel panel-info">
    				<div class="panel-heading">
    					<div class="panel-title">Sign Up</div>
    					<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
    				</div>  
    				<div class="panel-body" >
                        <form id="signupform" class="form-horizontal" role="form">

                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>
                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Phòng ban</label>
                                <div class="col-md-9">
                                <select name="department" id="" class="form-control">
                                        <option value="1">Phòng kinh doanh</option>
                                        <option value="2">Phòng kế toán</option>
                                        <option value="3">Phòng kỹ thuật</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Level</label>
                                <div class="col-md-9">
                                    <select name="department" id="" class="form-control">
                                        <option value="1">Non-Manager</option>
                                        <option value="2">Manager</option>
                                    </select>
                                </div>
                            </div>



                            
                            
                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="passwd" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">Confirm Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="re-passwd" placeholder="Password">
                                </div>
                            </div>



                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <button  id="btn-signup" type="button" class="btn btn-info" ><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                    <span style="margin-left:8px;">or</span>  
                                </div>
                            </div>

                            <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">

                                <div class="col-md-offset-3 col-md-9">
                                    <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
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
    	
    </footer>
	<?php wp_footer(); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="<?php echo TEMLATE_ROOT_URL; ?>/js/bootstrap.min.js"></script> -->
  </body>
</html>