<? 
  if ($GLOBALS["main_container"] == "") {
    $GLOBALS["main_container"] = "armorylite_wide";   
  }
?>
<html>
  <head>
    <? if(isset($this)) { ?>
      <? if ($this->aff_dat["Affiliate_Name"]) { ?>
        <title><?=$this->aff_dat["Affiliate_Name"];?> Armory: <?=$page_title;?></title>
      <? } else { ?>
        <title>Armory Lite - The WoW Armory Alternative: <?=$page_title;?></title>
      <? } ?>
    <? } else { ?>
      <? if ($armorylite->aff_dat["Affiliate_Name"]) { ?>
        <title><?=$armorylite->aff_dat["Affiliate_Name"];?> Armory: <?=$page_title;?></title>
      <? } else { ?>
        <title>Armory Lite - The WoW Armory Alternative: <?=$page_title;?></title>
      <? } ?>
    <? } ?>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="Description" content="Armory Lite is a World of Warcraft Armory alternative: lightweight, browser-friendly and bonus features.">
    <meta name="Keywords" content="ArmoryLite, Armory, WoW, World of Warcraft, World of Warcraft Armory, Armory Alternative, Lightweight Armory">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <? if(isset($this)) { ?>
      <? if (!$this->anon) { ?>
        <? if ($this->chid) { ?>
          <link rel="alternate" type="application/rss+xml" title="Armorylite Character Feed" href="/rss/character_news.php?chid=<?=$this->chid;?>" />
        <? } else { ?>
          <link rel="alternate" type="application/rss+xml" title="Armorylite Site News Feed" href="/rss/site_news.php" />
        <? } ?>
      <? } else { ?>
        <link rel="alternate" type="application/rss+xml" title="Armorylite Site News Feed" href="/rss/site_news.php" />
      <? } ?>
    <? } else { ?>
      <link rel="alternate" type="application/rss+xml" title="Armorylite Site News Feed" href="/rss/site_news.php" />
    <? } ?>
    
    <? if ($_COOKIE["armorylite_style"] == "l") { ?>
      <link rel="stylesheet" href="/inc/style.php?s=d&x=404" type="text/css">
    <? } else { ?>
      <? if(isset($this)) { ?>
        <? if ($this->aff_dat["Affiliate_Name"]) { ?>
          <link rel="stylesheet" href="/inc/style.php?s=a&x=4054" type="text/css">
        <? } else { ?>
          <link rel="stylesheet" href="/inc/style.php?s=d&x=40543" type="text/css">
        <? } ?>
      <? } else { ?>
        <link rel="stylesheet" href="/inc/style.php?s=d&x=40543" type="text/css">
      <? } ?>
    <? } ?>

    <script language="javascript" type="text/javascript" src="/inc/jquery-1.3.2.min.js"></script>
    <script language="javascript" type="text/javascript" src="/inc/js.php"></script>
    <script language="javascript" type="text/javascript" src="/inc/sort.php"></script>
    <script language="javascript" type="text/javascript" src="http://www.wowhead.com/widgets/power.js"></script>
  </head>
  
  <map name="corpnavv">
    <area coords="11,2,46,22" shape="rect" href="/" alt="Home">
    <area coords="54,2,90,22" shape="rect" href="/about.php" alt="About">
    <area coords="97,2,135,22" shape="rect" href="/dosearch.php" alt="Search">
    <area coords="143,2,183,22" shape="rect" href="/dobrowse.php" alt="Browse">
    <area coords="192,2,230,22" shape="rect" href="/donate.php" alt="Donate">
    <area coords="238,2,288,22" shape="rect" href="/advertise.php" alt="Advertise">
  </map>

  <div id="AL">
    <body <?=$GLOBALS["loader"];?>>
      <div id="<?=$GLOBALS["main_container"];?>">
        <div class="corp_main_left">

          <div class="corp_header">        
            <div class="corp_header_left">
              <a href="/"><img src="/images/head_left.jpg" border="0" alt="Armory Lite" width="265" height="71"></a>
            </div>      
            <div class="corp_header_right">
              <div class="corp_header_right_top">
                <div id="pcount"></div>
              </div>
              <div class="corp_header_right_bot">
                <img border="0" usemap="#corpnavv" width="299" height="37" src="/images/head_nav.gif">
              </div>
            </div>
          </div>  
          
          <div class="corp_content">
                         