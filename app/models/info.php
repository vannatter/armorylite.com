<?
	class Info extends AppModel {
    	var $name = 'Info';
    	var $useTable = 'info';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'id';
    
    	function getLatest($character_id) {
      		return $this->find('first', array('conditions' => array('Info.character_id' => $character_id), 'order' => array('Info.id DESC')));
    	}
    	
    	
	}
?>