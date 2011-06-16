<?
  include("inc/armorylite.class.php");

  $armorylite = new armorylite();
  $armorylite_admin = new armorylite_admin();
  $rec = $armorylite_admin->clean_items();

  echo $rec;
?>
