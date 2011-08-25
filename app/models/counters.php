<?
	class Counters extends AppModel {
    	var $name = 'Counters';
    	var $useTable = 'counters';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'Counter_ID';
    
    	function getCounter($character_id) {
			$i = $this->find('first', array('conditions' => array('Counters.Character_ID' => $character_id)));
    		return $i['Counters']['Count_Value'];
    	}
    	
    	function setCounter($character_id) {
			$i = $this->find('first', array('conditions' => array('Counters.Character_ID' => $character_id)));

			if ($i['Counters']['Count_Value']) {
				$new = $i['Counters']['Count_Value']+1;
				$this->id = $i['Counters']['Counter_ID'];
				$this->saveField('Count_Value', $new);
				return $new;
			} else {
	    		$counter = array(
	    			'Character_ID' => $character_id,
	    			'Count_Value' => 1
	   			);
				$this->create();
				$this->save($counter);		
				$id = $this->id;
	    		return 1;
			}
    	}
    	
	}
?>