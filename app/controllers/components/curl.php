<?
	class CurlComponent extends Object {
	  
		function getRAW($url) {
			$curl = curl_init();
      
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
  			curl_setopt($curl, CURLOPT_TIMEOUT, 10);
			curl_setopt($curl, CURLOPT_FRESH_CONNECT, 1);
			
  			$f = curl_exec($curl);
			$i = curl_getinfo($curl);
  			
  			curl_close($curl);	

  			return array($f, $i);
		}
		
		function getBNET($url, $last_time_accessed=0) {
		
			$url_parts = parse_url($url);
			$curl = curl_init();
      
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
  			curl_setopt($curl, CURLOPT_TIMEOUT, 10);
			curl_setopt($curl, CURLOPT_FRESH_CONNECT, 1);
			
			date_default_timezone_set('GMT');
			$request_date = date(DATE_RFC2822);
			
			$StringToSign = "GET" . "\n" . $request_date . "\n" . $url_parts['path'] . "\n";
			
			$private_key = Configure::read('Settings.API.private');
			$public_key = Configure::read('Settings.API.public');
			
			$signature = base64_encode(hash_hmac('sha1', $StringToSign, $private_key, true));
			$authorization = "BNET" . " " . $public_key . ":" . $signature;
			
			if ($last_time_accessed > 0) {
				curl_setopt($curl, CURLOPT_TIMECONDITION, CURL_TIMECOND_IFMODSINCE);
				curl_setopt($curl, CURLOPT_TIMEVALUE, $last_time_accessed);
			}
		
			$header = array (
				"Date: " . $request_date,
				"Authorization: " . $authorization
			); 
			curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
		
  			$f = curl_exec($curl);
			$i = curl_getinfo($curl);
  			
  			curl_close($curl);
  			
  			return array($f, $i);
		}
		
		
	    function getIcon($icon_name) {
      		if (trim($icon_name) == "") {
        		$icon_name = "INV_Misc_QuestionMark";      
      		}
    
      		$local_path = Configure::read('Settings.icon_path') . strtolower($icon_name).".jpg";
      		$web_path   = Configure::read('Settings.icon_web_path') . strtolower($icon_name).".jpg";

      		if (file_exists($local_path)) {
        		return $web_path;        
      		} else {
//        		$wowhead_img = "http://static.wowhead.com/images/wow/icons/medium/" . strtolower($icon_name) . ".jpg";
        		$bnet_img = "http://us.media.blizzard.com/wow/icons/36/" . strtolower($icon_name) . ".jpg";
        
        		$ch = curl_init();
		        curl_setopt ($ch, CURLOPT_URL, $bnet_img);
		        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 0);
		        $fc = curl_exec($ch);
		        curl_close($ch);
    
		        $new_img = @imagecreatefromstring($fc);
		        @imagejpeg($new_img, $local_path, 100);
		        return $web_path;
      		}       
    	}		
    	
    	
	    function getEnchant($enchant_id) {
	    	$url = "http://db.mmo-champion.com/e/" . $enchant_id;
	    	$ch = curl_init();
	    	curl_setopt ($ch, CURLOPT_URL, $url);
	    	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	    	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 0);
	    	$fc = curl_exec($ch);
	    	curl_close($ch);

			preg_match_all('/<h1>(.*)<\/h1>/', $fc, $matches);
	    	$match = @$matches[0][1];
	    	
	    	if ($match) {
	    		$clean_enchant = strip_tags($match);
	    		return $clean_enchant;
	    	} else {
	    		return "";
	    	}
    	}	    	
		
		
		function getBNETprefix($region) {
			$url = "";
			
			switch ($region) {
				case "us":
					$url = "http://us.battle.net";
					break;

				case "eu":
					$url = "http://eu.battle.net";
					break;
					
				case "kr":
					$url = "http://kr.battle.net";
					break;
					
				case "tw":
					$url = "http://tw.battle.net";
					break;

				case "cn":
					$url = "http://battlenet.com.cn";
					break;
					
				default:
					$url = "http://us.battle.net";
					break;
			}
			
			return $url;
		}		
		
		
		function _getUniqueName() {
			$chars = "abcdefghijkmnopqrstuvwxyz023456789";
			srand((double)microtime()*1000000);
			$i = 0;
			$pass = "";
			while ($i <= 24) {
				$num = rand() % 33;
				$tmp = substr($chars, $num, 1);
				$pass = $pass . $tmp;
				$i++;
			}
			return $pass;
		}
	}
?>