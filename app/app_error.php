<?

class AppError extends ErrorHandler { 

	function e404($params) {
		header("HTTP/1.x 404 Not Found");
		$this->controller->set($params);
		$this->_outputMessage("e404");
	}	
	
	function e503($params) {
		header("HTTP/1.x 503 Service Unavailable");
		$this->controller->set($params);
		$this->_outputMessage("e503");
	}	
	
	function e500($params) {
		header("HTTP/1.x 500 Internal Server Error");
		$this->controller->set($params);
		$this->_outputMessage("e500");
	}	
	
} 

?> 