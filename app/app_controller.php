<?php
	App::import('Core', 'Sanitize');
  
	class AppController extends Controller {
    	var $helpers = array('Form', 'Html', 'Javascript', 'Session', 'Common');
    	var $components = array('RequestHandler', 'Session');
    
		function beforeRender() {
		}
    
    	function hasSession() {
		}
    
    	function hasAdminSession() {
      
			$accesslevel = $this->Session->read('accesslevel');
			
			if (!$accesslevel) {
				$this->Session->setFlash(__('Administrator Authorization Required', true), 'flash_neg');
				$this->redirect('/admin/login');
				exit();
			} else {
				if ($accesslevel < 50) {				
					$this->Session->setFlash(__('User does not have permission to access this area', true), 'flash_neg');
					$this->redirect('/');
					exit();
				}
			}
    	}
    
		function rand_str($len=10) {
      		$chars = "abcdefghijkmnopqrstuvwxyz023456789";
      		srand((double)microtime()*1000000);
      		$i = 0;
      		$pass = "";
      		while ($i <= $len) {
        		$num = rand() % 33;
        		$tmp = substr($chars, $num, 1);
        		$pass = $pass . $tmp;
        		$i++;
      		}
      		return $pass;
    	}
    
    	function spitArray($arr) {
      		if (is_array($arr)) {
        		echo "<pre>";
        		print_r($arr);
        		echo "</pre>";
      		} else {
        		echo $arr;
      		}
      		exit;
    	}
    
    	function scrubRealm($realm) {
	    	$tmp = $realm;
	    	$tmp = strtolower(trim($tmp));
	    	$tmp = str_replace(" ", "-", $tmp);
	    	$tmp = str_replace("'", "", $tmp);
	    	return $tmp;
    	}
    
    	function scrubToon($toon) {
    		$tmp = $toon;
    		$tmp = strtolower(trim($tmp));
    		return $tmp;
    	}
    
		function indent($json) {
		
		    $result      = '';
		    $pos         = 0;
		    $strLen      = strlen($json);
		    $indentStr   = '  ';
		    $newLine     = "\n";
		    $prevChar    = '';
		    $outOfQuotes = true;
		
		    for ($i=0; $i<=$strLen; $i++) {
		
		        // Grab the next character in the string.
		        $char = substr($json, $i, 1);
		
		        // Are we inside a quoted string?
		        if ($char == '"' && $prevChar != '\\') {
		            $outOfQuotes = !$outOfQuotes;
		        
		        // If this character is the end of an element, 
		        // output a new line and indent the next line.
		        } else if(($char == '}' || $char == ']') && $outOfQuotes) {
		            $result .= $newLine;
		            $pos --;
		            for ($j=0; $j<$pos; $j++) {
		                $result .= $indentStr;
		            }
		        }
		        
		        // Add the character to the result string.
		        $result .= $char;
		
		        // If the last character was the beginning of an element, 
		        // output a new line and indent the next line.
		        if (($char == ',' || $char == '{' || $char == '[') && $outOfQuotes) {
		            $result .= $newLine;
		            if ($char == '{' || $char == '[') {
		                $pos ++;
		            }
		            
		            for ($j = 0; $j < $pos; $j++) {
		                $result .= $indentStr;
		            }
		        }
		        
		        $prevChar = $char;
		    }
		
		    return $result;
		}    
    
	}
?>