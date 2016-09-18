<div class="modal fade bs-example-modal-sm review-poups" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="poup-revews" role="document">
    <div class="modal-content clear-bg ">
        <div id="signupbox"  class="mainbox">
            <ul class="nav nav-tabs start-text" role="tablist">
                <li class="first"><a href="javascript:void(0)"><i class="glyphicon glyphicon-triangle-left"></i></a></li>
                <?php
                $data = (isset($_SESSION['review'])) ? $_SESSION['review'] : "";

                $sum_answer = count($data);

                if($data){
                    for($i=1;$i<= count($data); $i++){
                        $active = ($i==1) ? "active":"";
                        if($i>9){
                            print '    <li role="presentation"  data-hide="hide"><a href="#'.$i.'" aria-controls="'.$i.'" role="tab" data-toggle="tab">'.$i.'</a></li>';
                        }else{
                            print '    <li role="presentation" class="'.$active.'"><a href="#'.$i.'" aria-controls="'.$i.'" role="tab" data-toggle="tab">'.$i.'</a></li>';
                        }
                    }
                }
                ?>
                <li class="end"><a href="javascript:void(0)"><i class="glyphicon glyphicon-triangle-right"></i></a></li>
            </ul>
            <div class="tab-content">
                <h1 class="title-prize-list right-noficatioin">
                    <a href="javascript:void(0)" class="close_nofication"><img src="http://coca.dev/wp-content/themes/game_coca/images/icon-close.png" alt=""></a>
                </h1>
                <?php
                $i=1;
                if($data){
                foreach ($data as $item){
                    $select = $item['select'];
                    $answer = $item['answer'];
                    $question = $item['question'];
                    $explain  = $item['explain'];
                    $active = ($i==1) ? "active":"";
                    $correct = $item['correct'];
                    $chance = $item['chance'];
                    ?>
                <div role="tabpanel" class="tab-pane <?php print $active; ?>" id="<?php print $i;?>">
                    <div class="panel panel-info ">
                        <div class="panel-heading top-chance-header">
                            <div class="row header-question">
                                <div class="status-stat-test col-md-4"><span class="title-chance">Lượt chơi : </span>
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
                                <i class="glyphicon glyphicon-time"></i> <span >15:00</span>
                            </div>
                        </div>
                    </div>
                    <div class="question">
                            <p class="question-info clear"><?php print $question;?></p>
                            <div class="list-question">
                                <div class="row ">
                                    <?php
                                    if($answer){
                                        $s=0;
                                        foreach ($answer as $key => $value) {
                                            $selected = ($s == $select) ? "checked" : "";
                                            ?>
                                            <div class="col-md-12">
                                                <input <?php print $selected?> class="magic-radio" type="radio" name="radio<?php print $i ?>" id="step<?php print $i.$s ?>"  value="<?php print $i.'-'.$s; ?>">
                                                <label for="step<?php print $i.$s ?>">
                                                    <?php print $value; ?>
                                                    <?php
                                                    print ($selected && !$correct) ? '<span class="flase">Sai</span>':'';
                                                    ?>
                                                </label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <?php
                                            $s++;
                                        }}
                                    ?>

                                </div>
                                <?php if($explain):?>
                                <div class="explain">
                                    <h1 class="title-explain clear">giải thích</h1>
                                    <p class="content-explain clear">
                                        <?php print $explain;?>
                                    </p>
                                    <div class="chat-bubble-arrow-border"></div>
                                </div>
                                <?php endif;?>
                            </div>

                            <div class="paging">
                                <a href="javascript:void(0)" class="prev-page"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Câu trước</a>

                                    <a  href="javascript:void(0)" class="next-page">Câu tiếp theo<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <?php  $i++; }}?>

            </div>
        </div>

    </div>
  </div>
</div>
