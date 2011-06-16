<?
  include("inc/armorylite.class.php");
  $armorylite = new armorylite(); 

  if ($armorylite->aff_dat["Affiliate_Name"]) { 
    header("location: " . $armorylite->aff_dat["Affiliate_URL"]);
    exit;
  }
   
  if ($_GET["log"] == "1") {
    setcookie("armorylite_user", "", time()-3600, "/");   
    header("location: /index.php?s_".$armorylite->rand_str(10));
  }

  if ($_COOKIE["armorylite_user"]) {
    $logged_in = true;
    $_username = $armorylite->crypt($_COOKIE["armorylite_user"],SALT);
  } else {
    $logged_in = false;
  }

  if ($_POST["action"] == "submit") {
    if (!$_POST["_pass1"]) {
      $error_code = "<span class='blog alignleft err'>Password not entered.</span><p>";
    } else if ($_POST["_pass1"] != $_POST["_pass2"]) {
      $error_code = "<span class='blog alignleft err'>Passwords do not match.</span><p>";
    } else {
      ## do update..
      $result_code = $armorylite->update_member($_username, $_POST["_pass1"], "", "", "");
      header("location: /my_prefs.php?" . $armorylite->rand_str(10));
    }    
  }
  
  switch ($_GET["style"]) {
    case "img-y":
      setcookie("armorylite_img", "y", time()+31536000, "/");    
      header("location: /my_prefs.php?" . $armorylite->rand_str(10));
      break;
    case "img-n":
      setcookie("armorylite_img", "n", time()+31536000, "/");    
      header("location: /my_prefs.php?" . $armorylite->rand_str(10));
      break;
    case "d":
      setcookie("armorylite_style", "d", time()+31536000, "/");    
      header("location: /my_prefs.php?" . $armorylite->rand_str(10));
      break;
    case "l":
      setcookie("armorylite_style", "l", time()+31536000, "/");    
      header("location: /my_prefs.php?" . $armorylite->rand_str(10));
      break;
  }
  
  $page_title = "Manage My Preferences";
  $GLOBALS["loader"] = " onload=\"profileupdater()\" ";
  include("inc/corp_header.php");
?>

<table border="0" width="100%">
  <tr valign="top">
    <td>
      <div class="imghead"><img src="/images/prefs.gif" alt="Manage My Preferences" width="200" height="25"></div>
      <div class="hr"></div>

      <div class="blog2">
        From this page you can set your site preferences, including your account password.
        <p>
        Be aware that changing your password will immediately log you out.
        <p>
        If you need help, feel free to <a href="mailto:support@armorylite.com">Email</a> us.

        <div class="breaker"></div>
    
        <div class="corp_box2">
          <div class="corp_box_buffer textleft">

            <div class="breaker"></div>
            <?= $error_code; ?>
  
            <form method="post" action="/my_prefs.php">
              <input type="hidden" name="action" value="submit">
              <input type="hidden" name="f" value="<?=$_f;?>">
  
              <div class="lr">
                <div class="alignleft floatleft w4">Username:</div>
                <div class="alignleft floatleft w12">
                  <?=ucwords($_username);?>
                </div>
              </div>
  
              <div class="lr">
                <div class="alignleft floatleft w4">Password:</div>
                <div class="alignleft floatleft w12">
                  <input value="" class="w12" type="text" id="login_nocenter" name="_pass1" maxlength="60" size="20">
                </div>
              </div>
  
              <div class="lr">
                <div class="alignleft floatleft w4">Pass Confirm:</div>
                <div class="alignleft floatleft w12">
                  <input value="" class="w12" type="text" id="login_nocenter" name="_pass2" maxlength="60" size="20">
                </div>
              </div>
  
              <div class="lr">
                <div class="alignleft floatleft w4">&nbsp;</div>
                <div class="alignleft floatleft w12">
                  <input class="w12" type="submit" id="login_on" value="Change">
                </div>
              </div>            
  
              <br><br><p>
  
              <div class="lr">
                <div class="alignleft floatleft w4">Style:</div>
                <div class="alignleft floatleft w12">
                  <a href="/my_prefs.php?style=d">Dark</a>
                  |
                  <a href="/my_prefs.php?style=l">Light</a>
                </div>
              </div>
  
              <div class="lr">
                <div class="alignleft floatleft w4">Images:</div>
                <div class="alignleft floatleft w12">
                  <a href="/my_prefs.php?style=img-y">On</a>
                  |
                  <a href="/my_prefs.php?style=img-n">Off</a>
                </div>
              </div>
  
            </form>
            <div class="breaker"></div>
          
          </div>
        </div>


      </div>

    </td>
    
    <td align="right" width="240">
      <? include("inc/corp_side.php"); ?>
    </td>

    <td width="5">&nbsp;</td>
	
  </tr> 
</table>

<?
  include("inc/corp_footer.php");
?>