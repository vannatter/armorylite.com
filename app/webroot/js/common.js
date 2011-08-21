$(document).ready(function() {
	
	$('.slot').hoverIntent({
		sensitivity: 3,
		interval: 200,
		over: showmenu, 
		timeout: 100,
		out: hidemenu	
	});
	
	function showmenu() {
		var s = $(this).attr("data-slot");
		$('#mnu_'+s).show();
	}
	
	function hidemenu() {
		var s = $(this).attr("data-slot");
		$('#mnu_'+s).hide();
	}
	
});