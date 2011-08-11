<?

	class ToolsController extends AppController {
		var $name = 'Tools';
		var $uses = array('Home');
		var $helpers = array('Common');
		var $components = array('Curl');
		
		protected $debug = false;
		
		function beforeFilter() {
		  parent::beforeFilter();
		}
		
		function test() {
//			$menu = $this->Menu->getRoot();
//			$this->set('menu', $menu);
//			$this->set('page_css', 'home');
//			$this->set('title_for_layout','Welcome');

			$url = "/api/wow/character/kargath/dovoso";
			$this->Curl->_get($url);
			
			echo "test";
			exit;
			
		}
	}
	
?>