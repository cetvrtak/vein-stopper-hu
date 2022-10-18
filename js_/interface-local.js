function validateForm(obj)
	{ var OK=true;
	$("input",$(obj).parents("form")).each(function(i,item){
		if($(item).hasClass("req") && ($.trim($(item).val())=="" || $(item).val()== $(item).prop("defaultValue"))){
			OK=false;
			alert(_lang['quiz_alert']);
			return false;	
		}
	})
	if(OK)
	return true;
}


$(document).ready(function() {
  
   $("a#button-step-one").click( function() {
		if(!validateForm(this))return false;
		$("#quiz-step-one").fadeOut(250);
		setTimeout( function(){ $("#quiz-step-ldr").fadeIn(250); }, 250);
		setTimeout( function(){ $("#quiz-step-ldr").fadeOut(250); }, 1500);
		setTimeout( function(){ $("#quiz-step-two").fadeIn(250); }, 1750);
	});
												 
	$("a#button-step-two").click( function() {
		if(!validateForm(this))return false;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; // email regex
		if(!filter.test($(this).parents('form').find('input[name=email]').val())){
			alert(_lang['insert_order_email']);
			return false;
		};

		$("#quiz-step-two").fadeOut(250);
		setTimeout( function(){ $("#quiz-step-ldr").fadeIn(250); }, 250);

		var data = "action=subscribe";
		data += '&email=' + $.trim($('#email-lista-local').val());
		$.post("kontakt.deamon.php", data);
			
		setTimeout( function(){ $("#quiz-step-ldr").fadeOut(250); }, 1500);
		setTimeout( function(){ $("#quiz-step-thr").fadeIn(250); }, 1750);

	});
  
});