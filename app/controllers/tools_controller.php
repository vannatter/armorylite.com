<?

	class ToolsController extends AppController {
		var $name = 'Tools';
		var $uses = array('Home', 'Servers');
		var $helpers = array('Common');
		var $components = array('Curl');
		
		protected $debug = false;
		
		function beforeFilter() {
		  parent::beforeFilter();
		}
		
		function getCharacterRaces($region) {
			$url = $this->Curl->getBNETprefix($region) . "/api/wow/data/character/races";
			list ($d, $i) = $this->Curl->getBNET($url);
			
			echo "<pre>";
			print_r($d);
			echo "</pre>";
			exit;
		}
		
		function getCharacterClasses($region) {
			$url = $this->Curl->getBNETprefix($region) . "/api/wow/data/character/classes";
			list ($d, $i) = $this->Curl->getBNET($url);

			echo "<pre>";
			print_r($d);
			echo "</pre>";
			exit;
		}
		
		function getItemClasses($region) {
			$url = $this->Curl->getBNETprefix($region) . "/api/wow/data/item/classes";
			list ($d, $i) = $this->Curl->getBNET($url);
			
			echo "<pre>";
			print_r($d);
			echo "</pre>";
			exit;
		}

		function getItem($item_id, $region="us") {
			$url = $this->Curl->getBNETprefix($region) . "/api/wow/item/" . $item_id;
			list ($d, $i) = $this->Curl->getBNET($url);
			
			echo "<pre>";
			print_r($d);
			echo "</pre>";
			exit;
		}
		
		function getEnchant($enchant_id) {
			$data = $this->Curl->getEnchant($enchant_id);
			echo "data = " . $data . "<Br/>";
			exit;
		}
		
		function getAchievement($achievement_id) {
			$achievement_data = $this->Curl->getAchievement($achievement_id);
			
			echo "<pre>";
			print_r($achievement_data);
			echo "</pre>";			
			exit;
		}
		
		function getServers($region="us") {
			$url = $this->Curl->getBNETprefix($region) . "/api/wow/realm/status";
			
			if ($region == "cn") {
				$url = "http://www.battlenet.com.cn/api/wow/realm/status?rhtml=y";
			}
			
			list ($d, $i) = $this->Curl->getBNET($url);
			$a = json_decode($d);
			return $a;
		}		
		
		
		function updateServers() {

			$regions = array("cn", "kr", "tw", "us", "eu");
			
			foreach ($regions as $region) {
				$servers = $this->getServers($region);
				foreach ($servers->realms as $server) {
					$check_server = $this->Servers->getServer($server->slug, $region);
					if ($check_server['Servers']['id']) {
						$server_update = $this->Servers->updateServer($check_server['Servers']['id'], $server->name, $server->slug, $region, $server->type, $server->status, $server->population, $server->battlegroup);
					} else {
						$server_add = $this->Servers->addServer($server->name, $server->slug, $region, $server->type, $server->status, $server->population, $server->battlegroup);
					}
				}
			}
			
			exit;
		}
		
		
	}
	
?>