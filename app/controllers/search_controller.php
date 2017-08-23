<?php

	class SearchController extends AppController {
		var $name = 'Search';
		var $uses = array('Characters', 'Servers');
    	var $helpers = array('Profile');
		
		function index($region, $name) {
			$this->layout = 'corp';
			$this->set('title_for_layout','Searching ' . $name . ' in ' . $region);
			$this->set('name', $name);
			$this->set('region', $region);

			if ($region == "all") {
				$searches = $this->Characters->find('all', array('conditions' => array('Characters.Toon LIKE' => '%'.$name.'%'), 'limit' => 100));
			} else {
				$searches = $this->Characters->find('all', array('conditions' => array('Characters.Region' => $region, 'Characters.Toon LIKE' => '%'.$name.'%'), 'limit' => 100));
			}
			
			for ($i=0; $i < count($searches); $i++) {
				$server = $this->Servers->getServer($searches[$i]['Characters']['Server'], $searches[$i]['Characters']['Region']);				
				$searches[$i]['Characters']['friendly_server_name'] = $server['Servers']['server_name'];
			}
			
			$this->set('searches', $searches);
			      		
		}
	}
	
?>