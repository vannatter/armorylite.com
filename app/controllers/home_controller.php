<?

	class HomeController extends AppController {
		var $name = 'Home';
//		var $uses = array('Menu');
		
		function index() {
//			$menu = $this->Menu->getRoot();
//			$this->set('menu', $menu);
//			$this->set('page_css', 'home');
//			$this->set('title_for_layout','Welcome');
		}
		
		function donate() {
			header("location: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=dustin%40vannatter%2ecom&item_name=Armorylite%2ecom&no_shipping=0&cn=Suggestions%2c%20Comments%2c%20Etc%2e&tax=0&currency_code=USD&lc=US&bn=PP%2dDonationsBF&charset=UTF%2d8");
			exit;
		}
	}
	
?>