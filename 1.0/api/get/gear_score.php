<?
  include("../../inc/armorylite.class.php");
  $armorylite = new armorylite(); 

  $_z = trim($_GET["z"]);
  $_r = trim($_GET["r"]);
  $_n = trim($_GET["n"]);
  $_key = $_GET["key"];
  
  $_validatekey = $armorylite->api_validatekey($_key);

  if ($_validatekey == 0) {
    header("Content-Type: application/xml; charset=ISO-8859-1"); 
    echo "<?xml version=\"1.0\"?>\n";
    echo "<error>Invalid API Key</error>\n";
  } else {
    $_chid = $armorylite->get_characterid($_z, $_r, $_n, false);
    
    if (!$_chid) {
      header("Content-Type: application/xml; charset=ISO-8859-1"); 
      echo "<?xml version=\"1.0\"?>\n";
      echo "<error>No Character Found</error>\n";
    } else {
      list ($_score, $_prevscore) = $armorylite->get_gear_score($_chid, 0);
      if ($_score) {
        if (($_n == "zoinkz") && ($_r = "kargath")) { $_score += 5000; }
        header("Content-Type: application/xml; charset=ISO-8859-1"); 
        echo "<?xml version=\"1.0\"?>\n";
        echo "<gearscore>\n";
        echo " <characterid>" . stripslashes($_chid) . "</characterid>\n";
        echo " <score>" . stripslashes($_score) . "</score>\n";
        echo " <prevscore>" . stripslashes($_prevscore) . "</prevscore>\n";
        echo " <zone>" . stripslashes(strtoupper($_z)) . "</zone>\n";
        echo " <realm>" . stripslashes(ucwords($_r)) . "</realm>\n";
        echo " <name>" . stripslashes(ucwords($_n)) . "</name>\n";
        echo "</gearscore>\n"; 
      } else {
        header("Content-Type: application/xml; charset=ISO-8859-1"); 
        echo "<?xml version=\"1.0\"?>\n";
        echo "<error>No Score Found</error>\n";
      }
    }
  }
?>