<?
  include("inc/armorylite.class.php");

  $GLOBALS["main_container"] = "armorylite_wide";
  $armorylite = new armorylite();

  if ($_COOKIE["armorylite_user"]) {
    $logged_in = true;
    $_username = $armorylite->crypt($_COOKIE["armorylite_user"],SALT);
    $_memberid = $armorylite->get_memberid($_username);
  } else {
    $logged_in = false;
    header("location: /index.php?notloggedin");
  }
  
  $_claimid = $_GET["cid"];

  $armorylite->claim_delete($_claimid, $_memberid);
  header("location: /my_characters.php?" . $armorylite->rand_str(10));
?>
