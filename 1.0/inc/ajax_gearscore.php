<?
  include("armorylite.class.php");
  
  $_chid = strtolower(stripslashes($_GET["chid"]));
  $_anon = strtolower(stripslashes($_GET["anon"]));
  $_arch = strtolower(stripslashes($_GET["arc"]));
  $tmp = "";
  
  $armorylite = new armorylite();
  
  if ($_anon == "y") {
    $_chid = $armorylite->crypt($_chid, SALT);
  }

  if ($_arch == "y") {
    echo "--";
    exit;
  }
    
  list ($score, $prev_score) = $armorylite->get_gear_score($_chid, $_t);
  $cinfo = $armorylite->get_characterinfo($_chid);
  if (($cinfo["Toon"] == "zoinkz") && ($cinfo["Server"] = "kargath")) { $score += 9000; }
  
  if ($score) {
    if ($_anon == "y") {
      $lnk = "<a href=\"#\">";    
    } else {
      $_z = strtolower($cinfo["Region"]);
      $_r = strtolower($cinfo["Server"]);
      $lnk = "<a href=\"/score/" . $_z . "/" . strtolower(urlencode(stripslashes($_r))) . "/\">";
    }

    $_qual = $armorylite->gearscore_color($score);
    echo "<span class=qual_" . $_qual . ">" . $lnk . $score . "</a></span>";

  } else {
    echo "??";
  }
?>
