<?
	App::import('Xml');
	
	class ProfileComponent extends Object {
		var $components = array('Curl');
		
	    function initialize(&$controller) {
	    	$this->Controller = $controller;
	    }
	    
	    function buildAchievementTree($data) {
	    	if (!$this->__initAchievementsModel()) { }
	    	
	    	$achievements = array();
	    	foreach ($data->achievements->achievementsCompleted as $k=>$v) {
	    		$timestamp = $data->achievements->achievementsCompletedTimestamp[$k] / 1000;
	    		$achievement = $this->Achievements->getAchievement($v);
		    	if ($achievement['Achievements']['id']) {
					$achievement['Achievements']['web_icon'] = $this->Curl->getIcon($achievement['Achievements']['icon']);
		    	} else {
		    		$achievement_curl = $this->Curl->getAchievement($v);
		    		if ($achievement_curl['title']) {
		    			$achievement = $this->Achievements->addAchievement($v, $achievement_curl['title'], $achievement_curl['icon'], $achievement_curl['points'], $achievement_curl['text'], $achievement_curl['reward']);
				    	if ($achievement['Achievements']['id']) {
							$achievement['Achievements']['web_icon'] = $this->Curl->getIcon($achievement['Achievements']['icon']);
				    	}
		    		}
		    	}
		    	if ($achievement['Achievements']['id']) {
		    		$achievement['Achievements']['completed'] = date("F j, Y h:i", $timestamp);
		    		$achievements[$timestamp.".".$k] = $achievement;
		    	}
	    	}
			krsort($achievements);
	    	return $achievements;
	    }
	    
	    function buildReputationTree($data) {
	    	$grid = array();
	    	foreach ($data->reputation as $rep) {
	    		$grid[$rep->standing][] = $rep;
	    	}
	    	krsort($grid);

    		$final_grid = array();
    		for ($i=count($grid); $i >= 0; $i--) {	
    			if (@$grid[$i]) {
	    			foreach ($grid[$i] as $gr) {
			    		$final_grid[$i][$gr->value.".".$gr->id] = $gr;
	    			}
		    		krsort($final_grid[$i]);
    			}
    		}
    		return $final_grid;
	    }
	    
	    
	    function buildTalentGrid($data) {
			if (!$this->__initClassesModel()) { }
			if (!$this->__initClassTalentsModel()) { }
			if (!$this->__initClassSpecsModel()) { }
			if (!$this->__initClassGlyphsModel()) { }

			$grid = array();
			$class_info = $this->Classes->getByAPIID($data->class);
			
			if ($class_info['Classes']['Class_ID']) {
				$our_class_id = $class_info['Classes']['Class_ID'];
				$class_talents = $this->ClassTalents->getByClassID($our_class_id);
				$class_specs = $this->ClassSpecs->getByClassID($our_class_id);

				$raw_talents = array();
				foreach ($class_talents as $class_talent) {
					$raw_talents['row_'.$class_talent['ClassTalents']['tier']]['col_'.$class_talent['ClassTalents']['column']]['talent_id'] = $class_talent['ClassTalents']['id'];
					$raw_talents['row_'.$class_talent['ClassTalents']['tier']]['col_'.$class_talent['ClassTalents']['column']]['class_id'] = $class_talent['ClassTalents']['class_id'];
					$raw_talents['row_'.$class_talent['ClassTalents']['tier']]['col_'.$class_talent['ClassTalents']['column']]['tier'] = $class_talent['ClassTalents']['tier'];
					$raw_talents['row_'.$class_talent['ClassTalents']['tier']]['col_'.$class_talent['ClassTalents']['column']]['column'] = $class_talent['ClassTalents']['column'];
					$raw_talents['row_'.$class_talent['ClassTalents']['tier']]['col_'.$class_talent['ClassTalents']['column']]['spell_id'] = $class_talent['ClassTalents']['spell_id'];
					$raw_talents['row_'.$class_talent['ClassTalents']['tier']]['col_'.$class_talent['ClassTalents']['column']]['spell_name'] = $class_talent['ClassTalents']['spell_name'];
					$raw_talents['row_'.$class_talent['ClassTalents']['tier']]['col_'.$class_talent['ClassTalents']['column']]['spell_icon'] = $class_talent['ClassTalents']['spell_icon'];
					$raw_talents['row_'.$class_talent['ClassTalents']['tier']]['col_'.$class_talent['ClassTalents']['column']]['spell_icon_img'] = $this->Curl->getIcon($class_talent['ClassTalents']['spell_icon']);
					$raw_talents['row_'.$class_talent['ClassTalents']['tier']]['col_'.$class_talent['ClassTalents']['column']]['spell_description'] = $class_talent['ClassTalents']['spell_description'];
					$raw_talents['row_'.$class_talent['ClassTalents']['tier']]['col_'.$class_talent['ClassTalents']['column']]['spell_cast_time'] = $class_talent['ClassTalents']['spell_cast_time'];
					$raw_talents['row_'.$class_talent['ClassTalents']['tier']]['col_'.$class_talent['ClassTalents']['column']]['spell_cooldown'] = $class_talent['ClassTalents']['spell_cooldown'];
					$raw_talents['row_'.$class_talent['ClassTalents']['tier']]['col_'.$class_talent['ClassTalents']['column']]['selected'] = 0;
				}	
									
				foreach ($data->talents as $t) {
					$spec = $t->spec->name;
					$grid['spec_'.$spec] = $raw_talents;
					$grid['spec_'.$spec]['spec'] = $t->spec;
					$grid['spec_'.$spec]['info']['selected'] = ( (@$t->selected) ? @$t->selected : "0");
					$grid['spec_'.$spec]['info']['calc_talent'] = $t->calcTalent;					
					$grid['spec_'.$spec]['info']['calc_spec'] = $t->calcSpec;					
					$grid['spec_'.$spec]['info']['calc_glyph'] = $t->calcGlyph;					

					foreach ($t->talents as $selected_talent) {
						$grid['spec_'.$spec]['row_'.$selected_talent->tier]['col_'.$selected_talent->column]['selected'] = 1;
					}					
					
					foreach ($t->glyphs->major as $g) {
						$glyph = array();
						$glyph['glyph_id'] = $g->glyph;						
						$glyph['item_id'] = $g->item;						
						$glyph['name'] = $g->name;						
						$glyph['icon'] = $g->icon;						
						$glyph['icon_img'] = $this->Curl->getIcon($g->icon);
						$grid['spec_'.$spec]['glyphs']['major'][] = $glyph;
					}
					
					foreach ($t->glyphs->minor as $g) {
						$glyph = array();
						$glyph['glyph_id'] = $g->glyph;						
						$glyph['item_id'] = $g->item;						
						$glyph['name'] = $g->name;						
						$glyph['icon'] = $g->icon;						
						$glyph['icon_img'] = $this->Curl->getIcon($g->icon);
						$grid['spec_'.$spec]['glyphs']['minor'][] = $glyph;
					}					
					
				}
				
				
			}
			
			return $grid;
	    }
	    
	    function buildTalentTrees($data) {
			if (!$this->__initTalentsModel()) { }
			if (!$this->__initTalentTreesModel()) { }
			
			$grid = array();
			$max_cols = 3;
			$max_rows = 5;
			$talent_data = $this->Talents->getTalentsByClass($data->class);
			
			if (is_array($data->talents)) {
				$spec = 1;

				foreach($data->talents as $talent_block) {
					if (@$talent_block->name) {
						$grid['spec_'.$spec]['info']['build'] = $talent_block->build;
						$grid['spec_'.$spec]['info']['spec_id'] = $spec;
						$grid['spec_'.$spec]['info']['name'] = $talent_block->name;
						$grid['spec_'.$spec]['info']['active'] = ((@$talent_block->selected == "1") ? "1" : "0");
						$grid['spec_'.$spec]['glyphs'] = $talent_block->glyphs;
						
						$talent_string = $talent_block->build;
						$trees = $this->TalentTrees->getTalentTreesByClass($data->class);
						$pane = 1;
						$slot = 0;
						
						foreach ($trees as $tree) {
							$grid['spec_'.$spec]['pane_'.$pane]['info']['name'] = $tree['TalentTrees']['tree'];
							$grid['spec_'.$spec]['pane_'.$pane]['info']['background'] = '/img/talents/' . $tree['TalentTrees']['background'] . '.png';
							$grid['spec_'.$spec]['pane_'.$pane]['info']['count'] = $talent_block->trees[$pane-1]->total;
	
							$tree_talents = $this->Talents->getTalentsByClassTree($data->class, $tree['TalentTrees']['tree_num']);
							
							$row = 1;
							$col = 1;
							$spent = 0;
							$ranks = array();
							
							foreach ($tree_talents as $tree_talent) {
								$tree_talent['Talents']['web_icon'] = $this->Curl->getIcon($tree_talent['Talents']['texture']);
								if ( ($row == $tree_talent['Talents']['row']) && ($col == $tree_talent['Talents']['column']) ) {
									$ranks[] = $tree_talent;
								} else {
									$grid['spec_'.$spec]['pane_'.$pane]['row_'.$row]['col_'.$col]['spent'] = substr($talent_string,$slot,1);
									$grid['spec_'.$spec]['pane_'.$pane]['row_'.$row]['col_'.$col]['ranks'] = $ranks;
									$ranks = array();
									$ranks[] = $tree_talent;
									$slot++;
								}
								$row = $tree_talent['Talents']['row'];
								$col = $tree_talent['Talents']['column'];
							}
							
							$grid['spec_'.$spec]['pane_'.$pane]['row_'.$row]['col_'.$col]['spent'] = substr($talent_string,$slot,1);
							$grid['spec_'.$spec]['pane_'.$pane]['row_'.$row]['col_'.$col]['ranks'] = $ranks;
							$pane++;
							$slot++;
						}
						$spec++;
					}					
				}
			}
			
			return $grid;
	    }
    
		function buildGearSet($data) {
			if (!$this->__initItemsModel()) { }
			if (!$this->__initReforgesModel()) { }
			if (!$this->__initItemStatsModel()) { }
			if (!$this->__initEnchantsModel()) { }
			
			$gear = array();
			$slots = array("head", "neck", "shoulder", "back", "chest", "shirt", "wrist", "hands", "waist", "legs", "feet", "finger1", "finger2", "trinket1", "trinket2", "mainHand", "offHand", "ranged", "tabard");
			
			foreach ($slots as $slot) {
				$this->buildGearSlot($data, $gear, $slot);
			}
			
			return $gear;
		}
		
		
		function buildGearSlot(&$data, &$gear, $slot) {
			
			$obj = $slot;
			
			// check if we have this main item..
			if (@$data->$obj) {
				$main_item = $this->Items->getItem($data->$obj->id);
				if (!$main_item['Items']['Item_Index_ID']) {
					$wowhead_url = "http://www.wowhead.com/item=" . $data->$obj->id . "&xml";
					echo "<!-- " . $wowhead_url . " --> \n";
					
					list ($x, $i) = $this->Curl->getRAW($wowhead_url);
					$parsed_xml = new SimpleXMLElement($x);
					
/*
	    			$parsed_xml = & new XML($x);
					$parsed_xml = Set::reverse($parsed_xml);				
*/
	
					echo "<pre>";
					print_r($parsed_xml);
					echo "</pre>";
					
	
					if ($parsed_xml['Wowhead']['Item']['id']) {
						$main_item = $this->Items->addItem($parsed_xml['Wowhead']['Item']['id'], $parsed_xml['Wowhead']['Item']['name'], $parsed_xml['Wowhead']['Item']['quality']['id'], $parsed_xml['Wowhead']['Item']['level'], $parsed_xml['Wowhead']['Item']['icon']['value'], ((@$parsed_xml['Wowhead']['Item']['inventorySlot']['id']) ? $parsed_xml['Wowhead']['Item']['inventorySlot']['id'] : $parsed_xml['Wowhead']['Item']['InventorySlot']['id']));
						
						// now get the item_stats .. 
						$url = $this->Curl->getBNETprefix("us") . "/api/wow/item/" . $main_item['Items']['Item_ID'];
						list ($is_d, $is_i) = $this->Curl->getBNET($url);
						if ($is_i['http_code'] == 200) {
							$is_parsed_data = json_decode($is_d);

							if (@count($is_parsed_data->bonusStats) > 0) {
								foreach ($is_parsed_data->bonusStats as $bonus) {
									$ret = $this->ItemStats->addItemStat($main_item['Items']['Item_Index_ID'], $bonus->stat, $bonus->amount);								
								}								
							}
						}	
								
					}
				}
				$data->$obj->ilvl = $main_item['Items']['Item_iLevel'];
				
				$gems = array();
				$enchants = array();
				$reforges = array();
				$tinkers = array();
				$transmorgs = array();
				
				foreach ($data->$obj->tooltipParams as $k=>$v) {
	
					// gem processing ///////////////////////////////////////////////////////////////////////
					if (substr($k, 0, 3) == "gem") {
						$item = $this->Items->getItem($v);					
						if (!$item['Items']['Item_Index_ID']) {
	    					list ($x, $i) = $this->Curl->getRAW("http://www.wowhead.com/item=" . $v . "&xml");
	    					$parsed_xml = & new XML($x);
							$parsed_xml = Set::reverse($parsed_xml);
							
							if ($parsed_xml['Wowhead']['Item']['id']) {
								$item = $this->Items->addItem($parsed_xml['Wowhead']['Item']['id'], $parsed_xml['Wowhead']['Item']['name'], $parsed_xml['Wowhead']['Item']['quality']['id'], $parsed_xml['Wowhead']['Item']['level'], $parsed_xml['Wowhead']['Item']['icon']['value'], ((@$parsed_xml['Wowhead']['Item']['inventorySlot']['id']) ? $parsed_xml['Wowhead']['Item']['inventorySlot']['id'] : $parsed_xml['Wowhead']['Item']['InventorySlot']['id']));
							}
						}
	
						$tmp = array();
						$tmp["name"] = $item['Items']['Item_Name'];
						$tmp["quality"] = $item['Items']['Item_Quality'];
						$tmp["id"] = $item['Items']['Item_ID'];
						$gems[] = $tmp;
					}
					// /gem processing /////////////////////////////////////////////////////////////////////
					
					// reforge processing //////////////////////////////////////////////////////////////////
					if (substr($k, 0, 3) == "ref") {
						$reforge = $this->Reforges->getReforge($v);
						if ($reforge['Reforges']['id']) {
							
							// process type vs. values..
							$stat_info = $this->ItemStats->getItemStatByType($main_item['Items']['Item_Index_ID'], $reforge['Reforges']['from_stat_id']);
							if (@$stat_info['ItemStats']['id']) {
								$calc_amount = floor(($stat_info['ItemStats']['amount']+0) * 0.4);
							} else {
								$calc_amount = "";
							}
							
							$tmp = array();
							$tmp["from"] = $reforge['Reforges']['from'];
							$tmp["to"] = $reforge['Reforges']['to'];
							$tmp["id"] = $reforge['Reforges']['reforge_id'];
							$tmp['calc_amount'] = $calc_amount;
							$reforges[] = $tmp;
						}
					}
					// /reforge processing /////////////////////////////////////////////////////////////////
					
					// enchant processing //////////////////////////////////////////////////////////////////
					if (substr($k, 0, 3) == "enc") {
						
						$enchant = $this->Enchants->getEnchant($v);
						if (!$enchant['Enchants']['id']) {
							$enchant_name = $this->Curl->getEnchant($v);
							if ($enchant_name) {
								$enchant = $this->Enchants->addEnchant($v, $enchant_name);
							}
						}
						
						if ($enchant['Enchants']['id'])	{
							$tmp = array();
							$tmp["name"] = $enchant['Enchants']['name'];
							$tmp["id"] = $enchant['Enchants']['enchant_id'];
							$enchants[] = $tmp;
						}
					}
					// /enchant processing /////////////////////////////////////////////////////////////////
					
					// tinker processing ///////////////////////////////////////////////////////////////////
					if (substr($k, 0, 3) == "tin") {
						
						$enchant = $this->Enchants->getEnchant($v);
						if (!$enchant['Enchants']['id']) {
							$enchant_name = $this->Curl->getEnchant($v);
							if ($enchant_name) {
								$enchant = $this->Enchants->addEnchant($v, $enchant_name);
							}
						}
						
						if ($enchant['Enchants']['id'])	{
							$tmp = array();
							$tmp["name"] = $enchant['Enchants']['name'];
							$tmp["id"] = $enchant['Enchants']['enchant_id'];
							$tinkers[] = $tmp;
						}
					}
					// /tinker processing /////////////////////////////////////////////////////////////////					
					
					// transmorg processing ///////////////////////////////////////////////////////////////
					if (substr($k, 0, 3) == "tra") {
						
						$item = $this->Items->getItem($v);					
						if (!$item['Items']['Item_Index_ID']) {
	    					list ($x, $i) = $this->Curl->getRAW("http://www.wowhead.com/item=" . $v . "&xml");
	    					$parsed_xml = & new XML($x);
							$parsed_xml = Set::reverse($parsed_xml);
							
							if ($parsed_xml['Wowhead']['Item']['id']) {
								$item = $this->Items->addItem($parsed_xml['Wowhead']['Item']['id'], $parsed_xml['Wowhead']['Item']['name'], $parsed_xml['Wowhead']['Item']['quality']['id'], $parsed_xml['Wowhead']['Item']['level'], $parsed_xml['Wowhead']['Item']['icon']['value'], ((@$parsed_xml['Wowhead']['Item']['inventorySlot']['id']) ? $parsed_xml['Wowhead']['Item']['inventorySlot']['id'] : $parsed_xml['Wowhead']['Item']['InventorySlot']['id']));
							}
						}
	
						$tmp = array();
						$tmp["name"] = $item['Items']['Item_Name'];
						$tmp["quality"] = $item['Items']['Item_Quality'];
						$tmp["id"] = $item['Items']['Item_ID'];
						$transmorgs[] = $tmp;
					}
					// /transmorg processing //////////////////////////////////////////////////////////////
															
				}	
				
				$data->$obj->icon_path = $this->Curl->getIcon($data->$obj->icon);
				if ($gems) {
					$data->$obj->gems = $gems;
				}
				if ($reforges) {
					$data->$obj->reforges = $reforges;
				}
				if ($enchants) {
					$data->$obj->enchants = $enchants;
				}				
				if ($tinkers) {
					$data->$obj->tinkers = $tinkers;
				}				
				if ($transmorgs) {
					$data->$obj->transmorgs = $transmorgs;
				}				
				$gear[$obj] = $data->$obj;
			}
			
		}
		
		function __initEnchantsModel(){
      		$this->Enchants = ClassRegistry::init('Enchants');
      		if (isset($this->Enchants)) {
        		$this->Enchants->recursive = -1;
        		return true;
      		}
      		return false;
    	}		

		function __initItemsModel(){
      		$this->Items = ClassRegistry::init('Items');
      		if (isset($this->Items)) {
        		$this->Items->recursive = -1;
        		return true;
      		}
      		return false;
    	}
    	
		function __initItemStatsModel(){
      		$this->ItemStats = ClassRegistry::init('ItemStats');
      		if (isset($this->ItemStats)) {
        		$this->ItemStats->recursive = -1;
        		return true;
      		}
      		return false;
    	}    	
    	
		function __initReforgesModel(){
      		$this->Reforges = ClassRegistry::init('Reforges');
      		if (isset($this->Reforges)) {
        		$this->Reforges->recursive = -1;
        		return true;
      		}
      		return false;
    	} 	

		function __initClassTalentsModel(){
      		$this->ClassTalents = ClassRegistry::init('ClassTalents');
      		if (isset($this->ClassTalents)) {
        		$this->ClassTalents->recursive = -1;
        		return true;
      		}
      		return false;
    	} 

		function __initClassSpecsModel(){
      		$this->ClassSpecs = ClassRegistry::init('ClassSpecs');
      		if (isset($this->ClassSpecs)) {
        		$this->ClassSpecs->recursive = -1;
        		return true;
      		}
      		return false;
    	} 
    	
		function __initClassGlyphsModel(){
      		$this->ClassGlyphs = ClassRegistry::init('ClassGlyphs');
      		if (isset($this->ClassGlyphs)) {
        		$this->ClassGlyphs->recursive = -1;
        		return true;
      		}
      		return false;
    	} 

		function __initClassesModel(){
      		$this->Classes = ClassRegistry::init('Classes');
      		if (isset($this->Classes)) {
        		$this->Classes->recursive = -1;
        		return true;
      		}
      		return false;
    	} 
    	    	
		function __initTalentsModel(){
      		$this->Talents = ClassRegistry::init('Talents');
      		if (isset($this->Talents)) {
        		$this->Talents->recursive = -1;
        		return true;
      		}
      		return false;
    	} 

		function __initTalentTreesModel(){
      		$this->TalentTrees = ClassRegistry::init('TalentTrees');
      		if (isset($this->TalentTrees)) {
        		$this->TalentTrees->recursive = -1;
        		return true;
      		}
      		return false;
    	}   

		function __initAchievementsModel(){
      		$this->Achievements = ClassRegistry::init('Achievements');
      		if (isset($this->Achievements)) {
        		$this->Achievements->recursive = -1;
        		return true;
      		}
      		return false;
    	}       	
		
	}
?>