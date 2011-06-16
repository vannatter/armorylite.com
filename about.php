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

  $page_title = "About";
  $GLOBALS["loader"] = " onload=\"profileupdater()\" ";
  include("inc/corp_header.php");
?>

<table border="0" width="100%">
  <tr valign="top">
    <td>
      <div class="imghead"><img src="/images/about.gif" alt="About Armory Lite" width="200" height="25"></div>
      <div class="hr"></div>

      <div class="blog2">
        Armory Lite creates a textually soothing experience based on your World of Warcraft Armory information.
        <p>
        <b>Testimonials</b>
        <br>
        One of the leading online poker guides, PokerListings, had this to say about our site: "ArmoryLite is truly one of those creative projects which make's 
        the World of Warcraft even better! This is one great source for your WoW experience". 
        We salute PokerListings for these kind words and if you get the craving to pick up any of the online card games, please check out their site for 
        <a href="http://www.pokerlistings.com/poker-room-reviews">full list of the best poker rooms</a> around the net.
        <p>        
        <b>Why?</b>
        <br>
        We created Armory Lite because we were tired of waiting for all the flash and glamour of the official armory, when
        all we needed sometimes was basic statistics and character information.
        <p>
        From there, we decided to add some of our own functionality, things like gear scores and statistic tracking to
        help extend what was already available to us.
        <p>
        We keep cached copies of all the data you request and actually help alleviate the strain on Blizzard armory servers by 
        giving you an alternative when their service is unavailable, in an easy to read and use format.
        <p>
        Our cache copies are linked to your characters and give a historic view of your gear, which can be accessed from the administration
        system. In addition, you can access your cached Armory data whenever the official source is down for maintenance or overloaded.
        <p>
        To date, we've cached over 8 million unique users and have detailed statistic information on over 3 million of those users. We have a
        back log of over 5 million users to still parse through, so our service and analytical data is constantly becoming more impressive and fun.
        We're storing over 100 gigabytes of text data already, and growing at a rate of 2 gigabyte a week!
        <p>        
        <p>
        We're constantly tweaking and improving the service for our users, by fixing reported bugs and adding new features. We appreciate 
        all <a href="mailto:support@armorylite.com">feedback</a> and suggestions; if you can think of something you think would help
        make Armory Lite more useless, share it with us - odds are, we'll add it!
        <p>
        <b>Who?</b>
        <br>
        Armory Lite is owned and operated by <a href="http://armorylite.com/us/kargath/dovoso">Dustin</a> <a href="http://dustin.vannatter.com/">Vannatter</a>, who also operates
        the <a href="http://conflct.com/">Conflct Gaming</a> brand.
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