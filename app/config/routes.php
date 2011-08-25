<?
	Router::connect('/', array('controller' => 'home', 'action' => 'index'));
	Router::connect('/donate', array('controller' => 'home', 'action' => 'donate'));
	
	Router::connect('/us/*', array('controller' => 'profile', 'action' => 'index', 'us'));
	Router::connect('/eu/*', array('controller' => 'profile', 'action' => 'index', 'eu'));
	Router::connect('/tw/*', array('controller' => 'profile', 'action' => 'index', 'tw'));
	Router::connect('/cn/*', array('controller' => 'profile', 'action' => 'index', 'cn'));
	Router::connect('/kr/*', array('controller' => 'profile', 'action' => 'index', 'kr'));
	
?>