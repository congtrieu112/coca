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
            		<li role="presentation" class="active"><a href="#step1" aria-controls="step1" role="tab" data-toggle="tab">1</a></li>
            		<li role="presentation"><a href="#step2" aria-controls="step2" role="tab" data-toggle="tab">2</a></li>
            		<li role="presentation"><a href="#step3" aria-controls="step3" role="tab" data-toggle="tab">3</a></li>
            		<li role="presentation"><a href="#step4" aria-controls="step4" role="tab" data-toggle="tab">4</a></li>
            		<li role="presentation"><a href="#step5" aria-controls="step5" role="tab" data-toggle="tab">5</a></li>
            		<li role="presentation"><a href="#step6" aria-controls="step6" role="tab" data-toggle="tab">6</a></li>
            		<li role="presentation"><a href="#step7" aria-controls="step7" role="tab" data-toggle="tab">7</a></li>
            		<li role="presentation"><a href="#step8" aria-controls="step8" role="tab" data-toggle="tab">8</a></li>
            		<li role="presentation"><a href="#step9" aria-controls="step9" role="tab" data-toggle="tab">9</a></li>
            		<li class="end"><a href="javascript:void(0)"><i class="glyphicon glyphicon-triangle-right"></i></a></li>
            	</ul>
            	<div class="tab-content">
					<?php for($i=0;$i<9;$i++): ?>
	            	<div role="tabpanel" class="tab-pane <?php print ($i==0)?"active":""; ?>" id="step<?php print $i; ?>">
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
		                   
		                    <div class="question">
								<p class="question-info clear">Đâu là những lợi ích của hệ thống Success Factors?</p>
							  	<div class="list-question">
								  	<div class="row ">

								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="step<?php print $i ?>1" value="option1">
								  			<label for="step<?php print $i ?>1">
								  				A. Giảm công việc giấy tờ, tự động hóa các quy trình nhân sự
								  			</label>
							  			</div>
							  			<div class="clearfix"></div>

								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="step<?php print $i ?>2" value="option1">
								  			<label for="step<?php print $i ?>2">
								  				B. Trao quyền cho quản lý và nhân viên  
								  			</label>
								  		</div>
							  			<div class="clearfix"></div>

								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="step<?php print $i ?>3" value="option1">
								  			<label for="step<?php print $i ?>3">
								  				C. Tạo điều kiện thuận lợi để tăng hiệu suất làm việc
								  			</label>
								  		</div>
							  			<div class="clearfix"></div>

								  		<div class="col-md-12">
								  			<input class="magic-radio" type="radio" name="radio" id="step<?php print $i ?>4" value="option1">
								  			<label for="step<?php print $i ?>4">
								  				D. Tất cả những điều trên.
								  			</label>
								  		</div>

								  		
								  	</div>
							  		
							  	</div>
							  	<div class="paging">
							  		<a href="javascript:void(0)" class="prev-page"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Câu trước</a>
							  		<?php if($i==8){ ?>
										<a  href="<?php print get_page_link(48); ?>" class="next-page">Hoàn tất<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
									<?php }else { ?>
									<a  href="javascript:void(0)" class="next-page">Câu tiếp theo<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							  		<?php } ?>
								</div>

							</div>
		                   
		                    <?php get_template_part('template/effect','startTest'); ?>
	                	</div>
	                </div>
	                <?php endfor; ?>

            	</div>
            		
            	
                
            </div> 


    </main>
  <?php get_footer(); ?>