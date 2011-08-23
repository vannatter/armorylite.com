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
	
	$('.stats_toggle').click(function() {
		var i = $(this).attr('data-statname');
		
		if ($('#stats_main_'+i+':visible').length > 0) {
			$('#stats_head_'+i).addClass('stats_head_off').removeClass('stats_head_on');
			$('#stats_main_'+i).hide();
		} else {
			$('#stats_head_'+i).addClass('stats_head_on').removeClass('stats_head_off');
			$('#stats_main_'+i).fadeIn();
		}
	});
	
});