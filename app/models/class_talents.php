<?
	class ClassTalents extends AppModel {
    	var $name = 'ClassTalents';
    	var $useTable = 'class_talents';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'id';
        
		function getById($id) {			
      		return $this->find('first', array('conditions' => array('ClassTalents.id' => $id)));
    	}
    	
		function getByClassID($class_id) {			
      		return $this->find('all', array('conditions' => array('ClassTalents.class_id' => $class_id), 'order' => array('ClassTalents.tier ASC', 'ClassTalents.column ASC')));
    	}
    	
	}
?>