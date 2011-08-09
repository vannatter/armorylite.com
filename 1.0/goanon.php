<?
  include("inc/armorylite.class.php");
  $armorylite = new armorylite();

  $_i = $_GET["i"];
  $_p = $_GET["p"];
  
  list ($z, $r, $n) = $armorylite->anon_getcharacterinfo($);  

  echo "i->" . $_i . "<br>";
  echo "p->" . $_p . "<br>";
?>
