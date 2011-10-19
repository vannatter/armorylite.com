<?
	class Anons extends AppModel {
    	var $name = 'Anons';
    	var $useTable = 'anons';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'id';
    	
    	function getCharacter($anon_id) {
    		$anon = $this->find('first', array('conditions' => array('Anons.id' => $anon_id)));
			if ($anon['Anons']['id']) {
    			return $anon['Anons']['character_id'];
			} else {
				return 0;	
			}
    	}
    	    	
    	function anonymize($character_id) {
    		$anon = $this->find('first', array('conditions' => array('Anons.character_id' => $character_id)));
			if ($anon['Anons']['id']) {
				return $anon['Anons']['id'];
			} else {
	    		$a = array(
	    			'character_id' => $character_id
	   			);
				$this->create();
				$this->save($a);		
				$id = $this->id;
				return $id;
			}
    	}
    	
	}
?>