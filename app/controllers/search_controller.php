<?

	class SearchController extends AppController {
		var $name = 'Search';
		var $uses = array('Characters');
		
		function index($region, $name) {
			$this->layout = 'corp';
			$this->set('title_for_layout','Searching ' . $name . ' in ' . $region);
		}
	}
	
?>