<?
  
	class ProfileHelper extends Helper {
		
		function gearSlot($short, $gear) {
			
			/**
			echo "<pre style='background-color:pink;'>";
			print_r($gear);
			echo "</pre>";			
			**/
			
			if (@$gear->id) {
				
				echo "<div data-slot=\"" . $short . "\" class=\"slot slot_" . $gear->quality . " slot_color_" . $gear->quality . "\">";
            	echo "	<div style=\"display:none;\" class=\"slot_mnu\" id=\"mnu_" . $short . "\">";
            	echo "		<div class=\"main_link_" . $gear->quality . "\"><a href=\"http://www.wowhead.com/?item=" . $gear->id . "\">" . $gear->name . " &gt;&nbsp;&nbsp;</a></div>";
            	
            	if (@count($gear->gems) > 0) {
	            	foreach ($gear->gems as $gem) {
	              		echo "		<div class=\"gem_link_" . $gem['quality'] . "\"><a href=\"http://www.wowhead.com/?item=" . $gem['id'] . "\">" . $gem['name'] . " &gt;&nbsp;&nbsp;</a></div>";
	            	}
            	}
            	
				if (@count($gear->reforges) > 0) {
	            	foreach ($gear->reforges as $reforge) {
	              		echo "		<div class=\"reforge_link\">" . $reforge['calc_amount'] . " " . $reforge['from'] . " &rarr; " . $reforge['calc_amount'] . " " . $reforge['to'] . "&nbsp;&nbsp;</div>";
	            	}
            	}            	

				if (@count($gear->enchants) > 0) {
	            	foreach ($gear->enchants as $enchant) {
	              		echo "		<div class=\"enchant_link\">" . $enchant['name'] . "&nbsp;&nbsp</div>";
	            	}
            	}            	
            	
				if (@$gear->ilvl) {
              		echo "<div class=\"dur_link\">iLevel: " . $gear->ilvl . "&nbsp;&nbsp;</div>";
				}
            	
            	echo "	</div>";
            	
		        if (@$_COOKIE["armorylite_img"] == "n") {
		        	echo $short;
		        } else {
		          	echo "<img src=\"" . $gear->icon_path . "\" width=\"36\" height=\"36\" border=\"0\">";
		        }		
            	
				echo "</div>";
			}
			
		}
		
	}
?>