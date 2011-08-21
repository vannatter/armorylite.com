<?

	class ToolsController extends AppController {
		var $name = 'Tools';
		var $uses = array('Home');
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
		
	}
	
?>