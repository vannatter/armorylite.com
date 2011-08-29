<?
	class TalentTrees extends AppModel {
    	var $name = 'TalentTrees';
    	var $useTable = 'talent_trees';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'id';
    
    	function getTalentTreesByClass($class_id) {
			$i = $this->find('all', array('conditions' => array('TalentTrees.class_id' => $class_id), 'order' => array('TalentTrees.tree_num')));
    		return $i;
    	}
    	
	    function getTreeByName($class_id, $tree_name) {
			$i = $this->find('first', array('conditions' => array('TalentTrees.class_id' => $class_id, 'TalentTrees.tree' => $tree_name), 'order' => array('TalentTrees.tree_num')));
    		return $i;
    	}    	
    	
	}
?>