<?
	class ClassGlyphs extends AppModel {
    	var $name = 'ClassGlyphs';
    	var $useTable = 'class_glyphs';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'id';
        
		function getById($id) {			
      		return $this->find('first', array('conditions' => array('ClassGlyphs.id' => $id)));
    	}
    	
		function getByClassID($class_id) {			
      		return $this->find('all', array('conditions' => array('ClassGlyphs.class_id' => $class_id)));
    	}

		function getByGlyphID($glyph_id) {			
      		return $this->find('all', array('conditions' => array('ClassGlyphs.glyph_id' => $glyph_id)));
    	}
    	
	}
?>