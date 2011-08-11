<?
	class CurlComponent extends Object {
	  
		function _get($url, $binary=0, $filename=null) {
		
			$curl = curl_init();
			$last_time_accessed = 0;
      
			curl_setopt($curl, CURLOPT_URL, "http://us.battle.net" . $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
  			curl_setopt($curl, CURLOPT_TIMEOUT, 10);
			curl_setopt($curl, CURLOPT_FRESH_CONNECT, 1);
			
			date_default_timezone_set('GMT');
			$request_date = date("D, d M Y G:i:s T");
			
			$StringToSign = "GET" . "\n" . $request_date . "\n" . $url . "\n";
			
			$private_key = "ANLD58MWAAMK";
			$public_key = "87FLVUJGL1NJ";
			
			$signature = base64_encode(hash_hmac('sha1', $StringToSign, $private_key, true));
			$authorization = "BNET" . " " . $public_key . ":" . $signature;

			if ($last_time_accessed > 0) {
				$last_time_accessed = $last_time_accessed / 1000;
				curl_setopt($curl, CURLOPT_TIMECONDITION, CURL_TIMECOND_IFMODSINCE);
				curl_setopt($curl, CURLOPT_TIMEVALUE, $last_time_accessed);
			}
		
			$header = array(
				"Accept:",
				"Date: " . $request_date,
				"Authorization: " . $authorization
			); 
			curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
		
  			$f = curl_exec($curl);
  			curl_close($curl);
  			echo $f;
  		
  			exit;
  					

  		/**
			$result = curl_exec($curl);
			
			$http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
			if($http_code == 404) {
			  $result = null;
			}
			
			if($filename) {
			  fclose($file);
			}
			
			curl_close($curl);
			return $result;
**/
  					
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