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
    list ($_suffixid, $_suffixname) = $armorylite->itemsuffix_getdetail($_id);
    
    if ($_suffixid) {
      header("Content-Type: application/xml; charset=ISO-8859-1"); 
      echo "<?xml version=\"1.0\"?>\n";
      echo "<suffix>\n";
      echo " <suffixid>" . stripslashes($_suffixid) . "</suffixid>\n";
      echo " <suffixname>" . stripslashes($_suffixname) . "</suffixname>\n";
      echo "</suffix>\n";
    } else {
      header("Content-Type: application/xml; charset=ISO-8859-1"); 
      echo "<?xml version=\"1.0\"?>\n";
      echo "<error>Invalid ID</error>\n";
    }
    
  }
?> 
