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


// js selecter
$(document).ready(function () {
    $(".btn-select").each(function (e) {
        var value = $(this).find("ul li.selected").html();
        if (value != undefined) {
            $(this).find(".btn-select-input").val(value);
            $(this).find(".btn-select-value").html(value);
        }
    });
    var $scrollbar = $("#scrollbar1");

    $scrollbar.tinyscrollbar();
});

$(document).on('click', '.btn-select', function (e) {
    e.preventDefault();
    var ul = $(this).find("ul");
    if ($(this).hasClass("active")) {
        if (ul.find("li").is(e.target)) {
            var target = $(e.target);
            target.addClass("selected").siblings().removeClass("selected");
            var value = target.html();
            $(this).find(".btn-select-input").val(value);
            $(this).find(".btn-select-value").html(value);
        }
        ul.hide();
        $(this).removeClass("active");
    }
    else {
        $('.btn-select').not(this).each(function () {
            $(this).removeClass("active").find("ul").hide();
        });
        ul.slideDown(300);
        $(this).addClass("active");
    }
});

$(document).on('click', function (e) {
    var target = $(e.target).closest(".btn-select");
    if (!target.length) {
        $(".btn-select").removeClass("active").find("ul").hide();
    }
});



