<?php
      $total_correct_question =  get_post_meta($post->ID,"total_correct_question",true);
      $total_incorrect_question =  get_post_meta($post->ID,"total_incorrect_question",true);
      $total_point =  get_post_meta($post->ID,"total_point",true);
      $total_time_finish =  get_post_meta($post->ID,"total_time_finish",true);
      $user_play =  get_post_meta($post->ID,"user_play",true);
      $chance =  get_post_meta($post->ID,"chance",true);
      $prize =  get_post_meta($post->ID,"prize",true);
      $department = get_post_meta($post->ID,"department",true);
      $level = get_post_meta($post->ID,"level",true);

 
?>
<table class="form-table customQuiz" id="customQuiz">
   <tbody>
      <tr class="form-field term-description-wrap">
         <th scope="row"><label for="description-question">Total Number correct</label></th>
         <td>
            <input  type="text" name="total_correct_question" id="" size="40" aria-required="true" value="<?php print $total_correct_question; ?>">
            <p class="description">Total number correct question</p>
         </td>
      </tr>
      <tr class="form-field term-description-wrap">
         <th scope="row"><label for="description-question">Total number incorrect</label></th>
         <td>
            <input  type="text" name="total_incorrect_question" id="" size="40" aria-required="true" value="<?php print $total_incorrect_question; ?>">
            <p class="description">Total number incorrect question</p>
         </td>
      </tr>
      <tr class="form-field term-description-wrap">
         <th scope="row"><label for="description-question">Total point</label></th>
         <td>
            <input  type="text" name="total_point" id="" size="40" aria-required="true" value="<?php print $total_point; ?>">
            <p class="description">Total Point</p>
         </td>
      </tr>
      <tr class="form-field term-description-wrap">
         <th scope="row"><label for="description-question">Total time finish</label></th>
         <td>
            <input  type="text" name="total_time_finish" id="" size="40" aria-required="true" value="<?php print $total_time_finish; ?>">
            <p class="description">Total time finish (minute)</p>
         </td>
      </tr>
      <tr class="form-field term-description-wrap">
         <th scope="row"><label for="description-question">History play game</label></th>
         <td>
            <a href="edit.php?post_type=game&user_id=<?php print $user_play; ?>" target="_blank">History play game</a>
            <p class="description">History play game</p>
         </td>
      </tr>
      <tr class="form-field term-description-wrap">
         <th scope="row"><label for="description-question">User play</label></th>
         <td>
         <select name="user_play" id="" disabled>
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
      <tr class="form-field term-description-wrap">
         <th scope="row"><label for="description-question">Chance</label></th>
         <td>
            <input  type="text" name="chance" id="" size="40" aria-required="true" value="<?php print $chance; ?>">
            <p class="description">Chance</p>
         </td>
      </tr>
      <tr class="form-field term-description-wrap">
         <th scope="row"><label for="description-question">Prize</label></th>
         <td>
         <select name="prize" id="">
            <option  value="">--Select prize--</option>
            <?php 
               $args = array(  'post_type'=> 'prize','posts_per_page' => -1 );
               $myposts = get_posts( $args );
               foreach ( $myposts as $post ) :  ?>
                  <option <?php print ($prize == $post->ID) ? "selected":""; ?> value="<?php print $post->ID; ?>"><?php print $post->post_title; ?></option>
            <?php endforeach; 
               wp_reset_postdata();
            ?>
         </select>
            <p class="description">Prize</p>
         </td>
      </tr>

         <tr class="form-field term-description-wrap">
            <th scope="row"><label for="description-question">Department</label></th>
            <td>
            <select name="department" id="">
               <option  value="">--Select department--</option>
               <?php 
                  $args = array(  'post_type'=> 'department','posts_per_page' => -1 );
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ) :  ?>
                     <option <?php print ($department == $post->ID) ? "selected":""; ?> value="<?php print $post->ID; ?>"><?php print $post->post_title; ?></option>
               <?php endforeach; 
                  wp_reset_postdata();
               ?>
            </select>
               <p class="description">Department</p>
            </td>
         </tr>
         <tr class="form-field term-description-wrap">
            <th scope="row"><label for="description-question">Level</label></th>
            <td>
            <select name="level" id="">
                     <option  value="">--Select level--</option>
                     <option <?php print ($level == 1) ? "selected":""; ?> value="1">Nomal</option>
                     <option <?php print ($level == 2) ? "selected":""; ?> value="2">Manager</option>
            </select>
               <p class="description">Level</p>
            </td>
         </tr>


   </tbody>
</table>