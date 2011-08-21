<?
	class Enchants extends AppModel {
    	var $name = 'Enchants';
    	var $useTable = 'enchants';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'id';
        
		function getEnchant($enchant_id) {
      		return $this->find('first', array('conditions' => array('Enchants.enchant_id' => $enchant_id)));
    	}
    
	    function addEnchant($enchant_id, $enchant_name) {

    		$enchant = array(
    			'enchant_id' => $enchant_id,
    			'name' => $enchant_name
   			);
    			
			$this->create();
			$this->save($enchant);		
			$id = $this->id;
				
    		$i = $this->find('first', array('conditions' => array('Enchants.id' => $id)));
    		return $i;
    	}
    	    	
	}
?>