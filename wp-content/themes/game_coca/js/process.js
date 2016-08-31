(function($){
    $.feQuestion = function(element,options){
    	var plugin = this;
    	plugin.formListener = {
    		setup : function (){
    			 // Delegate "Preview" button
                $("#signupbox").delegate('#btn-signup', "click", function(e){
                    e.preventDefault();
                    var $btn = $(this).button('loading');
                    var data = $("#signupform").serialize()+"&action=nth_register_user";
                    $('#signupform')[0].reset();
                    $.ajax({
                        type: 'POST',
                        url:  MyCongfig.AjaxUrl,
                        data: data,
                        dataType: 'text',
                        async:    false, // for Safari
                        success:  function(data) { 
                        	console.log(data);
                        	if(data){
                        		$btn.button('reset');	
                        	}
                        	
                        }
                    });
                });
    		}
    	}
    	plugin.init = function() {
            plugin.formListener.setup();
        }

        plugin.init();
    }
    $.fn.feQuestion = function(options) {
        return this.each(function() {
            if (undefined === $(this).data('feQuestion')) {
                var plugin = new $.feQuestion(this, options);
                $(this).data('feQuestion', plugin);
            }
        });
    };
    $('#signupbox').feQuestion();
})(jQuery);


