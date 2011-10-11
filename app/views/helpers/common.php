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

    
    function pager($set, $total, $cur=0, $perpage=100) {
    	
      	$tot = $total;
      	$pages = floor($tot / $perpage);
      
      	if ($cur == 0) {
        	$tmp = "1 ";
      	} else {
        	$tmp = "<a href=\"/" . $set->z . "/" . $set->r . "/" . $set->n . "/" . $set->p . "/0\">1</a> ";
      	}
      
      	for ($i = 1; $i <= $pages; $i++) {
        	if ($cur == ($perpage*$i)) {
          		$tmp .= " " . ($i+1). " ";        
        	} else {
          		$tmp .= "<a href=\"/" . $set->z . "/" . $set->r . "/" . $set->n . "/" . $set->p . "/" . ($perpage*$i) . "\">" . ($i+1) . "</a> ";
        	}
      	}
      
      	$tmp .= " (" . $tot . " Total)";
      	return $tmp;
      
    }
    
	function show_ad($loc, $typ) {
      $_t = "";
      $_id = -1;
      
      switch ($typ) {
        case "block":
          $_id     = 10;
          $_width  = 125;
          $_height = 125;
          break;

        case "tall":
          $_id     = 1; ## was 12, 1
          $_width  = 120;
          $_height = 600;
          break;

        case "tall2":
          $_id     = 11;
          $_width  = 120;
          $_height = 600;
          break;

        case "tinytall":
          $_id     = 7;
          $_width  = 120;
          $_height = 240;
          break;

        case "tallhouse":
          $_id     = 12; ## was 1, 9
          $_width  = 120;
          $_height = 600;
          break;
          
        case "tall450":
          $_id     = 8;
          $_width  = 120;
          $_height = 450;
          break;
                    
        case "wide":
          $_id     = 3; ## was 3
          $_width  = 728;
          $_height = 90;
          break;

        case "banner":
          $_id     = 4;
          $_width  = 468;
          $_height = 60;
          break;
      }
      
      $phpAds_raw = array();
      if (@include_once('/home/openx' . '/www/delivery/alocal.php')) {
        if (!isset($phpAds_context)) {
          $phpAds_context = array();
        } 
        $phpAds_raw = view_local('', $_id, 0, 0, '', '', '0', $phpAds_context, '');
      }

      $_t .= "<div class='ad ad_" . $_width . "'>";
      $_t .= @$phpAds_raw['html'];
      $_t .= "</div>";      

      echo $_t;    
      
    } 
    
  }
?>