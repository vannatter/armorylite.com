<?
  include("inc/armorylite.class.php");

  $armorylite = new armorylite();
  $armorylite_admin = new armorylite_admin();
  $rec = $armorylite_admin->get_characterqueue(10);

  while ($dat = $armorylite->db->fetch_array($rec)) {
	$url = "http://armorylite.com/" . $dat["Region"] . "/" . $dat["Server"] . "/" . $dat["Toon"] . "/";
    $hand = curl_init();
    curl_setopt($hand, CURLOPT_URL, $url);
    curl_setopt($hand, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($hand, CURLOPT_TIMEOUT, 15);
    curl_setopt($hand, CURLOPT_CONNECTTIMEOUT, 15);
    curl_setopt($hand, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6');
    curl_setopt($hand, CURLOPT_HEADER, 0);

    if (($content = curl_exec($hand)) === false) {
      echo "no response on url -> " . $url . "<br>";
    } else {
      echo "successfully spidered url -> " . $url . " .. starting /g .. <br>";

      $url2 = "http://armorylite.com/" . $dat["Region"] . "/" . $dat["Server"] . "/" . $dat["Toon"] . "/g/";
      $hand2 = curl_init();
      curl_setopt($hand2, CURLOPT_URL, $url2);
      curl_setopt($hand2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($hand2, CURLOPT_TIMEOUT, 15);
      curl_setopt($hand2, CURLOPT_CONNECTTIMEOUT, 15);
      curl_setopt($hand2, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6');
      curl_setopt($hand2, CURLOPT_HEADER, 0);
  
      if (($content2 = curl_exec($hand2)) === false) {
        echo "no response on guild url -> " . $url2 . "<br><br>";
        $armorylite_admin->set_characterqueued($dat["Character_ID"]);
      } else {
        echo "successfully spidered guild url -> " . $url2 . "<br><br>";
        $armorylite_admin->set_characterqueued($dat["Character_ID"]);
      }
    }
    sleep(2);
  }
?>
