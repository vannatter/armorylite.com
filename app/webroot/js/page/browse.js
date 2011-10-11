$(document).ready(function() {
	
	
	$('#filter_browse').change(function() {
		
		var url = $(this).attr('data-href') + $(this).val();
		window.location.href = url;
		
	});
	
	
});
