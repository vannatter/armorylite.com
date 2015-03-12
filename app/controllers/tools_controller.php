<?

	class ToolsController extends AppController {
		var $name = 'Tools';
		var $uses = array('Home', 'Servers', 'Enchants', 'Classes', 'ClassGlyphs', 'ClassSpecs', 'ClassTalents');
		var $helpers = array('Common');
		var $components = array('Curl');
		
		protected $debug = false;
		
		function beforeFilter() {
		  parent::beforeFilter();
		}
		
		function getCharacterRaces($region="us") {
			$url = $this->Curl->getBNETprefix($region) . "/wow/data/character/races";
			list ($d, $i) = $this->Curl->getBNET($url);
			
			echo "<pre>";
			print_r($d);
			echo "</pre>";
			exit;
		}
		
		function getCharacterClasses($region="us") {
			$url = $this->Curl->getBNETprefix($region) . "/wow/data/character/classes";
			list ($d, $i) = $this->Curl->getBNET($url);

			echo "<pre>";
			print_r($d);
			echo "</pre>";
			exit;
		}		
		
		function getItemClasses($region="us") {
			$url = $this->Curl->getBNETprefix($region) . "/wow/data/item/classes";
			list ($d, $i) = $this->Curl->getBNET($url);
			
			echo "<pre>";
			print_r($d);
			echo "</pre>";
			exit;
		}

		function getTalents($region="us") {
			$url = $this->Curl->getBNETprefix($region) . "/wow/data/talents";
			list ($d, $i) = $this->Curl->getBNET($url);
			
			echo "<pre>";
			echo $this->indent($d);
			echo "</pre>";
			exit;
		}

		function updateCharacterClasses($region="us") {
			$url = $this->Curl->getBNETprefix($region) . "/wow/data/character/classes";
			list ($d, $i) = $this->Curl->getBNET($url);

			$classes = json_decode($d);
			
			foreach ($classes as $cls) {
				foreach ($cls as $cl) {
					// get this class by the name..
					$class_info = $this->Classes->getByName($cl->name);
					if ($class_info) {
						$class_update = array();
						$class_update['Class_ID'] = $class_info['Classes']['Class_ID'];
						$class_update['api_id'] = $cl->id;
						$class_update['mask'] = $cl->mask;
						$class_update['power_type'] = $cl->powerType;
						$this->Classes->save($class_update);
						echo "saved.<br/>";
					}					
				}
			}
			exit;
			
		}
		
		
		function updateTalents($region="us") {
			$url = $this->Curl->getBNETprefix($region) . "/wow/data/talents";
			list ($d, $i) = $this->Curl->getBNET($url);
			$talents = json_decode($d);
			
			$this->ClassGlyphs->query('TRUNCATE TABLE class_glyphs;');
			$this->ClassSpecs->query('TRUNCATE TABLE class_specs;');
			$this->ClassTalents->query('TRUNCATE TABLE class_talents;');

			foreach ($talents as $t) {
				
				// which class is this?
				echo "class = " . $t->class . "<br/>";
				$class_info = $this->Classes->getByShortName($t->class);
				
				if ($class_info['Classes']['Class_ID']) {
					$class_id = $class_info['Classes']['Class_ID'];

					// parse class_glyphs
					foreach ($t->glyphs as $glyph) {
						// check if we already have this, if we do, ignore it..
						$glyph_info = $this->ClassGlyphs->getByGlyphID($glyph->glyph);
						if (!$glyph_info) {
							$glyph_save = array();
							$glyph_save['glyph_id'] = $glyph->glyph;
							$glyph_save['class_id'] = $class_id;
							$glyph_save['item_id'] = $glyph->item;
							$glyph_save['glyph_name'] = $glyph->name;
							$glyph_save['icon'] = $glyph->icon;
							$glyph_save['type_id'] = $glyph->typeId;
							$this->ClassGlyphs->create();
							$this->ClassGlyphs->save($glyph_save);
							
							$icon = $this->Curl->getIcon($glyph->icon);
						}
					}

					// parse class_specs
					foreach ($t->specs as $spec) {
						$spec_save = array();
						$spec_save['class_id'] = $class_id;
						$spec_save['spec_name'] = $spec->name;
						$spec_save['role'] = $spec->role;
						$spec_save['background_image'] = $spec->backgroundImage;
						$spec_save['icon'] = $spec->icon;
						$spec_save['description'] = $spec->description;
						$spec_save['order'] = $spec->order;
						$this->ClassSpecs->create();
						$this->ClassSpecs->save($spec_save);
						
						$icon = $this->Curl->getIcon($spec->icon);
					}
					
					// parse class_talents
					foreach ($t->talents as $talent_tier) {
						foreach ($talent_tier as $talent) {
							$talent_save = array();
							$talent_save['class_id'] = $class_id;
							$talent_save['tier'] = $talent->tier;
							$talent_save['column'] = $talent->column;
							$talent_save['spell_id'] = $talent->spell->id;
							$talent_save['spell_name'] = $talent->spell->name;
							$talent_save['spell_icon'] = $talent->spell->icon;
							$talent_save['spell_description'] = $talent->spell->description;
							$talent_save['spell_cast_time'] = $talent->spell->castTime;
							$talent_save['spell_cooldown'] = ( (@$talent->spell->cooldown) ? @$talent->spell->cooldown : "");
							$this->ClassTalents->create();
							$this->ClassTalents->save($talent_save);
							
							$icon = $this->Curl->getIcon($talent->spell->icon);
						}					
					}					
				}
			}
			exit;
		}
		
		function getItem($item_id, $region="us") {
			$url = $this->Curl->getBNETprefix($region) . "/wow/item/" . $item_id;
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
			$url = $this->Curl->getBNETprefix($region) . "/wow/realm/status";
			
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
				
				echo "<pre>";
				print_r($servers);
				echo "</pre>";
				
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