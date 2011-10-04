<?
  App::import('Core', 'Sanitize');
  
  class AppController extends Controller {
    var $helpers = array('Form', 'Html', 'Javascript', 'Session', 'Common');
    var $components = array('RequestHandler', 'Session');
    
    function beforeRender() {
      
    }
    
    function hasSession() {
      
    }
    
    function hasAdminSession() {
      
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
      if(is_array($arr)) {
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
    
    
    
  }
?>