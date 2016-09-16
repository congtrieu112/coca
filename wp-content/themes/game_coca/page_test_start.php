<?php
/*
* Template Name: Test satart
*/
get_header();
?>


    <main>
           
            <div id="signupbox"  class="mainbox">
            	<ul class="nav nav-tabs start-text" role="tablist">
					<li class="first"><a href="javascript:void(0)"><i class="glyphicon glyphicon-triangle-left"></i></a></li>


					<?php
					for($i=1;$i<16;$i++){

						$active = ($i==1) ? "active":"";
						if($i>9){
							print '    <li role="presentation"  data-hide="hide"><a href="#'.$i.'" aria-controls="'.$i.'" role="tab" data-toggle="tab">'.$i.'</a></li>';
						}else{
							print '    <li role="presentation" class="'.$active.'"><a href="#'.$i.'" aria-controls="'.$i.'" role="tab" data-toggle="tab">'.$i.'</a></li>';

						}

					}

					?>

            		<li class="end"><a href="javascript:void(0)"><i class="glyphicon glyphicon-triangle-right"></i></a></li>
            	</ul>
            	<div class="tab-content">

					<?php
					for($i=1;$i<16;$i++){

						$active = ($i==1) ? "active":"";?>

							<div role="tabpanel" class="tab-pane <?php print $active; ?>" id="<?php print $i; ?>">
								<div class="panel panel-info ">
									<div class="panel-heading col-md-offset-1 col-md-10 col-md-offset-1">
										<div class="row header-question">
											<div class="status-stat-test col-md-4">
												<span class="title-chance">Lượt chơi : </span> <i class="chance"></i>
												<i class="chance"></i>
												<i class="chance-none"></i>
											</div>
											<div class="status-stat-test col-md-4">
												Bạn đã trả lời : 5/15
											</div>
											<div class="status-stat-test col-md-4">
												<i class="glyphicon glyphicon-time"></i> 15:00
											</div>
										</div>
									</div>
									<form action="" id="check<?php print $i; ?>">
									<div class="question">
										<p class="question-info clear">Đâu là những lợi ích của hệ thống Success Factors?</p>
										<div class="list-question">
											<div class="row ">

												<div class="col-md-12">
													<input class="magic-radio" type="radio" name="radio<?php print $i ?>" id="step<?php print $i ?>1" value="<?php print $i ?>1">
													<label for="step<?php print $i ?>1">
														A. Giảm công việc giấy tờ, tự động hóa các quy trình nhân sự
													</label>
												</div>
												<div class="clearfix"></div>

												<div class="col-md-12">
													<input class="magic-radio" type="radio" name="radio<?php print $i ?>" id="step<?php print $i ?>2" value="<?php print $i ?>2">
													<label for="step<?php print $i ?>2">
														B. Trao quyền cho quản lý và nhân viên
													</label>
												</div>
												<div class="clearfix"></div>

												<div class="col-md-12">
													<input class="magic-radio" type="radio" name="radio<?php print $i ?>" id="step<?php print $i ?>3" value="<?php print $i ?>3">
													<label for="step<?php print $i ?>3">
														C. Tạo điều kiện thuận lợi để tăng hiệu suất làm việc
													</label>
												</div>
												<div class="clearfix"></div>

												<div class="col-md-12">
													<input class="magic-radio" type="radio" name="radio<?php print $i ?>" id="step<?php print $i ?>4" value="<?php print $i ?>4">
													<label for="step<?php print $i ?>4">
														D. Tất cả những điều trên.
													</label>
												</div>


											</div>

										</div>
										<div class="paging">
											<a href="javascript:void(0)" class="prev-page"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Câu trước</a>
											<?php if($i>=15){ ?>
												<a  href="javscrip:checkradio()" class="next-page">Hoàn tất<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
											<?php }else { ?>
												<a  href="javascript:void(0)" class="next-page">Câu tiếp theo<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
											<?php } ?>
										</div>
									</div>
										</form>
									<?php get_template_part('template/effect','startTest'); ?>
								</div>
							</div>

					<?php }

					?>
            	</div>


                
            </div> 


    </main>
  <?php get_footer(); ?>