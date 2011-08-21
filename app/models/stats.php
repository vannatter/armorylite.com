<?
	class Stats extends AppModel {
    	var $name = 'Stats';
    	var $useTable = 'stats';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'id';
    
    	function getStat($stat_id) {
			$i = $this->find('first', array('conditions' => array('Stats.stat_id' => $stat_id)));
    		return $i;
    	}
    	
	}
?>