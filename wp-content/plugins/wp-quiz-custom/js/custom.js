jQuery(document).ready(function($) {
	$( "#datepicker" ).datepicker({
		inline: true,
		dateFormat: "dd-mm-yy"
	});
	$( "#spinner" ).spinner();
	$("#number-question").spinner();
	$("#chance").spinner();
});