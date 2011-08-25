<?

	class ApiController extends AppController {
		var $name = 'Api';
		var $uses = array('Enchants', 'Reforges', 'Stats');
		var $helpers = array('Common');
		var $components = array('Curl');
		
		protected $debug = false;
		
		function beforeFilter() {
		  parent::beforeFilter();
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