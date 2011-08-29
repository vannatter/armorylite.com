<?
	class Talents extends AppModel {
    	var $name = 'Talents';
    	var $useTable = 'talents';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'id';
    
    	function getTalentsByClass($class_id) {
			$i = $this->find('all', array('conditions' => array('Talents.class_id' => $class_id), 'order' => array('Talents.tree_order, Talents.talent_num', 'Talents.rank')));
    		return $i;
    	}
    	
	    function getTalentsByClassTree($class_id, $tree_id) {
			$i = $this->find('all', array('conditions' => array('Talents.class_id' => $class_id, 'Talents.tree_order' => $tree_id), 'order' => array('Talents.tree_order, Talents.talent_num', 'Talents.rank')));
    		return $i;
    	}    	
    	
	}
?>