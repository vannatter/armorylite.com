<?
	App::import('Xml');
	
	class ProfileComponent extends Object {
		var $components = array('Curl');
		
	    function initialize(&$controller) {
	    	$this->Controller = $controller;
	    }
	    
	    function buildTalentTrees($data) {
			if (!$this->__initTalentsModel()) { }
			if (!$this->__initTalentTreesModel()) { }
			
			$grid = array();
			$max_cols = 4;
			$max_rows = 7;
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
					list ($x, $i) = $this->Curl->getRAW("http://www.wowhead.com/item=" . $data->$obj->id . "&xml");
	    			$parsed_xml = & new XML($x);
					$parsed_xml = Set::reverse($parsed_xml);				
	
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
		
	}
?>