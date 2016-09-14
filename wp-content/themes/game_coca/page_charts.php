<?php
/*
* Template Name: Charts
*/
get_header();
?>

    <main>
           
            <div id="signupbox"  class="mainbox">
            	
            	<div class="panel panel-info ">
                    <div class="bg-marsk">
                        <h1 class="title-prize-list">Top đầu bảng</h1>
                        <div class="row">
                            <div class="col-md-8">
                            <div class="prize-list">
                                <div class="top-personal">
                                    <div class="chat-bubble">
                                      cá nhân
                                      <div class="chat-bubble-arrow-border"></div>
                                    </div>
                                    <div class="block-item">
                                        <div class="block-prize">
                                            <div class="effect-prize-second-1"></div>
                                            <div class="effect-prize-second-2"></div>
                                            <div class="prize-block">
                                                <div class="foot-block"></div>
                                                <div class="heart-second avatar" style="background:url(<?php print THEME_IMG_URI; ?>avata-prize.png) 50% 0%;"></div>
                                                <div class="prize-second"></div>
                                            </div>
                                            <div class="info-block-prize">
                                                <p class="name-person clear">Nguyen van A</p>
                                                <p class="department-on-person clear">Phòng Nhân sự</p>
                                                <p class="point-person clear">150 điểm</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-item">
                                        <div class="block-prize">
                                            <div class="effect-prize-first-left"></div>
                                            <div class="effect-prize-first"></div>
                                            <div class="prize-block first-block">
                                                <div class="foot-block-first"></div>
                                                <div class="heart-first avatar" style="background:url(<?php print THEME_IMG_URI; ?>avata-prize-first.png) 50% 0%;"></div>
                                                <div class="prize-first"></div>
                                            </div>
                                            <div class="info-block-prize">
                                                <p class="name-person clear">Nguyen van A</p>
                                                <p class="department-on-person clear">Phòng Nhân sự</p>
                                                <p class="point-person clear">150 điểm</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-item">
                                        <div class="block-prize">
                                            <div class="effect-prize-thirst-left"></div>
                                            <div class="effect-prize-thirst"></div>
                                            <div class="prize-block">
                                                <div class="foot-block-thirst"></div>
                                                <div class="heart-thirst avatar" style="background:url(<?php print THEME_IMG_URI; ?>avata-prize-thirst.png) 50% 0%;"></div>
                                                <div class="prize-thirst"></div>
                                            </div>
                                            <div class="info-block-prize">
                                                <p class="name-person clear">Nguyen van A</p>
                                                <p class="department-on-person clear">Phòng Nhân sự</p>
                                                <p class="point-person clear">150 điểm</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                
                                <div class="top-department">
                                    <div class="line-mark"></div>
                                    <div class="chat-bubble">
                                      Phòng ban
                                      <div class="chat-bubble-arrow-border"></div>
                                    </div>
                                    <div class="block-item">
                                        <div class="block-prize">
                                           
                                            <div class="prize-block">
                                                <div class="foot-block"></div>
                                                <div class="heart-second avatar" style="background:#ffffff 50% 0%;">
                                                    <div class="info-block-prize">
                                                        <p class="name-person clear">bảo vệ</p>
                                                        <p class="department-on-person clear">Số điệm trung bình</p>
                                                        <p class="point-person clear">150 điểm</p>
                                                    </div>
                                                </div>
                                                <div class="prize-second"></div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="block-item">
                                        <div class="block-prize">
                                            
                                            <div class="prize-block ">
                                                <div class="foot-block-first"></div>
                                                <div class="heart-first avatar" style="background:#ffffff 50% 0%;">
                                                    <div class="info-block-prize">
                                                        <p class="name-person clear">nhân sự</p>
                                                        <p class="department-on-person clear">Số điệm trung bình</p>
                                                        <p class="point-person clear">150 điểm</p>
                                                    </div>
                                                </div>
                                                <div class="prize-first"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="block-item">
                                        <div class="block-prize">
                                            
                                            <div class="prize-block">
                                                <div class="foot-block-thirst"></div>
                                                <div class="heart-thirst avatar" style="background:#ffffff 50% 0%;">
                                                    <div class="info-block-prize">
                                                        <p class="name-person clear">nhân sự</p>
                                                        <p class="department-on-person clear">Số điệm trung bình</p>
                                                        <p class="point-person clear">150 điểm</p>
                                                    </div>
                                                </div>
                                                <div class="prize-thirst"></div>
                                            </div>
                                        </div>
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
                                <button onclick="location.href='<?php print get_page_link(54); ?>'" id="btn-signup" type="button" class="btn btn-info clear"><span>Xếp hạng của bạn</span></button>

                            </div>
                        </div>
                        </div>
                		

                		<div class="effect-right-form"></div>
                        <div class="effect-left-form"></div>
                    </div>
            	</div>
            		
            	
                
            </div> 


    </main>
    <?php get_footer(); ?>