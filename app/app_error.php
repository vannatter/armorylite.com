<?php

class AppError extends ErrorHandler { 

	function e404($params) {
		$this->controller->set($params);
		$this->_outputMessage("e404");
	}	
	
	function e503($params) {
		$this->controller->set($params);
		$this->_outputMessage("e503");
	}	
	
	function e500($params) {
		$this->controller->set($params);
		$this->_outputMessage("e500");
	}	
	
} 

?> 