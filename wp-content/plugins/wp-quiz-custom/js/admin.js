jQuery(document).ready(function($) {

    // Setup Quiz Form
    $.setupQuizForm = function(element, options) {
        var $element = $(element),
             element = element;
        var plugin = this;
            plugin.config = {}
            plugin.config = $.extend(plugin.config, options);

        var defaults = {
            quizArea:           'div.quizFormWrapper',
            quizForm:           'form.quizForm',
            bottomButtons:      'div.bottom_button_bar',
            addQuestion:        'a.addQuestion',
            addAnswer:          'a.addAnswer',
            removeAnswer:       'a.removeAnswer',
        }
        plugin.formListener = {
            // Delegate form buttons
            setup: function() {
                // Delegate "add answer" link
                $("#customQuiz").delegate(defaults.addAnswer, "click", function(){
                   
                    plugin.formBuilder.addAnswer(this);
                });
                // Delegate "remove answer" link
                $("#customQuiz").delegate(defaults.removeAnswer, "click", function(){
                    plugin.formListener.removeAnswer(this);
                });
            },
            // Removes an answer
            removeAnswer: function(element) {
                currentAnswerSet = $(element).parent().parent();
                console.log(currentAnswerSet);

                if (confirm('Are you sure you want to remove this answer?')) {
                    currentAnswerSet.fadeOut(1050, function() {
                        $(this).remove();
                    });
                }
                setTimeout(function(){
                    set_order();
                },1500);
                
            },
        }

        plugin.formBuilder = {
             // Sets up the quiz fields and delegate listeners
            setup: function() {

                // Delegate form buttons
                plugin.formListener.setup();
            },
            // Adds an answer to the selected question
            addAnswer: function(element, fieldGroup) {
                var number = $(".correctAnswer").length;
                addAnswerLink = fieldGroup ? $(element) : $(element).parent().parent().parent();
                var newAnswerHTML = '<tr class="form-field form-required term-name-wrap">'
                    + '<th scope="row">'
                    + '<label class="correctAnswer" for="'+number+'">Correct Answer?&nbsp;</label>'
                    + '<input type="radio" name="correct_answer" id="'+number+'">&nbsp;'
                    + '<a href="#removeAnswer" class="removeAnswer" title="Remove Answer"><img alt="Remove Answer" height="16" src="'+URL_PLUGIN.url +'images/remove.png" width="16"></a>'
                    + '<input type="hidden" name="question[correct_answer][]"/> '
                    + '</th>'
                    + '<td>'
                    + '<input name="question[answer][]" id="name" type="text" value="" size="40" aria-required="true">'
                    + '<p class="description">Answer</p>'
                    + '</td>'
                    + '</tr>';

                addAnswerLink.before($(newAnswerHTML).hide().fadeIn(800));
            }
        }
        plugin.init = function() {
            plugin.formBuilder.setup();
        }

        plugin.init();
          
    }

    $.fn.setupQuizForm = function(options) {
        return this.each(function() {
            if (undefined == $(this).data('setupQuizForm')) {
                var plugin = new $.setupQuizForm(this, options);
                $(this).data('setupQuizForm', plugin);
            }
        });
    }
    $('.customQuiz').setupQuizForm();
    $("body").on('click', 'input[name="correct_answer"]', function(event) {
        if(this.checked){
           set_order(1);
           $(this).next().next().val(1);
        }
    });
    function set_order(check=0){
        for(i=0;i<$(".correctAnswer").length;i++){
            $("input[name='correct_answer'] ").eq(i).val(i) ;
            $("input[name='correct_answer'] ").eq(i).attr("id",i) ;
            $(".correctAnswer").eq(i).attr("for",i);
            if(check){
               $("input[name='question[correct_answer][]']").eq(i).val(""); 
            }
            
           }
    }

    
    

});
