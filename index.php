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

  $q = "SELECT b.*, u.Name FROM armorylite.blog b INNER JOIN armorylite.users u ON u.User_ID = b.User_ID WHERE Archived = 0 ORDER BY b.Blog_ID DESC";
  $r = $armorylite->db->query($q);
   
  if ($_COOKIE["armorylite_user"]) {
    $logged_in = true;
    $_username = $armorylite->crypt($_COOKIE["armorylite_user"],SALT);
  } else {
    $logged_in = false;
  }

  $page_title = "Information, Simplified.";
  $GLOBALS["loader"] = " onload=\"profileupdater()\" ";

  $x = $armorylite->build_serverlist();

  include("inc/corp_header.php");
?>

<table border="0" width="100%">
  <tr valign="top">
    <td>

      <div class="corp_box2">
        <div class="corp_box_buffer">
          <div class="box_browse">
            View your profile - select your server and type in your character name!
            <p />
            <form name="_arm" onSubmit="location.href='/'+document._arm._country.value+'/'+document._arm._servername.value+'/'+document._arm._name.value; return false;">
              <input type="hidden" name="_servername" value="">
              <input type="hidden" name="_country" value="">
              <select class="w12" name="_server" onChange="do_arm_build('server')">
                <option value="">--</option>
                <?=$x;?>         
              </select>
              <input class="w9" type="text" id="login" name="_name" maxlength="20" size="10" value="Your Name" onFocus="ghost_txt_inc(this, 'Your Name', 'login_on')" onKeyUp="do_arm_build('user')" onKeyDown="do_arm_build('user')" onBlur="ghost_txt_out(this, 'Your Name', 'login')"></span>

              <p />
              Your Armory Lite URL: 
              <br />
              <span id="arm_link">http://armorylite.com/??/??/??</span>
            </form>  
          </div>
        </div>
      </div>

      <div class="im imghead"><img src="/images/sitenews.gif" alt="Site News" width="200" height="25"></div>
      <div class="hr"></div>

        <? while ($x = $armorylite->db->fetch_array($r)) { ?>
        <div class="blog2">
          <?=stripslashes($x["Blog_Body"]);?> 
          <br />
          <span class="blog_footer"><?=$x["Name"];?> @ <?=date("m/d/Y H:i:s",$x["Blog_Date"]);?></span>
        </div>
        <div class="hrd"></div>
        <? } ?>

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