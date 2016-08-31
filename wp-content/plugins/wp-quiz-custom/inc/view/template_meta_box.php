<?php
   $question = $category = $explain = "";
   $answer = array();
   $correct = array();
   if($data){
      $question = isset($data['description-question']) ? $data['description-question'] : "";
      $explain = isset($data['explain']) ? $data['explain'] : "";
      $answer = isset($data['answer']) ? $data['answer'] : array();
      $category = isset($data['category']) ? $data['category'] : "";
      $correct = isset($data['correct_answer']) ? $data['correct_answer'] : array();
   }
?>
<table class="form-table customQuiz" id="customQuiz">
   <tbody>
      <tr class="form-field term-description-wrap">
      <th scope="row"><label for="description-question">Question</label></th>
         <td>
            <textarea name="question[description-question]" id="description-question" rows="5" cols="50" class="large-text"><?php print $question; ?></textarea>
            <p class="description">Content question</p>
         </td>
      </tr>
      <?php
         if($answer){
            $i=0;
            foreach ($answer as $key => $value) {
               
               $checked = ($correct[$key]) ? "checked":"";
               $value_check = ($checked) ? "value='1'":"";
               ?>
               <tr class="form-field form-required term-name-wrap">
                  <th scope="row">
                     <label class="correctAnswer" for="<?php print $i; ?>">Correct Answer?</label>
                     <input <?php print $checked; ?> type="radio" name="correct_answer" id="<?php print $i; ?>">
                     <a href="#removeAnswer" class="removeAnswer" title="Remove Answer"><img alt="Remove Answer" height="16" src="<?php print WPQUIZ__PLUGIN_URl; ?>images/remove.png" width="16"></a>
                     <input type="hidden" name="question[correct_answer][]" <?php print $value_check; ?>/>
                  </th>
                  <td>
                     <input name="question[answer][]" id="name" type="text" value="<?php print $value; ?>" size="40" aria-required="true">
                     <p class="description">Answer</p>
                  </td>
               </tr>

               <?php
               $i++;
            }
         }else{
      ?>
      <tr class="form-field form-required term-name-wrap">
         <th scope="row">
            <label class="correctAnswer" for="0">Correct Answer?</label>
            <input type="radio" name="correct_answer" id="0">
            <a href="#removeAnswer" class="removeAnswer" title="Remove Answer"><img alt="Remove Answer" height="16" src="<?php print WPQUIZ__PLUGIN_URl; ?>images/remove.png" width="16"></a>
            <input type="hidden" name="question[correct_answer][]"/>

         </th>
         <td>
            <input name="question[answer][]" id="name" type="text" value="" size="40" aria-required="true">
            <p class="description">Answer</p>
         </td>
      </tr>
      <tr class="form-field form-required term-name-wrap">
         <th scope="row">
            <label class="correctAnswer" for="1">Correct Answer?</label>
            <input type="radio" name="correct_answer" id="2">
            <a href="#removeAnswer" class="removeAnswer" title="Remove Answer"><img alt="Remove Answer" height="16" src="<?php print WPQUIZ__PLUGIN_URl; ?>images/remove.png" width="16"></a>
            <input type="hidden" name="question[correct_answer][]"/>
         </th>
         <td>
            <input name="question[answer][]" id="name" type="text" value="" size="40" aria-required="true">
            <p class="description">Answer</p>
         </td>
      </tr>
      <?php
         }
      ?>

      <tr class="form-field form-required term-name-wrap">
         <td scope="row">
            <p class="addAnswer"><a href="#addAnswer" class="addAnswer"><img alt="*" height="16" src="<?php print WPQUIZ__PLUGIN_URl; ?>/images/new.png" width="16"> Add Answer</a></p>
         </td>
      </tr>
      <tr class="form-field form-required term-name-wrap">
         <th scope="row">
             <label class="correctAnswer" for="1">Category : </label>    
         </th> 
         <td>
            <select name="question[category]" id="">
               <option value="1" <?php print ($category==1) ? "selected": ""; ?>>Nomal</option>
               <option value="2" <?php print ($category==2) ? "selected": ""; ?>>Manager</option>
            </select>
         </td>           
      </tr>
      <tr class="form-field form-required term-name-wrap">
         <th scope="row">
             <label class="explain" for="1">Explain : </label>    
         </th> 
         <td>
             <textarea name="question[explain]" id="description-explain" rows="5" cols="50" class="large-text"><?php print $explain; ?></textarea>
            <p class="description">Content explain</p>
         </td>           
      </tr>
      
   </tbody>
</table>