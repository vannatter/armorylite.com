<?
  ##############################################################
  ### armorylite parsing mirror ################################
  ##############################################################
  
  class armorylite_mirror {
    var $version;

    function armorylite_mirror() {
      $this->version = "5";
    }
    
    function get_xml($url) {
      $headers[0] = "Accept: text/xml,application/xml,application/xhtml+xml,";
      $headers[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
      $headers[] = "Cache-Control: max-age=0";
      $headers[] = "Connection: keep-alive";
      $headers[] = "Keep-Alive: 300";
      $headers[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
      $headers[] = "Accept-Language: en-us,en;q=0.5";
      $headers[] = "Pragma: ";        

      $handle = curl_init();
      curl_setopt($handle, CURLOPT_URL, $url);
      curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($handle, CURLOPT_REFERER, 'http://www.worldofwarcraft.com');
      curl_setopt($handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($handle, CURLOPT_ENCODING, 'gzip,deflate');
      curl_setopt($handle, CURLOPT_AUTOREFERER, true);
      curl_setopt($handle, CURLOPT_TIMEOUT, 5);
      curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
      curl_setopt($handle, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6');
      curl_setopt($handle, CURLOPT_HEADER, 0);

      if (($content = curl_exec($handle)) === false) {
        $_loc = strrpos($url, "armory.worldofwarcraft.com");
        if ($_loc === false) { 
          $_newurl = str_replace("www.wowarmory.com","armory.worldofwarcraft.com",$url);
          curl_close($handle);
          return $this->get_xml($_newurl);
        } else { 
          return array (0, null);
        }
      } else {
        curl_close($handle);
        return array (100, stripslashes($content));
      }
    }
    
  }
?>
