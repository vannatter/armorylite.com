<?
	class ProfileHelper extends Helper {
		
		function gearSlot($short, $gear, $add_class="") {
			
			if (@$gear->id) {
				echo "<div data-slot=\"" . $short . "\" class=\"slot slot_" . $gear->quality . " slot_color_" . $gear->quality . (($add_class!="") ? " " . $add_class . " " : "") . "\">";
            	echo "	<div style=\"display:none;\" class=\"slot_mnu\" id=\"mnu_" . $short . "\">";
            	echo "		<div class=\"main_link_" . $gear->quality . "\"><a href=\"http://www.wowhead.com/?item=" . $gear->id . "\">" . $gear->name . " &gt;&nbsp;&nbsp;</a></div>";

            	if (@count($gear->transmorgs) > 0) {
            		echo "		<div class=\"transmorg_link\">Transmogrified to:<br/>";
	            	foreach ($gear->transmorgs as $trans) {
	              		echo "		<a href=\"http://www.wowhead.com/?item=" . $trans['id'] . "\">" . $trans['name'] . " &gt;&nbsp;&nbsp;</a>";
	            	}
	            	echo "		</div>";
            	}
            	
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
            	
				if (@count($gear->tinkers) > 0) {
	            	foreach ($gear->tinkers as $tinker) {
	              		echo "		<div class=\"enchant_link\">" . $tinker['name'] . "&nbsp;&nbsp</div>";
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
			} else {
				echo "<div data-slot=\"" . $short . "\" class=\"slot slot_0 slot_color_0" . (($add_class!="") ? " " . $add_class . " " : "") . "\">";
		        echo $short;
				echo "</div>";
			}
			
		}
		
		function getReputationLabel($id) {
			$labels = array("Hated", "Hostile", "Unfriendly", "Neutral", "Friendly", "Honored", "Revered", "Exalted");
			return $labels[$id];
		}
		
	    function getReputation($name, $value, $max, $level) {
	    	
			$pct = abs($value) / abs($max);
			$pct = floor($pct * 100);
			$fc = $this->getReputationLabel($level);

			$xx = "<div class=\"rep_line\"><div class=\"rep_name\">" . $name . "</div><div class=\"rep_box\"><span class=\"rep_bar " . $fc . "\" style=\"width:" . $pct . "%;\">&nbsp;</span></div><div class=\"rep_lvl\">" . $fc . "</div><div class=\"rep_lvl\">" . $value . "/" . $max . "</div></div>";
      		return $xx;
    	}		
		
		function getPower($power_type, $power_value) {
			$s = "";
			switch ($power_type) {
				case "mana":
        			$s .= "<div class=\"mana\">";
					$s .= $power_value;
					$s .= "</div>";					
					break;
					
				case "energy":
        			$s .= "<div class=\"energy\">";
					$s .= $power_value;
					$s .= "</div>";					
					break;

				case "focus":
        			$s .= "<div class=\"energy\">";
					$s .= $power_value;
					$s .= "</div>";					
					break;
					
				case "rage":
        			$s .= "<div class=\"rage\">";
					$s .= $power_value;
					$s .= "</div>";					
					break;
				
				default:
        			$s .= "<div class=\"rage\">";
					$s .= $power_value;
					$s .= "</div>";					
					break;
			}
			return $s;
		}
		
		function getProfessions($professions) {
			$s = "";
			if (is_array($professions->primary)) {
				foreach ($professions->primary as $pro) {
			    	$s .= "<div class=\"prof\">";
			        $s .= $pro->name . " - " . $pro->rank;
			      	$s .= "</div>";
				}
			}
			return $s;
		}
		
		function getActiveTalent($talents) {
			$s = "";
			foreach ($talents as $talent) {
				if (@$talent->selected == "1") {
					$s .= $talent->trees[0]->total . "/" . $talent->trees[1]->total . "/" . $talent->trees[2]->total . "<br/>";
					$s .= "<b>" . $talent->name . "</b>";
 				}
			}			
			return $s;
		}
		
		function activeTitle($titles, $name) {
			$active = "";
			foreach ($titles as $title) {
				if (@$title->selected == 1) {
					$active = str_replace("%s",$name,$title->name);
				}
			}
			if (!$active) {
				$active = $name;
			}
			return $active;
		}

		function getRegion($region) {
			$s = "";
			switch ($region) {
				case "us":
					$s = "United States";
					break;
				case "eu":
					$s = "Europe";
					break;
				case "tw":
					$s = "Taiwan";
					break;
				case "cn":
					$s = "China";
					break;
				case "kr":
					$s = "Korea";
					break;
			}
			return $s;
		}		
		
		function getGender($gender) {
			$s = "";
			switch ($gender) {
				case 0:
					$s = "Male";
					break;
				case 1:
					$s = "Female";
					break;
			}
			return $s;
		}
		
		function getRace($race) {
			$s = "";
			switch ($race) {
				case 1:
					$s = "Human";
					break;
				case 2:
					$s = "Orc";
					break;
				case 3:
					$s = "Dwarf";
					break;
				case 4:
					$s = "Night Elf";
					break;
				case 5:
					$s = "Undead";
					break;
				case 6:
					$s = "Tauren";
					break;
				case 7:
					$s = "Gnome";
					break;
				case 8:
					$s = "Troll";
					break;
				case 9:
					$s = "Goblin";
					break;
				case 10:
					$s = "Blood Elf";
					break;
				case 11:
					$s = "Draenei";
					break;
				case 22:
					$s = "Worgen";
					break;
			}
			return $s;			
		}
		
		function getFaction($race) {
			$s = "";
			switch ($race) {
				case 1:
					$s = "Alliance";
					break;
				case 2:
					$s = "Horde";
					break;
				case 3:
					$s = "Alliance";
					break;
				case 4:
					$s = "Alliance";
					break;
				case 5:
					$s = "Horde";
					break;
				case 6:
					$s = "Horde";
					break;
				case 7:
					$s = "Alliance";
					break;
				case 8:
					$s = "Horde";
					break;
				case 9:
					$s = "Horde";
					break;
				case 10:
					$s = "Horde";
					break;
				case 11:
					$s = "Alliance";
					break;
				case 22:
					$s = "Alliance";
					break;
			}
			return $s;		
		}		

		function getTalentClass($class) {
			$s = "";
			switch ($class) {
				case 1:
					$s = "warrior";
					break;
				case 2:
					$s = "paladin";
					break;
				case 3:
					$s = "hunter";
					break;
				case 4:
					$s = "rogue";
					break;
				case 5:
					$s = "priest";
					break;
				case 6:
					$s = "deathknight";
					break;
				case 7:
					$s = "shaman";
					break;
				case 8:
					$s = "mage";
					break;
				case 9:
					$s = "warlock";
					break;
				case 11:
					$s = "druid";
					break;
			}
			return $s;			
		}		
		
		function getClass($class) {
			$s = "";
			switch ($class) {
				case 1:
					$s = "Warrior";
					break;
				case 2:
					$s = "Paladin";
					break;
				case 3:
					$s = "Hunter";
					break;
				case 4:
					$s = "Rogue";
					break;
				case 5:
					$s = "Priest";
					break;
				case 6:
					$s = "Death Knight";
					break;
				case 7:
					$s = "Shaman";
					break;
				case 8:
					$s = "Mage";
					break;
				case 9:
					$s = "Warlock";
					break;
				case 11:
					$s = "Druid";
					break;
			}
			return $s;			
		}		
		
		function getExpander($class) {
			$s = "";
			switch ($class) {
				case 1:
					$s = "'melee', 'base'";
					break;
				case 2:
					$s = "'spell', 'base'";
					break;
				case 3:
					$s = "'ranged', 'base'";
					break;
				case 4:
					$s = "'melee', 'base'";
					break;
				case 5:
					$s = "'spell', 'base'";
					break;
				case 6:
					$s = "'melee', 'base'";
					break;
				case 7:
					$s = "'spell', 'base'";
					break;
				case 8:
					$s = "'spell', 'base'";
					break;
				case 9:
					$s = "'spell', 'base'";
					break;
				case 11:
					$s = "'spell', 'base'";
					break;
			}
			return $s;			
		}		
		
		
	}
?>