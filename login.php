<?
  include("inc/armorylite.class.php");
  $armorylite = new armorylite();

  $_returnurl = (($_POST["_returnurl"]) ? $_POST["_returnurl"] : "/index.php");
  $_username  = $_POST["_username"];
  $_password  = $_POST["_password"];
  $_result    = $armorylite->login_member($_username, $_password);
  $_errstr    = "";

  switch ($_result) {
    case "-10":
      $_errstr = "?err=Invalid+Username";      
      break;
    case "-11":
      $_errstr = "?err=Invalid+Password";      
      break;
    case "1":
      $_errstr = "?" . $armorylite->rand_str(10);      
      setcookie("armorylite_user", $armorylite->crypt($_username,SALT), time()+31536000, "/");    
      break;
  }
           
  header("location: " . $_returnurl . $_errstr);  
?>
