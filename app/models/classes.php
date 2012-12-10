<?
	class Classes extends AppModel {
    	var $name = 'Classes';
    	var $useTable = 'classes';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'Class_ID';
        
		function getById($class_id) {			
      		return $this->find('first', array('conditions' => array('Classes.Class_ID' => $class_id)));
    	}
    	
		function getByShortName($short_name) {			
      		return $this->find('first', array('conditions' => array('Classes.short_name' => $short_name)));
    	}
    	
    	function getByName($name) {
      		return $this->find('first', array('conditions' => array('Classes.Class_Name' => $name)));
    	}

    	function getByAPIID($api_id) {
      		return $this->find('first', array('conditions' => array('Classes.api_id' => $api_id)));
    	}

    	
	}
?>