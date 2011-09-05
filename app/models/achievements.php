<?
	class Achievements extends AppModel {
    	var $name = 'Achievements';
    	var $useTable = 'achievements';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'id';
        
		function getAchievement($achievement_id) {
      		return $this->find('first', array('conditions' => array('Achievements.achievement_id' => $achievement_id)));
    	}
    
	    function addAchievement($achievement_id, $name, $icon, $points, $txt, $reward) {

    		$achievement = array(
    			'achievement_id' => $achievement_id,
    			'name' => $name,
    			'points' => $points,
    			'icon' => $icon,
    			'text' => $txt,
    			'reward' => $reward
   			);
   			
			$this->create();
			$this->save($achievement);		
			$id = $this->id;
				
    		$i = $this->find('first', array('conditions' => array('Achievements.id' => $id)));
    		return $i;
    	}
    	    	
	}
?>