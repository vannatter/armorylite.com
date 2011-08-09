<?
  ##############################################################
  ### armorylite parsing mirror ################################
  ##############################################################
  
  ## this handles incoming requests and attempts to parse them 
  ## and dump the raw data when available..

  include("armorylite_mirror.class.php");
  $armorylite = new armorylite_mirror();

  $_z = $_GET["z"];
  $_r = $_GET["r"];
  $_n = $_GET["n"];
  $_v = $_GET["v"];
  $_t = $_GET["t"];
  $_x = $_GET["x"];

  switch (strtolower($_z)) {
    case "us":
      $_zone_url = "http://www.wowarmory.com";
      break;
    case "eu":
      $_zone_url = "http://eu.wowarmory.com";
      break;
    case "tw":
      $_zone_url = "http://tw.wowarmory.com";
      break;
    case "kr":
      $_zone_url = "http://kr.wowarmory.com";
      break;
    case "cn":
      $_zone_url = "http://cn.wowarmory.com";
      break;
  }

  switch (strtolower($_t)) {
    case "1":
      $_full_url = $_zone_url . "/character-sheet.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      break;
    case "2":
      $_full_url = $_zone_url . "/character-talents.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      break;
    case "3":
      $_full_url = $_zone_url . "/character-reputation.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      break;
    case "4":
      $_full_url = $_zone_url . "/character-skills.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      break;
    case "5":
      $_full_url = $_zone_url . "/guild-info.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n))) . "&p=1";
      break;
    case "6":
      $_full_url = $_zone_url . "/character-arenateams.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n))) . "&p=1";
      break;
    case "7":
      $_full_url = $_zone_url . "/search.xml?searchQuery=" . strtolower(urlencode(stripslashes($_r))) . "&searchType=" . strtolower(urlencode(stripslashes($_n)));
      break;
    case "8":
      if ($_x) {
        $_full_url = $_zone_url . "/character-statistics.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n))) . "&c=" . strtolower(urlencode(stripslashes($_x)));
      } else {
        $_full_url = $_zone_url . "/character-statistics.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      }
      break;
    case "9":
      if ($_x) {
        $_full_url = $_zone_url . "/character-achievements.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n))) . "&c=" . strtolower(urlencode(stripslashes($_x)));
      } else {
        $_full_url = $_zone_url . "/character-achievements.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      }
      break;
    case "10":
      $_full_url = $_zone_url . "/" . strtolower(stripslashes($_p)) . "?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n))) . strtolower(urlencode(stripslashes($_x)));
      break;
  }

  if ($_v == $armorylite->version) {
    list ($_code, $_data) = $armorylite->get_xml($_full_url);
    if ($_code == 100) {
      echo $_data;
    } 
  }
?>

