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

  $page_title = "Advertise";
  $GLOBALS["loader"] = " onload=\"profileupdater()\" ";
  include("inc/corp_header.php");
?>

<table border="0" width="100%">
  <tr valign="top">
    <td>
      <div class="imghead"><img src="/images/advertise.gif" alt="Advertise With Armory Lite" width="200" height="25"></div>
      <div class="hr"></div>

      <div class="blog2">
        Advertising details coming soon. If you are in immediate need of assistance, please <a href="mailto:support@armorylite.com">contact us</a> for advertising and private labeling
        specifics.
        <p>

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