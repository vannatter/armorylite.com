<?

	class AdminController extends AppController {
		var $name = 'Admin';
		var $uses = array('Servers', 'Users', 'Blog', 'Enchants');
		
	    function beforeFilter() {
      		parent::beforeFilter();
      		$this->layout = "admin";
    	}		
		
		function x() {
		
			$d = '{"5324":{"bonus":"+50 Critical Strike"},"5325":{"bonus":"+50 Haste"},"5326":{"bonus":"+50 Mastery"},"5327":{"bonus":"+50 Multistrike"},"5328":{"bonus":"+50 Versatility"},"5317":{"bonus":"+75 Critical Strike"},"5318":{"bonus":"+75 Haste"},"5319":{"bonus":"+75 Mastery"},"5320":{"bonus":"+75 Multistrike"},"5321":{"bonus":"+75 Versatility"},"5310":{"bonus":"+100 Critical Strike & +10% Speed"},"5311":{"bonus":"+100 Haste & +10% Speed"},"5312":{"bonus":"+100 Mastery & +10% Speed"},"5313":{"bonus":"+100 Multistrike & +10% Speed"},"5314":{"bonus":"+100 Versatility & +10% Speed"},"5330":{"bonus":"Mark of the Thunderlord"},"5331":{"bonus":"Mark of the Shattered Hand"},"5335":{"bonus":"Mark of Shadowmoon"},"5336":{"bonus":"Mark of Blackrock"},"5337":{"bonus":"Mark of Warsong"},"5334":{"bonus":"Mark of the Frostwolf"},"5384":{"bonus":"Mark of Bleeding Hollow"},"5284":{"bonus":"+30 Critical Strike"},"5297":{"bonus":"+30 Haste"},"5299":{"bonus":"+30 Mastery"},"5301":{"bonus":"+30 Multistrike"},"5303":{"bonus":"+30 Versatility"},"5285":{"bonus":"+40 Critical Strike"},"5292":{"bonus":"+40 Haste"},"5293":{"bonus":"+40 Mastery"},"5294":{"bonus":"+40 Multistrike"},"5295":{"bonus":"+40 Versatility"},"5281":{"bonus":"+100 Critical Strike"},"5298":{"bonus":"+100 Haste"},"5300":{"bonus":"+100 Mastery"},"5302":{"bonus":"+100 Multistrike"},"5304":{"bonus":"+100 Versatility"},"4441":{"bonus":"Windsong"},"4442":{"bonus":"Jade Spirit"},"4443":{"bonus":"Elemental Force"},"4444":{"bonus":"Dancing Steel"},"4445":{"bonus":"Colossus"},"4446":{"bonus":"River\'s Song"},"4411":{"bonus":"+170 Mastery"},"4412":{"bonus":"+170 Dodge"},"4414":{"bonus":"+180 Intellect"},"4415":{"bonus":"+180 Strength"},"4416":{"bonus":"+180 Agility"},"4417":{"bonus":"+200 PvP Resilience"},"4418":{"bonus":"+200 Spirit"},"4419":{"bonus":"+80 All Stats"},"4420":{"bonus":"+300 Stamina"},"4421":{"bonus":"+180 Critical Strike"},"4422":{"bonus":"+200 Stamina"},"4423":{"bonus":"+180 Intellect"},"4424":{"bonus":"+180 Critical Strike"},"4426":{"bonus":"+175 Haste"},"4427":{"bonus":"+175 Critical Strike"},"4428":{"bonus":"+140 Agility & Minor Speed Increase"},"4429":{"bonus":"+140 Mastery & Minor Speed Increase"},"4430":{"bonus":"+170 Haste"},"4431":{"bonus":"+170 Haste"},"4432":{"bonus":"+170 Strength"},"4433":{"bonus":"+170 Mastery"},"4434":{"bonus":"+165 Intellect"},"4993":{"bonus":"+170 Parry"},"4066":{"bonus":"Mending"},"4258":{"bonus":"+50 Agility"},"4256":{"bonus":"+50 Strength"},"4257":{"bonus":"+50 Intellect"},"4061":{"bonus":"+50 Mastery"},"4062":{"bonus":"+30 Stamina and Minor Movement Speed"},"4063":{"bonus":"+15 All Stats"},"4064":{"bonus":"+56 PvP Power"},"4065":{"bonus":"+50 Haste"},"4067":{"bonus":"Avalanche"},"4068":{"bonus":"+50 Haste"},"4069":{"bonus":"+50 Haste"},"4070":{"bonus":"+55 Stamina"},"4071":{"bonus":"+50 Critical Strike"},"4072":{"bonus":"+30 Intellect"},"4073":{"bonus":"+16 Stamina"},"4074":{"bonus":"Elemental Slayer"},"4075":{"bonus":"+35 Strength"},"4076":{"bonus":"+35 Agility"},"4077":{"bonus":"+40 PvP Resilience"},"4082":{"bonus":"+50 Haste"},"4083":{"bonus":"Hurricane"},"4084":{"bonus":"Heartsong"},"4085":{"bonus":"+50 Mastery"},"4086":{"bonus":"+50 Dodge"},"4087":{"bonus":"+50 Critical Strike"},"4088":{"bonus":"+40 Spirit"},"4089":{"bonus":"+50 Critical Strike"},"4090":{"bonus":"+30 Stamina"},"4091":{"bonus":"+40 Intellect"},"4092":{"bonus":"+50 Critical Strike"},"4093":{"bonus":"+50 Spirit"},"4094":{"bonus":"+50 Mastery"},"4095":{"bonus":"+50 Haste"},"4096":{"bonus":"+50 Intellect"},"4097":{"bonus":"Power Torrent"},"4098":{"bonus":"Windwalk"},"4099":{"bonus":"Landslide"},"4100":{"bonus":"+65 Critical Strike"},"4101":{"bonus":"+65 Critical Strike"},"4102":{"bonus":"+20 All Stats"},"4103":{"bonus":"+75 Stamina"},"4105":{"bonus":"+25 Agility and Minor Movement Speed"},"4104":{"bonus":"+35 Mastery and Minor Movement Speed"},"4106":{"bonus":"+50 Strength"},"4107":{"bonus":"+65 Mastery"},"4108":{"bonus":"+65 Haste"},"4227":{"bonus":"+130 Agility"},"3225":{"bonus":"Executioner"},"3844":{"bonus":"+45 Spirit"},"3239":{"bonus":"Icebreaker Weapon"},"3241":{"bonus":"Lifeward"},"3247":{"bonus":"+70 Attack Power versus Undead"},"3251":{"bonus":"Giantslaying"},"3830":{"bonus":"+50 Spell Power"},"3828":{"bonus":"+42 Attack Power"},"1103":{"bonus":"+26 Agility"},"3273":{"bonus":"Deathfrost"},"3790":{"bonus":"Black Magic"},"1606":{"bonus":"+25 Attack Power"},"3827":{"bonus":"+55 Attack Power"},"3833":{"bonus":"+32 Attack Power"},"3834":{"bonus":"+63 Spell Power"},"3789":{"bonus":"Berserking"},"3788":{"bonus":"+50 Critical Strike"},"3854":{"bonus":"+81 Spell Power"},"3855":{"bonus":"+69 Spell Power"},"3233":{"bonus":"+250 Mana"},"3231":{"bonus":"+15 Haste"},"3234":{"bonus":"+20 Critical Strike"},"1952":{"bonus":"+20 Dodge"},"3236":{"bonus":"+200 Health"},"4747":{"bonus":"+16 Agility"},"1147":{"bonus":"+18 Spirit"},"2381":{"bonus":"+20 Spirit"},"3829":{"bonus":"+17 Attack Power"},"1075":{"bonus":"+22 Stamina"},"5259":{"bonus":"+20 Agility"},"1119":{"bonus":"+16 Intellect"},"1600":{"bonus":"+19 Attack Power"},"3243":{"bonus":"+28 PvP Power"},"3244":{"bonus":"+14 Spirit and +14 Stamina"},"3245":{"bonus":"+20 PvP Resilience"},"4748":{"bonus":"+16 Agility"},"1951":{"bonus":"+18 Dodge"},"3246":{"bonus":"+28 Spell Power"},"3826":{"bonus":"+24 Critical Strike"},"2661":{"bonus":"+3 All Stats"},"3252":{"bonus":"+8 All Stats"},"3253":{"bonus":"+2% Threat and +10 Parry"},"3256":{"bonus":"+10 Agility and +40 Armor"},"2326":{"bonus":"+23 Spell Power"},"3294":{"bonus":"+25 Stamina"},"1953":{"bonus":"+22 Dodge"},"3831":{"bonus":"+23 Haste"},"3296":{"bonus":"+10 Spirit and 2% Reduced Threat"},"3297":{"bonus":"+275 Health"},"3232":{"bonus":"+15 Stamina and Minor Speed Increase"},"3824":{"bonus":"+12 Attack Power"},"1128":{"bonus":"+25 Intellect"},"3825":{"bonus":"+15 Haste"},"1099":{"bonus":"+22 Agility"},"1603":{"bonus":"+22 Attack Power"},"3832":{"bonus":"+10 All Stats"},"1597":{"bonus":"+16 Attack Power"},"2332":{"bonus":"+30 Spell Power"},"3845":{"bonus":"+25 Attack Power"},"3850":{"bonus":"+40 Stamina"},"4746":{"bonus":"+7 Weapon Damage"},"2666":{"bonus":"+30 Intellect"},"2667":{"bonus":"+35 Attack Power"},"2668":{"bonus":"+20 Strength"},"2669":{"bonus":"+40 Spell Power"},"2670":{"bonus":"+35 Agility"},"2671":{"bonus":"+50 Arcane and Fire Spell Power"},"2672":{"bonus":"+54 Shadow and Frost Spell Power"},"2673":{"bonus":"Mongoose"},"2674":{"bonus":"Spellsurge"},"2675":{"bonus":"Battlemaster"},"3846":{"bonus":"+40 Spell Power"},"3222":{"bonus":"+20 Agility"},"2657":{"bonus":"+12 Agility"},"2622":{"bonus":"+12 Dodge"},"2647":{"bonus":"+12 Strength"},"1891":{"bonus":"+4 All Stats"},"2648":{"bonus":"+14 Dodge"},"5183":{"bonus":"+15 Spell Power"},"2679":{"bonus":"+12 Spirit"},"2649":{"bonus":"+12 Stamina"},"5184":{"bonus":"+15 Spell Power"},"2653":{"bonus":"+12 Dodge"},"2654":{"bonus":"+12 Intellect"},"2655":{"bonus":"+15 Parry"},"2656":{"bonus":"+10 Spirit and +10 Stamina"},"2658":{"bonus":"+10 Haste and +10 Critical Strike"},"2659":{"bonus":"+150 Health"},"2662":{"bonus":"+120 Armor"},"5237":{"bonus":"+15 Spirit"},"3150":{"bonus":"+14 Spirit"},"2933":{"bonus":"+15 PvP Resilience"},"2934":{"bonus":"+10 Critical Strike"},"2935":{"bonus":"+15 Critical Strike"},"5250":{"bonus":"+15 Strength"},"5255":{"bonus":"+13 Attack Power"},"2937":{"bonus":"+20 Spell Power"},"2322":{"bonus":"+19 Spell Power"},"369":{"bonus":"+12 Intellect"},"5257":{"bonus":"+12 Attack Power"},"2938":{"bonus":"+16 PvP Power"},"5258":{"bonus":"+12 Agility"},"2939":{"bonus":"Minor Speed and +6 Agility"},"2940":{"bonus":"Minor Speed and +9 Stamina"},"1071":{"bonus":"+18 Stamina"},"3229":{"bonus":"+12 PvP Resilience"},"5260":{"bonus":"+18 Dodge"},"4723":{"bonus":"+2 Weapon Damage"},"249":{"bonus":"+2 Beastslaying"},"250":{"bonus":"+1  Weapon Damage"},"723":{"bonus":"+3 Intellect"},"255":{"bonus":"+3 Spirit"},"241":{"bonus":"+2 Weapon Damage"},"943":{"bonus":"+3 Weapon Damage"},"853":{"bonus":"+6 Beastslaying"},"854":{"bonus":"+6 Elemental Slayer"},"4745":{"bonus":"+3 Weapon Damage"},"1897":{"bonus":"+5 Weapon Damage"},"803":{"bonus":"Fiery Weapon"},"912":{"bonus":"Demonslaying"},"963":{"bonus":"+7 Weapon Damage"},"805":{"bonus":"+4 Weapon Damage"},"1894":{"bonus":"Icy Chill"},"1896":{"bonus":"+9 Weapon Damage"},"1898":{"bonus":"Lifestealing"},"1899":{"bonus":"Unholy Weapon"},"1900":{"bonus":"Crusader"},"1903":{"bonus":"+9 Spirit"},"1904":{"bonus":"+9 Intellect"},"2443":{"bonus":"+7 Frost Spell Damage"},"2504":{"bonus":"+30 Spell Power"},"2505":{"bonus":"+29 Spell Power"},"2563":{"bonus":"+15 Strength"},"2564":{"bonus":"+15 Agility"},"2567":{"bonus":"+20 Spirit"},"2568":{"bonus":"+22 Intellect"},"2646":{"bonus":"+25 Agility"},"3869":{"bonus":"Blade Ward"},"3870":{"bonus":"Blood Draining"},"4720":{"bonus":"+5 Health"},"41":{"bonus":"+5 Health"},"44":{"bonus":"Absorption (10)"},"924":{"bonus":"+2 Dodge"},"24":{"bonus":"+5 Mana"},"4721":{"bonus":"+1 Stamina"},"242":{"bonus":"+15 Health"},"243":{"bonus":"+1 Spirit"},"783":{"bonus":"+10 Armor"},"246":{"bonus":"+20 Mana"},"4725":{"bonus":"+1 Agility"},"248":{"bonus":"+1 Strength"},"254":{"bonus":"+25 Health"},"4727":{"bonus":"+3 Spirit"},"66":{"bonus":"+1 Stamina"},"247":{"bonus":"+1 Agility"},"4722":{"bonus":"+1 Stamina"},"4724":{"bonus":"+1 Agility"},"744":{"bonus":"+20 Armor"},"4733":{"bonus":"+30 Armor"},"4728":{"bonus":"+3 Spirit"},"4730":{"bonus":"+3 Stamina"},"823":{"bonus":"+3 Strength"},"63":{"bonus":"Absorption (25)"},"843":{"bonus":"+30 Mana"},"844":{"bonus":"+2 Mining"},"845":{"bonus":"+2 Herbalism"},"2603":{"bonus":"+2 Fishing"},"4729":{"bonus":"+3 Intellect"},"847":{"bonus":"+1 All Stats"},"4731":{"bonus":"+3 Stamina"},"848":{"bonus":"+30 Armor"},"849":{"bonus":"+3 Agility"},"850":{"bonus":"+35 Health"},"4735":{"bonus":"+5 Spirit"},"724":{"bonus":"+3 Stamina"},"925":{"bonus":"+3 Dodge"},"4737":{"bonus":"+5 Stamina"},"4736":{"bonus":"+5 Spirit"},"856":{"bonus":"+5 Strength"},"857":{"bonus":"+50 Mana"},"4726":{"bonus":"+3 Spirit"},"863":{"bonus":"+10 Parry"},"865":{"bonus":"+5 Skinning"},"866":{"bonus":"+2 All Stats"},"884":{"bonus":"+50 Armor"},"4740":{"bonus":"+5 Agility"},"4738":{"bonus":"+5 Stamina"},"905":{"bonus":"+5 Intellect"},"852":{"bonus":"+5 Stamina"},"906":{"bonus":"+5 Mining"},"907":{"bonus":"+7 Spirit"},"908":{"bonus":"+50 Health"},"909":{"bonus":"+5 Herbalism"},"4734":{"bonus":"+3 Agility"},"4739":{"bonus":"+5 Strength"},"911":{"bonus":"Minor Speed Increase"},"4741":{"bonus":"+7 Spirit"},"913":{"bonus":"+65 Mana"},"923":{"bonus":"+5 Dodge"},"904":{"bonus":"+5 Agility"},"927":{"bonus":"+7 Strength"},"928":{"bonus":"+3 All Stats"},"4743":{"bonus":"+7 Stamina"},"930":{"bonus":"+2% Mount Speed"},"931":{"bonus":"+10 Haste"},"1883":{"bonus":"+7 Intellect"},"1884":{"bonus":"+9 Spirit"},"1885":{"bonus":"+9 Strength"},"1886":{"bonus":"+9 Stamina"},"1887":{"bonus":"+7 Agility"},"4742":{"bonus":"+7 Strength"},"1889":{"bonus":"+70 Armor"},"1890":{"bonus":"+10 Spirit and +10 Stamina"},"4744":{"bonus":"+7 Stamina"},"929":{"bonus":"+7 Stamina"},"851":{"bonus":"+5 Spirit"},"1892":{"bonus":"+100 Health"},"1893":{"bonus":"+100 Mana"},"2565":{"bonus":"+9 Spirit"},"2650":{"bonus":"+15 Spell Power"},"2613":{"bonus":"+2% Threat"},"2614":{"bonus":"+20 Shadow Spell Power"},"2615":{"bonus":"+20 Frost Spell Power"},"2616":{"bonus":"+20 Fire Spell Power"},"2617":{"bonus":"+16 Spell Power"},"910":{"bonus":"+8 Agility and +8 Dodge"},"2621":{"bonus":"2% Reduced Threat"},"3238":{"bonus":"Gatherer"},"3858":{"bonus":"+10 Critical Strike"},"4732":{"bonus":"+5 Fishing"}}';
			$dp = json_decode($d);
			
			foreach ($dp as $k=>$v) {
				echo $k . "->" . $v->bonus . "<br/>";

				$data = $this->Enchants->getEnchant($k);
				if ($data['Enchants']['id']) {
					echo "we have this enchant! <br/>";
				} else {
					echo "we need this! <br/>";
					$enchant = $this->Enchants->addEnchant($k, $v->bonus);
				}
			}
		
			exit;
			
		}
		
		function index() {
			$this->hasAdminSession();
			
			if ($this->data) {
				$this->data['Blog']['User_ID'] = $this->Session->read('userid');
				$this->data['Blog']['Blog_Date'] = time();

				$this->Blog->create();
				if ($this->Blog->save($this->data)) {
	      			$this->Session->setFlash(__('Blog entry added successfully!', true), 'flash_pos');
					$this->redirect("/admin?".$this->rand_str(10));    			
					exit;					
				} else {
	      			$this->Session->setFlash(__('Blog entry not added successfully, try again.', true), 'flash_neg');
					$this->redirect("/admin?".$this->rand_str(10));    			
					exit;					
				}
			}
			
		}
		
		function login() {
			$this->set('title_for_layout', 'Administration Login');
			if ($this->Session->read('accesslevel')) {
				$this->redirect('/');
				exit;
			}
			
			if ($this->data) {
			
				$admin = $this->Users->find('first', array('conditions' => array('Users.Username' => $this->data['Login']['username'],  'Users.Password' => $this->data['Login']['password']), 'limit' => 1, 'recursive' => 1));

				if ($admin) {
					
					if ($admin['Users']['AccessLevel'] == "99") {
						## Successful login
						$this->Session->write('username', $admin['Users']['Username']);
						$this->Session->write('userid', $admin['Users']['User_ID']);
						$this->Session->write('accesslevel', $admin['Users']['AccessLevel']);

						$this->Session->setFlash(__('Welcome back, ' . ucwords($admin['Users']['Username']) . '!', true), 'flash_pos');
						if($this->Session->check('last_page')) {
						  $redirect = $this->Session->read('last_page');
						} else {
						  $redirect = "/admin?" . $this->rand_str(10);
						}
						$this->redirect($redirect);
					} else {
		      			$this->Session->setFlash(__('Account is not priviledged, please try again.', true), 'flash_neg');
						$this->redirect("/admin/login?".$this->rand_str(10));    			
						exit;					
					}
					
				} else {
	      			$this->Session->setFlash(__('Login failed, please try again.', true), 'flash_neg');
					$this->redirect("/admin/login?".$this->rand_str(10));    			
					exit;					
				}
				
			}
			
		}	

		
		function logout() {
			$this->hasAdminSession();
			
			if($this->Session->read('userid')) {
				## Clear the session
				$this->Session->delete('userid');
				$this->Session->delete('username');
				$this->Session->delete('accesslevel');
			}
			## Return to the main page
			$this->Session->setFlash(__('You are now logged out!', true), 'flash_pos');
			$this->redirect('/admin/login');
			exit;
		}
				
		
	}
	
?>