<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $setting = new SettingQuiz;
    $result =  $setting->update_setting();
    extract($result);

}

$status =  !empty(get_option('status_game')) ? get_option('status_game') : '';
$date_end = !empty(get_option('end_time_game')) ? get_option('end_time_game') : '';
$time_interval = !empty(get_option('interval')) ? get_option('interval') : '';
$number_question =  !empty(get_option('number_question')) ? get_option('number_question') : '';
$chance = !empty(get_option('chance')) ? get_option('chance') : '';
?>
<div class="wrap slickQuiz quizOptions">
    
    <h2>Custom Quiz Default Options</h2>

    <form method="post" action="">
        <h3 class="title">Game Settings</h3>
        <p>Active game.</p>
        <table class="form-table">
            <tbody>
                
                <tr valign="top">
                    <th scope="row">
                        <label for="status-game">Status </label>
                    </th>
                    <td>
                        <input type="radio" name="game_status" value="0" <?php print ($status==0)?"checked":"";  ?>> No &nbsp;
                        <input type="radio" name="game_status" value="1" <?php print ($status==1)?"checked":"";  ?>> Yes
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row" style="width: 250px;">
                        <label for="time-game">Time end game</label>
                    </th>
                    <td>
                        <input type="text" id="datepicker" name="time_end" class="regular-text" value="<?php print $date_end; ?>">
                        <p class="ui-state-error ui-corner-all <?php print  (isset($time_game)) ?"block":"hidden" ?>"><?php print (isset($time_game)) ? $time_game : ""  ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row" style="width: 250px;">
                        <label for="time-game">Interval Time</label>
                    </th>
                    <td>
                        <input type="text" id="spinner" name="time_interval" class="regular-text" value="<?php print $time_interval; ?>">
                        <p class="ui-state-error ui-corner-all <?php print  (isset($interval)) ?"block":"hidden" ?>"><?php print (isset($interval)) ? $interval : ""  ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row" style="width: 250px;">
                        <label for="time-game">Number question</label>
                    </th>
                    <td>
                        <input type="text" id="number-question" name="number_question" class="regular-text" value="<?php print $number_question; ?>">
                        <p class="ui-state-error ui-corner-all <?php print  (isset($number_question)) ?"hidden":"block" ?>"><?php print (isset($number_question)) ? $number_question : ""  ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row" style="width: 250px;">
                        <label for="time-game">Number default chance</label>
                    </th>
                    <td>
                        <input type="text" id="chance" name="chance" class="regular-text" value="<?php print $chance; ?>">
                        <p class="ui-state-error ui-corner-all <?php print  (isset($chance)) ?"hidden":"block" ?>"><?php print (isset($chance)) ? $chance : ""  ?></p>
                    </td>
                </tr>

                
               
            </tbody>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button-primary" value="Update Options">
        </p>
    </form>
</div>