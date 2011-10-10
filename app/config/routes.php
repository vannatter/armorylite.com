<?
	Router::connect('/', array('controller' => 'home', 'action' => 'index'));
	Router::connect('/about.php', array('controller' => 'home', 'action' => 'about'));
	Router::connect('/advertise.php', array('controller' => 'home', 'action' => 'advertise'));
	Router::connect('/donate.php', array('controller' => 'home', 'action' => 'donate'));
	Router::connect('/dosearch.php', array('controller' => 'home', 'action' => 'search'));
	Router::connect('/donate', array('controller' => 'home', 'action' => 'donate_redirect'));
	Router::connect('/dobrowse.php', array('controller' => 'home', 'action' => 'browse'));
	
	Router::connect('/search/*', array('controller' => 'search', 'action' => 'index'));
	
	Router::connect('/us/*', array('controller' => 'profile', 'action' => 'index', 'us'));
	Router::connect('/eu/*', array('controller' => 'profile', 'action' => 'index', 'eu'));
	Router::connect('/tw/*', array('controller' => 'profile', 'action' => 'index', 'tw'));
	Router::connect('/cn/*', array('controller' => 'profile', 'action' => 'index', 'cn'));
	Router::connect('/kr/*', array('controller' => 'profile', 'action' => 'index', 'kr'));
?>