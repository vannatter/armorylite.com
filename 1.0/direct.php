<?
  include("inc/parse.php");
  include("inc/armorylite.class.php");
  $_p = split(" ", $_GET["q"]);
  
  $_c = $_p[0];
  $_s = $_p[1];
  $_z = $_p[2];

  $armorylite = new armorylite();

  if (!$_c) {
    $armorylite->print_header_info("Search '" . ucwords(stripslashes($_r)) . "' in '" . strtoupper($_z) . "'");
    echo "<center>Invalid directlink parameters. Need at least Character (0) and Server (1).<br>";
    $armorylite->print_footer_info();
    exit;
  }
  if (!$_s) {
    $_s = "kargath";
  }
  if (!$_z) {
    $_z = "us";
  }
  header("location: http://armorylite.com/" . $_z . "/" . $_s . "/" . $_c);
?>
