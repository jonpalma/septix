$(document).ready(function(){
	$('.parallax').parallax();
	$('body').scrollspy({offset: 116});
	
	$('.nav-tabs .control-item').click(function (e) {
	  $('.nav-tabs .control-item.active').removeClass('active')
	  $(this).addClass('active')
	});
	
	$('#products-link').bind('click',function(e){
      e.preventDefault();
      document.location.href="productos.php"; 
	});
	
	$('#manuals-link').bind('click',function(e){
      e.preventDefault();
      document.location.href="manuales.php"; 
	});
	$(window).scrollTop(0);
});

//grabs the hash tag from the url
var hash = window.location.hash;
console.log(hash.toString());
//checks whether or not the hash tag is set
if (hash != "") {	
//removes all active classes from tabs
	$('#tabs div').each(function() {
		$(this).removeClass('active');
	});
	$('#my-tab-content div').each(function() {
		$(this).removeClass('in active');
	});
//this will add the active class on the hashtagged value
	var link = "";
	$('#tabs div').each(function() {
		link = $(this).find('a').attr('href');
		if (link == hash) {
			$(this).addClass('active');
		}
	});
	$('#my-tab-content div').each(function() {
		link = $(this).attr('id');
		if ('#'+link == hash) {
			$(this).addClass('in active');
		}
	});
}

//Ajax contact form
$(function() {

	// Get the form.
	var form = $('#contact-form');
	// Get the messages div.
	var formMessages = $('#form-output');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();
        $("#form-submit").text("Enviando...");

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('alert alert-danger');
			$(formMessages).addClass('alert alert-success');

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form.
			$('#name').val('');
            $('#phone').val('');
			$('#email').val('');
			$('#info').val('');
            $("#form-submit").text("Enviar");
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('alert alert-success');
			$(formMessages).addClass('alert alert-danger');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
                $("#form-submit").text("Enviar");
			} else {
				$(formMessages).text('Oops! Ocurrió un error no se pudo enviar la forma.');
                $("#form-submit").text("Enviar");
			}
		});

	});

});