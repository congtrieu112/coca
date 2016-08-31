<?php
         $correct_question =  get_post_meta($post->ID,"correct_question",true);
         $incorrect_question =  get_post_meta($post->ID,"incorrect_question",true);
         $point_game =  get_post_meta($post->ID,"point_game",true);
         $time_finish =  get_post_meta($post->ID,"time_finish",true);
         $time_start =  get_post_meta($post->ID,"time_start",true);
         $user_play =  get_post_meta($post->ID,"user_play",true);
 
?>
<table class="form-table customQuiz" id="customQuiz">
   <tbody>
      <tr class="form-field term-description-wrap">
         <th scope="row"><label for="description-question">Number correct</label></th>
         <td>
            <input  type="text" name="correct_question" id="" size="40" aria-required="true" value="<?php print $correct_question; ?>">
            <p class="description">Number correct question</p>
         </td>
      </tr>
      <tr class="form-field term-description-wrap">
         <th scope="row"><label for="description-question">Number incorrect</label></th>
         <td>
            <input  type="text" name="incorrect_question" id="" size="40" aria-required="true" value="<?php print $incorrect_question; ?>">
            <p class="description">Number incorrect question</p>
         </td>
      </tr>
      <tr class="form-field term-description-wrap">
         <th scope="row"><label for="description-question">point</label></th>
         <td>
            <input  type="text" name="point_game" id="" size="40" aria-required="true" value="<?php print $point_game; ?>">
            <p class="description">Point</p>
         </td>
      </tr>
      <tr class="form-field term-description-wrap">
         <th scope="row"><label for="description-question">Time finish</label></th>
         <td>
            <input  type="text" name="time_finish" id="" size="40" aria-required="true" value="<?php print $time_finish; ?>">
            <p class="description">Time finish</p>
         </td>
      </tr>
      <tr class="form-field term-description-wrap">
         <th scope="row"><label for="description-question">Time start</label></th>
         <td>
            <input  type="text" name="time_start" id="" size="40" aria-required="true" value="<?php print $time_start; ?>">
            <p class="description">Time start</p>
         </td>
      </tr>
      <tr class="form-field term-description-wrap">
         <th scope="row"><label for="description-question">User play</label></th>
         <td>
         <select name="user_play" id="">
            <?php 
               $args = array(
                           'role'=>'Subscriber'
               );
               $users = get_users($args);
               
               foreach ($users as $user) {
                  $selected = ($user_play == $user->ID) ? "selected" : "";
                  echo '<option value="'.$user->ID.'" '.$selected.'  >'.$user->display_name.'</option>';
               }
            ?>
         </select>
            
            <p class="description">User play</p>
         </td>
      </tr>

   </tbody>
</table>