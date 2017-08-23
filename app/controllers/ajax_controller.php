<?php

	class AjaxController extends AppController {
		var $name = 'Ajax';
		var $uses = array('Servers');
		
		function getServers($region) {
			$servers = $this->Servers->getServers($region);
			echo json_encode($servers);				
			exit;
		}		
		
	}
	
?>