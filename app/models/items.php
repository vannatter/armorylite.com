<?
	class Items extends AppModel {
    	var $name = 'Items';
    	var $useTable = 'items';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'Item_Index_ID';
    
    	function getItem($item_id) {
			$i = $this->find('first', array('conditions' => array('Items.Item_ID' => $item_id)));
    		return $i;
    	}
    	
    	function addItem($item_id, $item_name, $item_quality, $item_ilevel, $item_icon, $slot_id) {

    		$item = array(
    			'Item_ID' => $item_id,
    			'Item_Name' => $item_name,	
    			'Item_Quality' => $item_quality,	
    			'Item_iLevel' => $item_ilevel,
    			'Item_Icon' => $item_icon,
    			'Item_Slot' => $slot_id
   			);
    			
			$this->create();
			$this->save($item);		
			$id = $this->id;
				
    		$i = $this->find('first', array('conditions' => array('Items.Item_Index_ID' => $id)));
    		return $i;
    	}
    	
    	
	}
?>