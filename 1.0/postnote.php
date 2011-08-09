<?
  include("inc/armorylite.class.php");

  $armorylite = new armorylite();

  if ($_COOKIE["armorylite_user"]) {
    $logged_in = true;
    $_username = $armorylite->crypt($_COOKIE["armorylite_user"],SALT);
    $_userid = $armorylite->get_memberid($_username);
  } else {
    $logged_in = false;
    header("location: /index.php?notloggedin");
  }
  
  if ($_POST["chid"]) {
    $_id = $armorylite->comments_add($_POST["chid"], $_userid, "", addslashes($_POST["input_notes"]), 1);
  }
  
  header("location: " . $_POST["rurl"] . "/n?" . $armorylite->rand_str(10));
?>