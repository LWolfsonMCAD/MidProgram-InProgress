$( document ).ready(function() {
	$(function() {
	    $("#submit.button").click(function() {
			var data = {
		    name: $("#form_name").val(),
		    email: $("#form_email").val(),
		    message: $("#msg_text").val()
			};
			$.ajax({
			    type: "POST",
			    url: "../php/form_mailer.php",
			    data: data,
			    success: function(){
			        $('.success').fadeIn(1000);
			    }
			});

			return false;
	    });
	});

});

