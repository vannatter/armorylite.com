<?
	Router::connect('/', array('controller' => 'home', 'action' => 'index'));
	Router::connect('/donate', array('controller' => 'home', 'action' => 'donate'));
	
	Router::connect('/us/*', array('controller' => 'profile', 'action' => 'index', 'us'));
	Router::connect('/eu/*', array('controller' => 'profile', 'action' => 'index', 'eu'));
?>