<? 
  $nl = 2; 
  include("../inc/armorylite.class.php");
  $armorylite = new armorylite();

  if ($_POST["sub"] == "1") {  
    $q = "SELECT * FROM armorylite.users WHERE Username = '" . $_POST["username"] . "'";
    $r = $armorylite->db->query($q);
    $x = $armorylite->db->fetch_array($r);

    $u   = $x["Username"];
    $id  = $x["User_ID"];
    $p   = $x["Password"];
    $lvl = $x["AccessLevel"];

    if (!$u) {
      $err = "Incorrect username";
    } else {
      if (!$p) {
        $err = "Missing password";
      } else {
        if ($p == $_POST["password"]) {
          setcookie("username",$u);
          setcookie("user_id",$id);
          setcookie("lvl",$lvl);
          header("location: /admin/index.php?welcome");
        } else {
          $err = "Incorrect password";
        }
      }
    }
  }
  include("../inc/header.php"); 
?>

<table width="100%" height="100%">
  <tr>
    <td valign="middle" align="middle">

      <form method="post" action="/admin/login.php" name="log">
      <input type="hidden" name="sub" value="1">

      <table class=box cellpadding=30 cellspacing=9>
       <tr>
        <td class=box_inner align="center">

          <span class="err"><?=$err;?></span>

          <table>
            <tr>
              <td class="sub2">
                Username:
              </td>
              <td class="sub2">
                <input class="sub2" type="text" name="username" size="10" maxlength="32">
              </td>
            </tr>
    
            <tr>
              <td class="sub2">
                Password:
              </td>
              <td class="sub2">
                <input class="sub2" type="password" name="password" size="10" maxlength="32">
              </td>
            </tr>
    
            <tr>
              <td>
              </td>
              <td>
                <input type="submit" name="btn" value="Login">
              </td>
            </tr>
          </table>

        </td>
       </tr>
      </table>
 
    </td>
  </tr>
</table>

<? include("../inc/footer.php"); ?>

