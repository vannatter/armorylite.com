<?
	class Blog extends AppModel {
    	var $name = 'Blog';
    	var $useTable = 'blog';
    	var $useDbConfig = 'default';
    	var $primaryKey = 'Blog_ID';
		var $belongsTo = array(
      		'Users' => array(
	        'className' => 'Users',
	        'foreignKey' => 'User_ID'
      	));
      
    	function getLatest($limit=20) {
      		return $this->find('all', array('conditions' => array('Blog.Blog_ID >' => 0), 'limit' => $limit, 'order' => array('Blog.Blog_Date DESC')));
    	}
    	
	}
?>