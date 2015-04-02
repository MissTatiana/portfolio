$(function() {

	//hide modal
	$('.mask').hide();

	$('.sites').click(function() {
		$('.mask').show();
		
	});

	$('.fi-x').click(function() {
		$('.mask').hide();
	})

});