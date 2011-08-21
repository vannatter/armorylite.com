<?
  
	class CommonHelper extends Helper {
		
    	function dateToWords($seconds) {
      		date_default_timezone_set("EST");
      		$new_seconds = strtotime("now") - $seconds;
      
      $days = intval(intval($new_seconds) / (3600*24));
      $hours = intval(intval($new_seconds) / 3600);
      $minutes = (intval($new_seconds) / 60) % 60;
      if($days > 0) {
        $return = ($days == 1) ? $days." day" : number_format($days, 0, ".", ",") . " days";
      } elseif($hours > 0) {
        $return = ($hours == 1) ? $hours." hour" : $hours." hours";
      } elseif($minutes > 0) {
        $return = ($minutes == 1) ? $minutes." minute" : $minutes." minutes";
      } else {
        $return = "less than a minute";
      }
      
      return "<span class=\"underline\" title=\"" . date("m-d-Y h:i:s A", $seconds) . "\">" . $return . "</span>";
    }
  }
?>