$(function() {

	$('#eventH5').mouseover(function() {
		console.log('testing');

		var styles = {
			'height': '300px',
			'top': '-300px',
			'background': 'rgba(0, 0, 0, 0.80)',
			'color': '#8c7f91'
		};

		$(this).css( styles );
		$('#eventSpan').css( 'color', '#a699be')
	})

});