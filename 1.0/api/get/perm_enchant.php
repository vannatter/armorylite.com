<?
  include("../../inc/armorylite.class.php");
  $armorylite = new armorylite(); 

  $_id  = $_GET["id"];
  $_key = $_GET["key"];
  
  $_validatekey = $armorylite->api_validatekey($_key);

  if ($_validatekey == 0) {
    header("Content-Type: application/xml; charset=ISO-8859-1"); 
    echo "<?xml version=\"1.0\"?>\n";
    echo "<error>Invalid API Key</error>\n";
  } else {
    list ($_enchantid, $_spellname, $_url) = $armorylite->enchant_getdetail($_id);
    
    if ($_enchantid) {
      header("Content-Type: application/xml; charset=ISO-8859-1"); 
      echo "<?xml version=\"1.0\"?>\n";
      echo "<enchant>\n";
      echo " <spellid>" . stripslashes($_enchantid) . "</spellid>\n";
      echo " <spellname>" . stripslashes($_spellname) . "</spellname>\n";
      echo " <wowheadurl>" . stripslashes($_url) . "</wowheadurl>\n";
      echo "</enchant>\n";
    } else {
      header("Content-Type: application/xml; charset=ISO-8859-1"); 
      echo "<?xml version=\"1.0\"?>\n";
      echo "<error>Invalid ID</error>\n";
    }
    
  }
?> 
