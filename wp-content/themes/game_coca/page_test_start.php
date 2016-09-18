<?php
/*
* Template Name: Test satart
*/
if(!is_user_logged_in()){
	header("location:".home_url('/'));
}
get_header();
?>


    <main>
           
            <div id="signupbox"  class="mainbox">
            	<ul class="nav nav-tabs start-text" role="tablist">
					<li class="first"><a href="javascript:void(0)"><i class="glyphicon glyphicon-triangle-left"></i></a></li>
					<?php

					$chance_option = array(
						'post_type'=>'winner',
						'meta_key'=>'user_play',
						'meta_value'=>get_current_user_id()
					);
					$chance_query = get_posts($chance_option);
					$chance_id = $chance_query[0];
					$chance = get_post_meta($chance_id->ID,"chance",true);
					wp_reset_postdata();

					print '<input type="hidden" value="'.$chance.'" id="change_sum"/>';

					$number_question =  !empty(get_option('number_question')) ? get_option('number_question') : '';
					$cookie_name = "level";
					$level = !isset($_COOKIE[$cookie_name]) ? "" : $_COOKIE[$cookie_name];
					$array = array(
						'post_type'=>'quiz',
						'meta_key'   => 'category_level',
						'meta_value' => $level,
						'posts_per_page'=>$number_question,
						'orderby'        => 'rand',
					);
					$query = new WP_Query($array);
					$i =1;
					$datas = array();
					$sum_answer = $query->post_count;
					while ($query->have_posts()) : $query->the_post();
						$datas[] = $post;
						$active = ($i==1) ? "active":"";
						if($i>9){
							print '    <li role="presentation"  data-hide="hide"><a href="#'.$i.'" aria-controls="'.$i.'" role="tab" data-toggle="tab">'.$i.'</a></li>';
						}else{
							print '    <li role="presentation" class="'.$active.'"><a href="#'.$i.'" aria-controls="'.$i.'" role="tab" data-toggle="tab">'.$i.'</a></li>';
						}
					$i++;
					endwhile;wp_reset_postdata();
					?>

            		<li class="end"><a href="javascript:void(0)"><i class="glyphicon glyphicon-triangle-right"></i></a></li>
            	</ul>
            	<div class="tab-content">

					<?php
					$i=1;
					foreach($datas as $item){
						$data = get_post_meta( $item->ID, "question", true );
						$category = get_post_meta($item->ID,"category_level",true);
						$data = json_decode($data,true, 512, JSON_UNESCAPED_UNICODE);
						$correct = array();
						if($data){
							$question = isset($data['description-question']) ? $data['description-question'] : "";
							$explain = isset($data['explain']) ? $data['explain'] : "";
							$answer = isset($data['answer']) ? $data['answer'] : array();
							$correct = isset($data['correct_answer']) ? $data['correct_answer'] : array();
						}
						$active = ($i==1) ? "active":"";?>

							<div role="tabpanel" class="tab-pane <?php print $active; ?>" id="<?php print $i; ?>">
								<div class="panel panel-info ">
									<div class="panel-heading top-chance-header">
										<div class="row header-question">
											<div class="status-stat-test col-md-4">
												<span class="title-chance">Lượt chơi : </span>
												<?php
												for($cha =0;$cha<$chance;$cha++){
													if($cha < 3){
														if($cha == $chance -1 ){
															print '<i class="chance-none"></i>';
														}else{
															print '<i class="chance"></i>';
														}
													}
												}
												if($chance > 3){
													$end_chane = $chance - 3;
													echo "<span class='sub-chance'>+ $end_chane</span>";
												}
												?>

											</div>
											<div class="status-stat-test col-md-4">
												Bạn đã trả lời : <span class="answer-number">0</span>/<?php print $sum_answer; ?>
											</div>
											<div class="status-stat-test col-md-4">
												<i class="glyphicon glyphicon-time"></i> <span class="clock">15:00</span>
											</div>
										</div>
									</div>
									<div class="question">
										<p class="question-info clear"><?php print $question; ?></p>
										<div class="list-question">
											<div class="row ">
											<?php
											if($answer){
											$s=0;
											foreach ($answer as $key => $value) {
											?>
												<div class="col-md-12">
													<input class="magic-radio" type="radio" name="radio<?php print $i ?>" id="step<?php print $i.$s ?>" data-id="<?php print $item->ID;?>" value="<?php print $i.'-'.$s; ?>">
													<label for="step<?php print $i.$s ?>">
														<?php print $value; ?>
													</label>
												</div>
												<div class="clearfix"></div>
											<?php
											$s++;
											}}
											?>



											</div>

										</div>
										<div class="paging">
											<a href="javascript:void(0)" class="prev-page"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Câu trước</a>
											<?php if($i>=$sum_answer){ ?>
												<a  href="javascript:void(0)" onclick="finish_test();return false;" class="next-page">Hoàn tất<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
											<?php }else { ?>
												<a  href="javascript:void(0)" class="next-page">Câu tiếp theo<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
											<?php } ?>
										</div>
									</div>
									<?php get_template_part('template/effect','startTest'); ?>
								</div>
							</div>

					<?php $i++; }

					?>
            	</div>


                
            </div> 


    </main>
  <?php get_footer(); ?>