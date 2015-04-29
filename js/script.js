$(function() {


	
	// /* logo
	// ---------------------------*/
	// $('#logo').hide()

	// $('#logo').fadeIn(1000);

	// $('#logo').animate({
	// 	top: '-=200'
	// }, 500);


	// /* tag images
	// ---------------------------*/
	// var designer = $('#designer');

	// designer.hide();
	// designer.delay(1500).fadeIn(10);
	// designer.animate({
	// 	top: '-=200'
	// });
	// designer.animate({
	// 	top: '+=80'
	// });
	// designer.animate({
	// 	top: '-=20'
	// });


	// var developer = $('#developer')

	// developer.hide();
	// developer.hide();
	// developer.delay(1700).fadeIn(10);
	// developer.animate({
	// 	top: '-=200'
	// });
	// developer.animate({
	// 	top: '+=80'
	// });
	// developer.animate({
	// 	top: '-=20'
	// });


	// var extraoddd = $('#extraodd')

	// extraoddd.hide();
	// extraoddd.hide();
	// extraoddd.hide();
	// extraoddd.delay(1900).fadeIn(10);
	// extraoddd.animate({
	// 	top: '-=200'
	// });
	// extraoddd.animate({
	// 	top: '+=80'
	// });
	// extraoddd.animate({
	// 	top: '-=20'
	// });


	// $('.h3').hide();
	// $('.h3').delay(2600).fadeIn(20);




	/* Portfolio hover
	--------------------------------*/
	$('.slide').hover(
		function() {
			$(this).find('.caption').slideDown(250);
		},
		function() {
			$(this).find('.caption').slideUp(250);
		}
	);




	/* Contact and Form functionality
	------------------------------------------*/
	var messageDelay = 2000;  // How long to display status messages (in milliseconds)

	// Init the form once the document is ready
	$( init );


	// Initialize the form

	function init() {

	  // Hide the form initially.
	  // Make submitForm() the form's submit handler.
	  // Position the form so it sits in the centre of the browser window.
	  $('#contactForm').hide().submit( submitForm ).addClass( 'positioned' );

	  // When the "Send us an email" link is clicked:
	  // 1. Fade the content out
	  // 2. Display the form
	  // 3. Move focus to the first field
	  // 4. Prevent the link being followed

	  $('a[href="#contactForm"]').click( function() {
	    $('#content').fadeTo( 'slow', .2 );
	    $('#contactForm').fadeIn( 'slow', function() {
	      $('#senderName').focus();
	    } )

	    return false;
	  } );
	  
	  // When the "Cancel" button is clicked, close the form
	  $('#cancel').click( function() { 
	    $('#contactForm').fadeOut();
	    $('#content').fadeTo( 'slow', 1 );
	  } );  

	  // When the "Escape" key is pressed, close the form
	  $('#contactForm').keydown( function( event ) {
	    if ( event.which == 27 ) {
	      $('#contactForm').fadeOut();
	      $('#content').fadeTo( 'slow', 1 );
	    }
	  } );

	}


	// Submit the form via Ajax

	function submitForm() {
	  var contactForm = $(this);

	  // Are all the fields filled in?

	  if ( !$('#senderName').val() || !$('#senderEmail').val() || !$('#message').val() ) {

	    // No; display a warning message and return to the form
	    $('#incompleteMessage').fadeIn().delay(messageDelay).fadeOut();
	    contactForm.fadeOut().delay(messageDelay).fadeIn();

	  } else {

	    // Yes; submit the form to the PHP script via Ajax

	    $('#sendingMessage').fadeIn();
	    contactForm.fadeOut();

	    $.ajax( {
	      url: contactForm.attr( 'action' ) + "?ajax=true",
	      type: contactForm.attr( 'method' ),
	      data: contactForm.serialize(),
	      success: submitFinished
	    } );
	  }

	  // Prevent the default form submission occurring
	  return false;
	}


	// Handle the Ajax response

	function submitFinished( response ) {
	  response = $.trim( response );
	  $('#sendingMessage').fadeOut();

	  if ( response == "success" ) {

	    // Form submitted successfully:
	    // 1. Display the success message
	    // 2. Clear the form fields
	    // 3. Fade the content back in

	    $('#successMessage').fadeIn().delay(messageDelay).fadeOut();
	    $('#senderName').val( "" );
	    $('#senderEmail').val( "" );
	    $('#message').val( "" );

	    $('#content').delay(messageDelay+500).fadeTo( 'slow', 1 );

	  } else {

	    // Form submission failed: Display the failure message,
	    // then redisplay the form
	    $('#failureMessage').fadeIn().delay(messageDelay).fadeOut();
	    $('#contactForm').delay(messageDelay+500).fadeIn();
	  }
	}

});







