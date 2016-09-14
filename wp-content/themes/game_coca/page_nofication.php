<?php
 /* 
 * Template Name: Nofication
 */ 
get_header();
?>


    <main>
           
            <div id="signupbox"  class="mainbox">
                <div class="panel panel-info ">
                    <div class="panel-heading col-md-offset-1 col-md-10 col-md-offset-1">
                        <div class="panel-title clear">Đăng ký</div>
                        <p class="content-info-form clear">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>  
                    <div class="panel-body col-md-offset-2 col-md-8 col-md-offset-2" >
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
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Cấp bậc</label>
                                <div class="col-md-8">
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
                                    <button  id="btn-signup" type="button" class="btn btn-info clear" >Tạo tài khoản</button>
                                      
                                </div>
                            </div>

                            <?php wp_nonce_field( 'register-game', 'coca-register-form' ); ?>



                        </form>
                    </div>
                    <div class="effect-right-form"></div>
                    <div class="effect-left-form"></div>
                </div>
            </div> 


    </main>
   <?php get_footer(); ?>