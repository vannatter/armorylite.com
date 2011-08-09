<?
  include("inc/armorylite.class.php");
  $armorylite = new armorylite();

  if ($_COOKIE["armorylite_user"]) {
    $logged_in = true;
    $_username = $armorylite->crypt($_COOKIE["armorylite_user"],SALT);
    $_memberid = $armorylite->get_memberid($_username);
  } else {
    $logged_in = false;
    header("location: /index.php?notloggedin");
  }

  $_act = $_POST["act"];
  if (!$_act) { $_act = $_GET["act"]; }
  if (!$_act) { die('No action found.'); }

  switch($_act) {
    
    case "delsp":
      $armorylite->data_saved_delete($_GET["id"], $_GET["cid"], $_memberid);
      header("location: /my_characterdetail.php?cid=" . $_GET["cid"] . "&" . $armorylite->rand_str(10));
      break;
      
    case "shorthand":
      $_shortname = trim($_POST["shortname"]);

      if (($_shortname) && (!preg_match('/[^A-Za-z0-9]/', $_shortname))) {
        $rec = $armorylite->claim_get($_POST["cid"], $_memberid);
        $dat = $armorylite->db->fetch_array($rec);
        if ($dat["Character_ID"]) {
          if ($_POST["df"] == "1") {
            $_id = $armorylite->shortname_add($_shortname, $dat["Character_ID"], $_memberid, 1);      
          } else {
            $_id = $armorylite->shortname_add($_shortname, $dat["Character_ID"], $_memberid, 0);      
          }
        }      
      }
      header("location: /my_characterdetail.php?cid=" . $_POST["cid"] . "&add_shortname=" . $_id . "&" . $armorylite->rand_str(10));
      break;
      
  }
  exit;
?>
