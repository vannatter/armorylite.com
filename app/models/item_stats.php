<?
	class ItemStats extends AppModel {
    	var $name = 'ItemStats';
    	var $useTable = 'item_stats';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'id';
    
    	function getItemStat($item_id) {
			$i = $this->find('first', array('conditions' => array('ItemStats.item_id' => $item_id)));
    		return $i;
    	}
    	
    	function getItemStats($item_id) {
			$i = $this->find('all', array('conditions' => array('ItemStats.item_id' => $item_id)));
    		return $i;
    	}
    	
    	function getItemStatByType($item_id, $stat_id) {
			$i = $this->find('first', array('conditions' => array('ItemStats.item_id' => $item_id, 'ItemStats.stat_id' => $stat_id)));
    		return $i;
    	}
    	
    	function addItemStat($item_id, $stat_id, $amount) {

    		$item_stat = array(
    			'item_id' => $item_id,
    			'stat_id' => $stat_id,	
    			'amount' => $amount
   			);
    			
			$this->create();
			$this->save($item_stat);		
			$id = $this->id;
				
    		$i = $this->find('first', array('conditions' => array('ItemStats.id' => $id)));
    		return $i;
    	}
    	
    	
	}
?>