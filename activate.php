<?
  include("inc/armorylite.class.php");

  $armorylite = new armorylite();
  
  if ($_POST["action"] == "submit") {
    if (!$_POST["_username"]) {
      $error_code = "Username not entered.<p>";
    } else if (!$_POST["c"]) {
      $error_code = "Code not entered.<p>";
    } else {
      $return_code = $armorylite->activate_member($_POST["_username"],$_POST["c"]);

      switch ($return_code) {
        case "-1":
          $armorylite->print_header_info("Activate Account - Error");
          echo "<br><br><span class=sub2>Activation error.<p>Go back and try again!</span><br>";
          $armorylite->print_footer_info();
          break;
        case "1":
          $armorylite->print_header_info("Activate Account - Success!");
          echo "<br><br><span class=sub2>Account activated!<p>You should be able to log in now - have fun!<p><a href=/>Homepage</a></span><br>";
          $armorylite->print_footer_info();
          break;
      }
      exit;
    }
    
  }

  $_c = (($_POST["c"]) ? $_POST["c"] : $_GET["c"]);

  $page_title = "Activate Account";
  $GLOBALS["loader"] = " onload=\"profileupdater()\" ";
  include("inc/corp_header.php");
?>


<table border="0" width="100%">
  <tr valign="top">
    <td>
      <div><img src="/images/activation.gif" alt="Account Activation" width="200" height="25"></div>
      <div class="hr"></div>

      <div class="blog2">
          <?= $error_code; ?>

          <p>
          Just one step left - enter your username and activation code below to activate your account. You can
          then begin using all of the free member-only features of Armory Lite.
          <p>
          Remember, your information will never be shared with anyone - we hate spam just as much as
          you do. 
          <p>
          If you've misplaced your information, simply <a href="/register.php">register</a> your username again.
          <p>
          
          <div class="hrd"></div>
          <div class="breaker"></div>
          
          <form method="post" action="/activate.php">
            <input type="hidden" name="action" value="submit">

            <div class="lr">
              <div class="floatleft w4">Username:</div>
              <div class="floatleft w12">
                <input value="<?=$_POST["_username"];?>" class="w2" type="text" id="login" name="_username" maxlength="60" size="20">
              </div>
            </div>

            <div class="lr">
              <div class="floatleft w4">Code:</div>
              <div class="floatleft w12">
                <input value="<?=$_c;?>" class="w2" type="text" id="login" name="c" maxlength="60" size="20">
              </div>
            </div>
            
            <div class="lr">
              <div class="floatleft w4">&nbsp;</div>
              <div class="floatleft w12">
                <input class="w2" type="submit" id="login_on" value="Activate">
              </div>
            </div>

          <div class="breaker"></div>
          <div class="hrd"></div>
          </form>

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
