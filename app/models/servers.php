<?
	class Servers extends AppModel {
    	var $name = 'Servers';
    	var $useTable = 'servers';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'id';
    
	    function getServers($region) {
			$i = $this->find('all', array('conditions' => array('Servers.region' => $region)));
    		return $i;
    	}    	
    	
    	function getServer($url_name, $region) {
			$i = $this->find('first', array('conditions' => array('Servers.url_name' => $url_name, 'Servers.region' => $region)));
    		return $i;
    	}
    	
	    function addServer($server_name, $url_name, $region, $server_type, $server_status, $population, $battlegroup) {

    		$server = array(
    			'server_name' => $server_name,
    			'url_name' => $url_name,	
    			'region' => $region,	
    			'server_type' => $server_type,
    			'server_status' => $server_status,
    			'population' => $population,
    			'battlegroup' => $battlegroup
   			);
    			
			$this->create();
			$this->save($server);		
			$id = $this->id;
				
    		$i = $this->find('first', array('conditions' => array('Servers.id' => $id)));
    		return $i;
    	}    	
    	

	    function updateServer($id, $server_name, $url_name, $region, $server_type, $server_status, $population, $battlegroup) {

    		$server = array(
    			'id'	=> $id,
    			'server_name' => $server_name,
    			'url_name' => $url_name,	
    			'region' => $region,	
    			'server_type' => $server_type,
    			'server_status' => $server_status,
    			'population' => $population,
    			'battlegroup' => $battlegroup
   			);
    			
			$this->save($server);		
				
    		$i = $this->find('first', array('conditions' => array('Servers.id' => $id)));
    		return $i;
    	}   
    	    	
    	
	}
?>