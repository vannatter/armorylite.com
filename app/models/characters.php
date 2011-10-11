<?
	class Characters extends AppModel {
    	var $name = 'Characters';
    	var $useTable = 'characters';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'Character_ID';
        
		function getById($character_id) {			
      		return $this->find('first', array('conditions' => array('Characters.Character_ID' => $character_id)));
    	}
    	
    	function getByPath($region, $realm, $toon) {
      		return $this->find('first', array('conditions' => array('Characters.Region' => $region, 'Characters.Server' => $realm, 'Characters.Toon' => $toon)));
    	}
    	
	    function browse($region, $realm, $sort="Toon ASC", $start=0, $length=100) {
      		return $this->find('all', array('conditions' => array('Characters.Region' => $region, 'Characters.Server' => $realm), 'limit' => $start.','.$length, 'order' => array('Characters.'.$sort, 'Characters.Toon ASC')));
    	}    	
    	
	    function count($region, $realm) {
      		return $this->find('count', array('conditions' => array('Characters.Region' => $region, 'Characters.Server' => $realm)));
    	}    	    
    	
	}
?>