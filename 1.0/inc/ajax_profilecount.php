<?
  include("armorylite.class.php");

  $armorylite = new armorylite();
  $cache_count = $armorylite->get_cachecount();

  if ($cache_count) {
    echo "" . number_format($cache_count) . " profiles cached!";
  } else {
    echo "?? profiles cached!";
  }
?>
