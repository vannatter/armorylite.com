$(document).ready(function() {
	
	$('.slot').hoverIntent({
		sensitivity: 3,
		interval: 200,
		over: show_slot_menu, 
		timeout: 100,
		out: hide_slot_menu	
	});
	function show_slot_menu() {
		var s = $(this).attr("data-slot");
		$('#mnu_'+s).show();
	}
	function hide_slot_menu() {
		var s = $(this).attr("data-slot");
		$('#mnu_'+s).hide();
	}
	
	$('.top_root_mnu').hoverIntent({
		sensitivity: 3,
		interval: 100,
		over: show_top_menu, 
		timeout: 100,
		out: hide_top_menu	
	});
	function show_top_menu() {
		var s = $(this).attr("data-showmnu");
		$('#mnu_'+s).fadeIn();
	}
	function hide_top_menu() {
		var s = $(this).attr("data-showmnu");
		$('#mnu_'+s).hide();
	}	
	
	
	$('.talblock').hoverIntent({
		sensitivity: 3,
		interval: 200,
		over: show_tal_menu, 
		timeout: 100,
		out: hide_tal_menu	
	});
	function show_tal_menu() {
		var s = $(this).attr("id");
		$('#mnu_'+s).show();
	}
	function hide_tal_menu() {
		var s = $(this).attr("id");
		$('#mnu_'+s).hide();
	}	
	
	$('.rep_header').click(function() {
		var i = $(this).attr('data-id');
		if ($('#repbox_'+i+':visible').length > 0) {
			$('#repbox_'+i).hide();
		} else {
			$('#repbox_'+i).fadeIn();
		}
	});
	
	$('.swaptal').click(function() {
		var i = $(this).attr('data-gridid');

		if ($('#grid_'+i+':visible').length > 0) {
		} else {
			$('.swaptal').removeClass('tabactive').addClass('tabinactive');
			$(this).addClass('tabactive').removeClass('tabinactive');
			$('.spec').hide();
			$('#grid_'+i).fadeIn();		
		}
	});
	
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

function expandem(a, b) {
	$('#stats_head_'+a).addClass('stats_head_on').removeClass('stats_head_off');
	$('#stats_head_'+b).addClass('stats_head_on').removeClass('stats_head_off');
	$('#stats_main_'+a).fadeIn();
	$('#stats_main_'+b).fadeIn();
}	
