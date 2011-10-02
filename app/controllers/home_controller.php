<?

	class HomeController extends AppController {
		var $name = 'Home';
		var $uses = array('Blog', 'Servers');
		
		function index() {
			$this->layout = 'corp';
			$this->set('title_for_layout','Information, Simplified.');
			$this->set('blog', $this->Blog->getLatest(10));
		}
		
		function about() {
			$this->layout = 'corp';
			$this->set('title_for_layout','Information, Simplified.');
		}
		
		function donate() {
			header("location: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=dustin%40vannatter%2ecom&item_name=Armorylite%2ecom&no_shipping=0&cn=Suggestions%2c%20Comments%2c%20Etc%2e&tax=0&currency_code=USD&lc=US&bn=PP%2dDonationsBF&charset=UTF%2d8");
			exit;
		}
	}
	
?>