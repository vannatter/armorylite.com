<?
	class ClassSpecs extends AppModel {
    	var $name = 'ClassSpecs';
    	var $useTable = 'class_specs';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'id';
        
		function getById($id) {			
      		return $this->find('first', array('conditions' => array('ClassSpecs.id' => $id)));
    	}
    	
		function getByClassID($class_id) {			
      		return $this->find('all', array('conditions' => array('ClassSpecs.class_id' => $class_id), 'order' => array('ClassSpecs.order ASC')));
    	}
    	
	}
?>