<?

	class ProfileController extends AppController {
		var $name = 'Profile';
		var $uses = array('Characters', 'Info');
		var $components = array('Curl', 'Profile');
    	var $helpers = array('Profile');
    	
		function index ($region, $realm="*", $toon="*", $page="m") {
			
			$this->set('root_url', 'http://armorylite.com/'.strtolower($region).'/'.strtolower($realm).'/'.strtolower($toon));
			$this->set('region', $region);
			
			if ($realm == "*") {
				echo "this should trigger region browsing..";
				exit;
			} elseif ($toon == "*") {
				echo "this should trigger realm browsing..";
				exit;
			} else {
				$character = $this->Characters->getByPath($region, $realm, $toon);
				$url = $this->Curl->getBNETprefix($region) . "/api/wow/character/" . $realm . "/" . $toon . "?fields=guild,stats,talents,items,reputation,achievements,professions,titles,pvp,mounts,companions,pets";
				
				list ($data, $info) = $this->Curl->getBNET($url, $character['Characters']['Last_Updated']);
				
				if ($info['http_code'] == 200) {
					$parsed_data = json_decode($data);
					
					if ($character['Characters']['Character_ID']) {
						$char = array(
							'Character_ID' => $character['Characters']['Character_ID'],
							'Last_Updated' => ($parsed_data->lastModified / 1000),
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
							'RESIL' => $parsed_data->stats->resil,
							'HK' => $parsed_data->pvp->totalHonorableKills
						);
						$this->Characters->save($char);
						$char_id = $character['Characters']['Character_ID'];
					} else {
						// add new row, we don't know about this character..
						$char = array(
							'Region' => $region,
							'Server' => $parsed_data->realm,
							'Toon' => $parsed_data->name,
							'Last_Updated' => ($parsed_data->lastModified / 1000),
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
							'RESIL' => $parsed_data->stats->resil,
							'HK' => $parsed_data->pvp->totalHonorableKills
						);
						$this->Characters->create();
						$this->Characters->save($char);					
						$char_id = $this->Characters->id;
					}
					
					// add info record..
					$info = array(
						'character_id' => $char_id,
						'last_modified' => ($parsed_data->lastModified / 1000),
						'data' => $data
					);
					$this->Info->create();
					$this->Info->save($info);
					
					$this->set('d', $parsed_data);
					
				} elseif ($info['http_code'] == "404") {
					
					$this->cakeError('error404');
					
				} elseif ($info['http_code'] == "304") {
					
					// content has not changed..
					$data = $this->Info->getLatest($character['Characters']['Character_ID']);
					$parsed_data = json_decode($data['Info']['data']);
									
					$this->set('d', $parsed_data);
					$debug = "not modified, using cache<br/>";

					$gear = $this->Profile->buildGearSet($parsed_data->items);
					$this->set('gear', $gear);
					
					$this->set('is_anon', false);
					$this->set('debug', $debug);
					
				} else {
					
					// something else happened..
					$this->cakeError('error500');					
					
				}
				
			}
			
				
		}
		

	}
	
?>