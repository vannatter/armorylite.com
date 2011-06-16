<?
  include("inc/armorylite.class.php");
  $armorylite = new armorylite();
  
  if ($_POST["action"] == "submit") {
    if (!$_POST["_email"]) {
      $error_code = "Email not entered.<p>";
    } else {
      $return_code = $armorylite->member_reset('e', $_POST["_email"]);  

      switch ($return_code) {
        case "-2":
          $armorylite->print_header_info("Password Reset - Error");
          echo "<br><br><span class=sub2>Email address not found, pleast contact support@armorylite.com</span><br>";
          $armorylite->print_footer_info();
          break;
        case "-1":
          $armorylite->print_header_info("Password Reset - Error");
          echo "<br><br><span class=sub2>Error sending email, please contact support@armorylite.com</span><br>";
          $armorylite->print_footer_info();
          break;
        case "1":
          $armorylite->print_header_info("Password Reset - Success!");
          echo "<br><br><span class=sub2>Password reset!<p>Check your email shortly for details.<p><a href=/>Homepage</a></span><br>";
          $armorylite->print_footer_info();
          break;
      }
      exit;
    }
  }

  $page_title = "Lost Password Retrieval";
  $GLOBALS["loader"] = " onload=\"profileupdater()\" ";
  include("inc/corp_header.php");
?>


<table border="0" width="100%">
  <tr valign="top">
    <td>
      <div><img src="/images/lostpassword.gif" alt="Lost Password Retrieval" width="200" height="25"></div>
      <div class="hr"></div>

      <div class="blog2">
          <?= $error_code; ?>

          <p>
          You can reset your password by submitting your registered email address below.
          <p>
          Using this function will reset your password to a new system generated password that you can then
          change once you log into the system.
          <p>
          PLEASE NOTE: If you have multiple accounts with the same email address, ALL accounts will be set to this
          temporary password that share the email address; we do this for security reasons.
          <p>
          If you no longer have access to your email address on file for your account and you know your username(s),
          please <a href="mailto:support@armorylite.com">contact us</a> to discuss your situation.
          
          <div class="hrd"></div>
          <div class="breaker"></div>
          
          <form method="post" action="/lostpassword.php">
            <input type="hidden" name="action" value="submit">

            <div class="lr">
              <div class="floatleft w1">Email Address:</div>
              <div class="floatleft w11">
                <input value="<?=$_POST["_email"];?>" class="w1" type="text" id="login" name="_email" maxlength="60" size="20">
              </div>
            </div>

            <div class="lr">
              <div class="floatleft w1">&nbsp;</div>
              <div class="floatleft w11">
                <input class="w1" type="submit" id="login_on" value="Reset">
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