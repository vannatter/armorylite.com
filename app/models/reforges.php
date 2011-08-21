<?
	class Reforges extends AppModel {
    	var $name = 'Reforges';
    	var $useTable = 'reforges';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'id';
    
    	function getReforge($reforge_id) {
			$i = $this->find('first', array('conditions' => array('Reforges.reforge_id' => $reforge_id)));
    		return $i;
    	}
    	
	}
?>