<?php

	class ApiController extends AppController {
		var $name = 'Api';
		var $uses = array('Enchants', 'Reforges', 'Stats', 'Achievements');
		var $helpers = array('Common');
		var $components = array('Curl');
		
		protected $debug = false;
		
		function beforeFilter() {
		  parent::beforeFilter();
		}
		
		function achievement($id) {
			$data = $this->Achievements->getAchievement($id);
			if ($data['Achievements']['id']) {
				echo json_encode($data);				
			} else {
	    		$achievement_curl = $this->Curl->getAchievement($id);
	    		if ($achievement_curl['title']) {
	    			$achievement = $this->Achievements->addAchievement($id, $achievement_curl['title'], $achievement_curl['icon'], $achievement_curl['points'], $achievement_curl['text'], $achievement_curl['reward']);
			    	if ($achievement['Achievements']['id']) {
						echo json_encode($achievement);				
			    	} else {
						echo '{"status":"nok", "reason":"Achievement not found."}';
			    	}
				} else {
					echo '{"status":"nok", "reason":"Achievement not found."}';
				}
			}
			exit;
		}
				
		function enchant($id) {
			$data = $this->Enchants->getEnchant($id);
			if ($data['Enchants']['id']) {
				echo json_encode($data);				
			} else {
				$enchant_name = $this->Curl->getEnchant($id);
				if ($enchant_name) {
					$enchant = $this->Enchants->addEnchant($id, $enchant_name);
					$data = $this->Enchants->getEnchant($id);
					if ($data['Enchants']['id']) {
						echo json_encode($data);				
					} else {
						echo '{"status":"nok", "reason":"Enchant not found."}';
					}
				} else {
					echo '{"status":"nok", "reason":"Enchant not found."}';
				}
			}
			exit;
		}
		
		function reforge($id) {
			$data = $this->Reforges->getReforge($id);
			if ($data['Reforges']['id']) {
				echo json_encode($data);				
			} else {
				echo '{"status":"nok", "reason":"Reforge not found."}';
			}
			exit;
		}

		function stat($id) {
			$data = $this->Stats->getStat($id);
			if ($data['Stats']['id']) {
				echo json_encode($data);				
			} else {
				echo '{"status":"nok", "reason":"Stat not found."}';
			}
			exit;
		}		
		
	}
	
?>