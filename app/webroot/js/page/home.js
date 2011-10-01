$(document).ready(function() {
	
	
	$('#regions_sel').change(function() {

		$.getJSON("/ajax/getServers/"+$(this).val(),{ajax: 'true'}, function(j) {
			
			var options = '<option value="">--</option>';
			for (var i = 0; i < j.length; i++) {
				options += '<option value="' + j[i].Servers.url_name + '">' + j[i].Servers.server_name + '</option>';
			}
		      
			$('#server_sel').html(options);
			buildlink();
		});
		    
	});
	
	$('#server_sel').change(function() {
		buildlink();
	});
	
	$('#name_box').keyup(function(e) {
		switch (e.keyCode) {
  			case 13:
  				golink();
  				break;
  			default:
  				buildlink();
  				break;
		}
	});
	$('#name_box').keydown(function(e) {
		switch (e.keyCode) {
  			case 13:
  				golink();
  				break;
  			default:
  				buildlink();
  				break;
		}
	});
	
	$(".defaultText").focus(function(srcc) {
        if ($(this).val() == $(this)[0].title) {
	        $(this).removeClass("defaultTextActive");
	        $(this).val("");
        }
    });
		    
    $(".defaultText").blur(function() {
    	if ($(this).val() == "") {
	        $(this).addClass("defaultTextActive");
	        $(this).val($(this)[0].title);
        }
    });
		    
    $(".defaultText").blur();  
    
	
});

function golink() {
	
	var domain = "http://armorylite.com";
	var region = $('#regions_sel').val();
	if (!region) { region = "??"; }
	var server = $('#server_sel').val();
	if (!server) { server = "??"; }
	var name = $('#name_box').val();
	if ( (!name) || (name == $('#name_box').attr('title')) ) { name = "??"; }
	
	if (name == "??") {
		return false;
	} else {
		window.location.href = "/" + region + "/" + server + "/" + name;
	}
	
}

function buildlink() {

	var domain = "http://armorylite.com";
	var region = $('#regions_sel').val();
	if (!region) { region = "??"; }
	var server = $('#server_sel').val();
	if (!server) { server = "??"; }
	var name = $('#name_box').val();
	if ( (!name) || (name == $('#name_box').attr('title')) ) { name = "??"; }
	
	if (name == "??") {
		var link = domain + "/" + region + "/" + server + "/" + name;
	} else {
		var link = "<a href='" + domain + "/" + region + "/" + server + "/" + name + "'>" + domain + "/" + region + "/" + server + "/" + name + "</a>";
	}
	
	$('#arm_link').html(link);
	
}
