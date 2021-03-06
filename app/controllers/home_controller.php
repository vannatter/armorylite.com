<?php

	class HomeController extends AppController {
		var $name = 'Home';
		var $uses = array('Blog', 'Servers', 'Characters');
		
		function index() {
			$this->layout = 'corp';
			$this->set('title_for_layout','Information, Simplified.');
			$this->set('blog', $this->Blog->getLatest(10));
		}
		
		function about() {
			$this->layout = 'corp';
			$this->set('title_for_layout','About');
		}
		
		function advertise() {
			$this->layout = 'corp';
			$this->set('title_for_layout','Advertise');
		}		
		
		function donate() {
			$this->layout = 'corp';
			$this->set('title_for_layout','Donate');
		}		
		
		function search() {
			$this->layout = 'corp';
			$this->set('title_for_layout','Search');
		}	

		function browse() {
			$this->layout = 'corp';
			$this->set('title_for_layout', 'Browse');
			$servers = $this->Servers->find('all', array('conditions' => array('Servers.id >' => 0), 'order' => array('Servers.region DESC', 'Servers.server_name ASC')));
			$this->set('servers', $servers);			
		}
				
		function donate_redirect() {
			header("location: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=dustin%40vannatter%2ecom&item_name=Armorylite%2ecom&no_shipping=0&cn=Suggestions%2c%20Comments%2c%20Etc%2e&tax=0&currency_code=USD&lc=US&bn=PP%2dDonationsBF&charset=UTF%2d8");
			exit;
		}
		
		function ajax_getmax() {
			$max = $this->Characters->getMax();
			echo number_format($max[0]['max_character'], 0, "", ",");
			exit;
		}
	}
	
?>