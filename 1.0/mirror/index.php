<?
  include("../inc/armorylite.class.php");
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

  $page_title = "Mirror";
  $GLOBALS["loader"] = " onload=\"profileupdater()\" ";
  include("../inc/corp_header.php");
?>

<script language="javascript" type="text/javascript" src="http://armorylite.com/inc/power.php"></script>

<table border="0" width="100%">
  <tr valign="top">
    <td>
      <div class="imghead"><img src="/images/mirror.gif" alt="Help Mirror For Us" width="200" height="25"></div>
      <div class="hr"></div>

      <div class="blog2">
        Hi Armory Lite users! Because of the way the Armory parses data, we are constantly looking
        for people to help load-balance our requests to the Armory servers. This insures that we can 
        continue to provide the best quality service for everyone with the least amount of service interruption.
        <p>
        To become a mirror, you simply have to upload two PHP files to your webserver which then are added
        to our central server as a new node to hand requests off to when our servers are overwhelmed.
        <p>
        If you are interested in helping, your server must support:
        <br>
        - PHP (4.x or 5.x should work)
        <br>
        - CURL
        <p>
        Grab the files below and upload them to your webserver. (These are source files so you know theres
        nothing bad going on; copy the code and save them as .php [don't just save them - phps does some funky
        HTML formatting])            	
        <p>
        Once you have these files on your server, please <a href="mailto:support@armorylite.com">E-mail</a>
        the URL to us so we can verify everything and get you set up as a node.
        <p>
        Thanks for the support!

        <div class="breaker"></div>
    
        <div class="corp_box2">
          <div class="corp_box_buffer">
            Latest mirror version: <b><?=MIRROR_VERSION;?></b>
            <br><br>
            <a href="armorylite_mirror_v5.zip">armorylite_mirror_v5.zip</a>
            <br><br>
            <a href="armorylite_mirror.class.phps">armorylite_mirror.class.phps</a>
            <br>
            <a href="armorylite.phps">armorylite.phps</a>
          </div>
        </div>
        
      </div>

    </td>
    
    <td align="right" width="240">
      <? include("../inc/corp_side.php"); ?>
    </td>

    <td width="5">&nbsp;</td>
	
  </tr> 
</table>

<?
  include("../inc/corp_footer.php");
?>
