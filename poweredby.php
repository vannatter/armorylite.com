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

  $page_title = "Powered By";
  $GLOBALS["loader"] = " onload=\"profileupdater()\" ";
  include("inc/corp_header.php");
?>

<script language="javascript" type="text/javascript" src="http://armorylite.com/inc/power.php"></script>

<table border="0" width="100%">
  <tr valign="top">
    <td>
      <div class="imghead"><img src="/images/poweredbyhead.gif" alt="Powered By Functionality" width="200" height="25"></div>
      <div class="hr"></div>

      <div class="blog2">
        Want to integrate Armory Lite functionality into your guild homepage, WoW website or anywhere on the web?
        <p>
        Now its easy to do with our new "Powered By" script. Just like this page, all you have to do is drop a single
        Javascript reference into your code and any Armorylite link that shows on your webpage will magically display detail
        information for that specific character.
        <p>
        For example, my Warlock, <a href="http://armorylite.com/us/kargath/feared/">Feared</a>. Or even my Priest, <a href="http://armorylite.com/us/kargath/dovoso/">Dovoso</a>.
        As you can see, this information is very quick and easy to scan - a great addition to your website.
        
        <div class="breaker"></div>
    
        <div class="corp_box2">
          <div class="corp_box_buffer textleft">
        
            Interested? Copy the following line into your webpage and try it out for yourself:
            <br><br>
            <textarea class="note_textarea" rows="1" cols="80"><script language="javascript" type="text/javascript" src="http://armorylite.com/inc/power.php"></script></textarea>
            <br>
            <br>
            Having issues with the tooltips? Try using our in-line CSS version:
            <br><br>
            <textarea class="note_textarea" rows="1" cols="80"><script language="javascript" type="text/javascript" src="http://armorylite.com/inc/power.php?inline=1"></script></textarea>
          
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