<?

	class AdminController extends AppController {
		var $name = 'Admin';
		var $uses = array('Servers', 'Users', 'Blog', 'Enchants');
		
	    function beforeFilter() {
      		parent::beforeFilter();
      		$this->layout = "admin";
    	}		
		
		function index() {
			$this->hasAdminSession();
			
			if ($this->data) {
				$this->data['Blog']['User_ID'] = $this->Session->read('userid');
				$this->data['Blog']['Blog_Date'] = time();

				$this->Blog->create();
				if ($this->Blog->save($this->data)) {
					$this->Session->setFlash(__('Blog entry added successfully!', true), 'flash_pos');
					$this->redirect("/admin?".$this->rand_str(10));    			
					exit;					
				} else {
					$this->Session->setFlash(__('Blog entry not added successfully, try again.', true), 'flash_neg');
					$this->redirect("/admin?".$this->rand_str(10));    			
					exit;					
				}
			}
		}
		
		function login() {
			$this->set('title_for_layout', 'Administration Login');
			if ($this->Session->read('accesslevel')) {
				$this->redirect('/');
				exit;
			}
			
			if ($this->data) {
			
				$admin = $this->Users->find('first', array('conditions' => array('Users.Username' => $this->data['Login']['username'],  'Users.Password' => $this->data['Login']['password']), 'limit' => 1, 'recursive' => 1));

				if ($admin) {
					
					if ($admin['Users']['AccessLevel'] == "99") {
						## Successful login
						$this->Session->write('username', $admin['Users']['Username']);
						$this->Session->write('userid', $admin['Users']['User_ID']);
						$this->Session->write('accesslevel', $admin['Users']['AccessLevel']);

						$this->Session->setFlash(__('Welcome back, ' . ucwords($admin['Users']['Username']) . '!', true), 'flash_pos');
						if($this->Session->check('last_page')) {
						  $redirect = $this->Session->read('last_page');
						} else {
						  $redirect = "/admin?" . $this->rand_str(10);
						}
						$this->redirect($redirect);
					} else {
		      			$this->Session->setFlash(__('Account is not priviledged, please try again.', true), 'flash_neg');
						$this->redirect("/admin/login?".$this->rand_str(10));    			
						exit;					
					}
					
				} else {
	      			$this->Session->setFlash(__('Login failed, please try again.', true), 'flash_neg');
					$this->redirect("/admin/login?".$this->rand_str(10));    			
					exit;					
				}
				
			}
			
		}	

		
		function logout() {
			$this->hasAdminSession();
			
			if($this->Session->read('userid')) {
				## Clear the session
				$this->Session->delete('userid');
				$this->Session->delete('username');
				$this->Session->delete('accesslevel');
			}
			## Return to the main page
			$this->Session->setFlash(__('You are now logged out!', true), 'flash_pos');
			$this->redirect('/admin/login');
			exit;
		}
				
		
	}
	
?>