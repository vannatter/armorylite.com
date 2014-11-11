<?

	class ProfileController extends AppController {
		var $name = 'Profile';
		var $uses = array('Characters', 'Info', 'Counters', 'Talents', 'Servers', 'Anons');
		var $components = array('Curl', 'Profile');
    	var $helpers = array('Profile');
    	
    	
    	function anon($anon_id, $page="m", $extra_id="") {
    		
    		$character_id = $this->Anons->getCharacter($anon_id);
    		if ($character_id) {
    			
    			$character = $this->Characters->getById($character_id);
    			if ($character['Characters']['Character_ID']) {
    				
	    			$region = $character['Characters']['Region'];
	    			$realm = $character['Characters']['Server'];
	    			$toon = $character['Characters']['Toon'];
	    			
					$settings = new StdClass();
					$settings->page = $page;
					$settings->is_archive = false;
					$settings->is_saved = false;
					$settings->lite_url = '/anon/'.$anon_id;
					$settings->anon = true;
					$settings->query_string = "";
					$settings->z = $region;
					$settings->r = $realm;
					$settings->n = $toon;    		

    				list($parsed_data, $counter, $gear, $chid) = $this->_parseCharacter($region, $realm, $toon, $settings);
				
					// set output variables..
					$this->set('d', $parsed_data);
					$this->set('counter', $counter);
					$this->set('gear', $gear);
					$this->set('set', $settings);
					$this->set('modified', $parsed_data->lastModified / 1000);
				
					switch($page) {
						case "r":
							$reputation_grid = $this->Profile->buildReputationTree($parsed_data);
							$this->set('grid', $reputation_grid);
							$this->set('title_for_layout', 'Anonymous of Unknown (' . strtoupper($region) . ') - Reputation');
							$this->render('reputation');
							break;
						case "v":
							$achievement_grid = $this->Profile->buildAchievementTree($parsed_data);
							$this->set('grid', $achievement_grid);
							$this->set('title_for_layout', 'Anonymous of Unknown (' . strtoupper($region) . ') - Achievements');
							$this->render('achievements');
							break;
						case "t":
							$talent_grid = $this->Profile->buildTalentTrees($parsed_data);
							$this->set('grid', $talent_grid);
							$this->set('title_for_layout', 'Anonymous of Unknown (' . strtoupper($region) . ') - Talents');
							$this->render('talents');
							break;
						default:
							$this->set('title_for_layout', 'Anonymous of Unknown (' . strtoupper($region) . ')');
							$this->render('index');					
							break;
					}					

    			} else {
	    			$this->cakeError('e404', array('reason' => 'Character profile not found.'));
    			}
    			
    		} else {
    			$this->cakeError('e404', array('reason' => 'Anonymous profile not found.'));
    		}
    		
    	}
    	
		function index($region, $realm="*", $toon="*", $page="m", $extra_id="") {
					
			$realm = $this->scrubRealm($realm);
			$toon = $this->scrubToon($toon);
			
			$settings = new StdClass();
			$settings->page = $page;
			$settings->is_archive = false;
			$settings->is_saved = false;
			$settings->lite_url = '/'.strtolower($region).'/'.strtolower($realm).'/'.strtolower($toon);
			$settings->anon = false;
			$settings->query_string = "";
			$settings->z = $region;
			$settings->r = $realm;
			$settings->n = $toon;
			
			if ($realm == "*") {

				$start = intval($extra_id);
				$settings->x = $start;
				
				switch ($page) {
					case "s":
							$settings->p = "s";
							$settings->sort = "Score DESC";
							break;
					case "l":
							$settings->p = "l";
							$settings->sort = "Level DESC";
							break;
					case "c":
							$settings->p = "c";
							$settings->sort = "Class ASC";
							break;
					case "n":
							$settings->p = "n";
							$settings->sort = "Toon ASC";
							break;
					case "m":
							$settings->p = "n";
							$settings->sort = "Toon ASC";
							break;
					default:
							$settings->p = "n";
							$settings->sort = "Toon ASC";
							break;
				}
				
				$characters = $this->Characters->browseRegion($region, $settings->sort, $start, 100);
				$count = $this->Characters->countRegion($region);
				
				$this->set('count', $count);
				$this->set('characters', $characters);
				$this->set('set', $settings);
				$this->set('title_for_layout', '(' . strtoupper($region) . ') - Browse');
				$this->render('../browse/region');
				
			} elseif ($toon == "*") {
				
				$start = intval($extra_id);
				$settings->x = $start;
				
				switch ($page) {
					case "s":
							$settings->p = "s";
							$settings->sort = "Score DESC";
							break;
					case "l":
							$settings->p = "l";
							$settings->sort = "Level DESC";
							break;
					case "c":
							$settings->p = "c";
							$settings->sort = "Class ASC";
							break;
					case "n":
							$settings->p = "n";
							$settings->sort = "Toon ASC";
							break;
					case "m":
							$settings->p = "n";
							$settings->sort = "Toon ASC";
							break;
					default:
							$settings->p = "n";
							$settings->sort = "Toon ASC";
							break;
				}
				
				$server = $this->Servers->getServer($realm, $region);
				$characters = $this->Characters->browse($region, $realm, $settings->sort, $start, 100);
				$count = $this->Characters->count($region, $realm);
				
				$this->set('count', $count);
				$this->set('characters', $characters);
				$this->set('set', $settings);
				$this->set('server', $server);
				$this->set('title_for_layout', $server['Servers']['server_name'] . ' (' . strtoupper($region) . ') - Browse');
				$this->render('../browse/realm');
				
			} else {
				
				list($parsed_data, $counter, $gear, $chid) = $this->_parseCharacter($region, $realm, $toon, $settings);
				
				// set output variables..
				$this->set('d', $parsed_data);
				$this->set('counter', $counter);
				$this->set('gear', $gear);
				$this->set('set', $settings);
				$this->set('modified', $parsed_data->lastModified / 1000);
				
				switch($page) {
					case "r":
						$reputation_grid = $this->Profile->buildReputationTree($parsed_data);
						$this->set('grid', $reputation_grid);
						$this->set('title_for_layout', $parsed_data->name . ' of ' . $parsed_data->realm . ' (' . strtoupper($region) . ') - Reputation');
						$this->render('reputation');
						break;
					case "v":
						$achievement_grid = $this->Profile->buildAchievementTree($parsed_data);
						$this->set('grid', $achievement_grid);
						$this->set('title_for_layout', $parsed_data->name . ' of ' . $parsed_data->realm . ' (' . strtoupper($region) . ') - Achievements');
						$this->render('achievements');
						break;
					case "t":
						$talent_grid = $this->Profile->buildTalentGrid($parsed_data);
						$this->set('grid', $talent_grid);
						$this->set('title_for_layout', $parsed_data->name . ' of ' . $parsed_data->realm . ' (' . strtoupper($region) . ') - Talents');
						$this->render('talents');
						break;
						
					case "anonymize":
						$anon_id = $this->Anons->anonymize($chid);
						if ($anon_id) {
							$this->redirect('/anon/'.$anon_id);
							exit;								
						} else {
							$this->cakeError('e500', array('reason' => 'Something went wrong'));
						}
			
					default:
						$this->set('title_for_layout', $parsed_data->name . ' of ' . $parsed_data->realm . ' (' . strtoupper($region) . ')');
						$this->render('index');					
						break;					
				}
			}
		}
		
		
		function _parseCharacter($region, $realm, $toon, $settings) {
			$character = $this->Characters->getByPath($region, $realm, $toon);
			$url = $this->Curl->getBNETprefix($region) . "/wow/character/" . urlencode($realm) . "/" . urlencode($toon) . "?fields=guild,stats,talents,items,reputation,achievements,professions,titles,pvp,mounts,companions,pets";
			list ($data, $info) = $this->Curl->getBNET($url, $character['Characters']['Last_Updated']);
			
			if ($info['http_code'] == 200) {
				$parsed_data = json_decode($data);
				
				if ($character['Characters']['Character_ID']) {
					$char = array(
						'Character_ID' => $character['Characters']['Character_ID'],
						'Last_Updated' => ($parsed_data->lastModified / 1000),
						'Score' => $parsed_data->items->averageItemLevelEquipped,
						'Level' => $parsed_data->level,
						'Class' => $parsed_data->class,
						'Race' => $parsed_data->race,
						'Guild' => $parsed_data->guild->name,
						'ACHPTS' => $parsed_data->achievementPoints,
						'HP' => $parsed_data->stats->health,
						'MP' => $parsed_data->stats->power,
						'ARMOR' => $parsed_data->stats->armor,
						'STA' => $parsed_data->stats->sta,
						'STR' => $parsed_data->stats->str,
						'INT' => $parsed_data->stats->int,
						'AGI' => $parsed_data->stats->agi,
						'SPI' => $parsed_data->stats->spr,
						'SPDMG' => $parsed_data->stats->spellPower,
						'AP' => $parsed_data->stats->attackPower,
						'RESIL' => $parsed_data->stats->pvpResilienceRating,
						'HK' => $parsed_data->totalHonorableKills
					);
					
					$this->Characters->save($char);
					$char_id = $character['Characters']['Character_ID'];
				} else {
					
					// add new row, we don't know about this character..
					$char = array(
						'Region' => $region,
						'Server' => $realm,
						'Toon' => $parsed_data->name,
						'Last_Updated' => ($parsed_data->lastModified / 1000),
						'Score' => $parsed_data->items->averageItemLevelEquipped,
						'Level' => $parsed_data->level,
						'Class' => $parsed_data->class,
						'Race' => $parsed_data->race,
						'Guild' => ((isset($parsed_data->guild->name)) ? $parsed_data->guild->name : ""),
						'ACHPTS' => $parsed_data->achievementPoints,
						'HP' => $parsed_data->stats->health,
						'MP' => $parsed_data->stats->power,
						'ARMOR' => $parsed_data->stats->armor,
						'STA' => $parsed_data->stats->sta,
						'STR' => $parsed_data->stats->str,
						'INT' => $parsed_data->stats->int,
						'AGI' => $parsed_data->stats->agi,
						'SPI' => $parsed_data->stats->spr,
						'SPDMG' => $parsed_data->stats->spellPower,
						'AP' => $parsed_data->stats->attackPower,
						'RESIL' => $parsed_data->stats->pvpResilienceRating,
						'HK' => $parsed_data->totalHonorableKills
					);
					
					$this->Characters->create();
					$this->Characters->save($char);					
					$char_id = $this->Characters->id;
				}
				
				if ($char_id > 0) {
					$gz_data = gzcompress($data, 9);
					$info = array(
						'character_id' => $char_id,
						'last_modified' => ($parsed_data->lastModified / 1000),
						'data' => $gz_data
					);
					$this->Info->create();
					$this->Info->save($info);
					
					$counter = $this->Counters->setCounter($char_id);
					$gear = $this->Profile->buildGearSet($parsed_data->items);
				} else {
					$this->cakeError('e404', array('reason' => "Character not found"));
				}
				
			} elseif ($info['http_code'] == "304") {
				
				// content has not changed..
				$data = $this->Info->getLatest($character['Characters']['Character_ID']);
				$gz_data = gzuncompress($data['Info']['data']);
				$parsed_data = json_decode($gz_data);
								
				$counter = $this->Counters->setCounter($character['Characters']['Character_ID']);
				$gear = $this->Profile->buildGearSet($parsed_data->items);
				
			} elseif ($info['http_code'] == "404") {
				$re = json_decode($data);
				$this->cakeError('e404', array('reason' => $re->reason));
			} elseif ($info['http_code'] == "503") {
				// unavailable, use our last cache if we have one, otherwise drop to error..
				$edata = $data;
				$data = $this->Info->getLatest($character['Characters']['Character_ID']);
				
				if ($data['Info']['id']) {
					$gz_data = gzuncompress($data['Info']['data']);
					$parsed_data = json_decode($gz_data);
					$counter = $this->Counters->setCounter($character['Characters']['Character_ID']);
					$gear = $this->Profile->buildGearSet($parsed_data->items);
					$settings->is_archive = true;
				} else {
					$re = json_decode($edata);
					$this->cakeError('e503', array('reason' => $re->reason));
				}
			} else {
				// server error, use our last cache if we have one, otherwise drop to error..
				$edata = $data;
				$data = $this->Info->getLatest($character['Characters']['Character_ID']);
				
				if ($data['Info']['id']) {
					$gz_data = gzuncompress($data['Info']['data']);
					$parsed_data = json_decode($gz_data);
					$counter = $this->Counters->setCounter($character['Characters']['Character_ID']);
					$gear = $this->Profile->buildGearSet($parsed_data->items);
					$settings->is_archive = true;
				} else {
					$re = json_decode($edata);
					$this->cakeError('e500', array('reason' => $re->reason));
				}					
			}			
			
			return array($parsed_data, $counter, $gear, $character['Characters']['Character_ID']); 
		}
		
		
	}
	
?>