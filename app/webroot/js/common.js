$(document).ready(function() {
	
	$('.slot').hoverIntent({
		sensitivity: 3, // How sensitive the hoverIntent should be
		interval: 200, // How often in milliseconds the onmouseover should be checked
		over: showmenu, // Function to call when mouseover is called    
		timeout: 100, // How often in milliseconds the onmouseout should be checked
		out: hidemenu // Function to call when mouseout is called 		
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