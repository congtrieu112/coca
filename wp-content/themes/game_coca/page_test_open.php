<?php
/*
* Template Name: Test open
*/
get_header();
?>


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
										<?php print apply_filters("the_content",$post->post_content); ?>
									</div>
									
								</div>
							</div>
							
            			</div>
            			
            			<div class="play-game">
            				<form id="playgame" method="post" class="form-horizontal" role="form" action="<?php print get_page_link(get_id_of_template('page_test_start.php')) ?>">
            					<fieldset>
            						<legend>Cấp bậc chơi</legend>
            						<div class="form-group">
            							<div class="item-center">
            								<div class="row">
            									<div class="col-md-6">
            										<input class="magic-radio check-level" type="radio" name="radio" id="2" value="2">
            										<label for="2">
            											<?php _e('Có nhân viên trực tiếp','coca'); ?>
            										</label>
            									</div>
            									<div class="col-md-6">
            										<input class="magic-radio check-level"  type="radio" name="radio" id="1" value="1">
            										<label for="1">
            											<?php _e('Không có nhân viên trực tiếp','coca'); ?>
            										</label>
            									</div>
            								</div>
            							</div>
            						</div>
									<?php wp_nonce_field('check_play_level','level'); ?>
									<?php

										if(is_user_logged_in()){
											$user_login = wp_get_current_user();
											$level = $user_login->roles;
											$level = $level[0];
											print "<input type='hidden' data-level = '".$level."' name='login' value='loged' id='login_check' />";
										}else{
											print "<input type='hidden' name='login' value='login' id='login_check' />";


										}


									?>
            						<div class="form-group">
										<!-- Button -->
										<button   id="btn-signup" type="submit" class="btn btn-info clear" >Bắt đầu</button>
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
    <?php get_footer(); ?>