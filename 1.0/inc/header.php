<? 
  if ($GLOBALS["main_container"] == "") {
    $GLOBALS["main_container"] = "armorylite";   
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
      <link rel="stylesheet" href="/inc/style.php?s=l&x=45" type="text/css">
    <? } else { ?>
      <? if(isset($this)) { ?>
        <? if ($this->aff_dat["Affiliate_Name"]) { ?>
          <link rel="stylesheet" href="/inc/style.php?s=a&x=45" type="text/css">
        <? } else { ?>
          <link rel="stylesheet" href="/inc/style.php?s=d&x=45" type="text/css">
        <? } ?>
      <? } else { ?>
        <link rel="stylesheet" href="/inc/style.php?s=d&x=45" type="text/css">
      <? } ?>
    <? } ?>

    <script language="javascript" type="text/javascript" src="/inc/jquery-1.3.2.min.js"></script>
    <script language="javascript" type="text/javascript" src="/inc/js.php"></script>
    <script language="javascript" type="text/javascript" src="/inc/sort.php"></script>
    <script language="javascript" type="text/javascript" src="http://www.wowhead.com/widgets/power.js"></script>
  </head>

  <div id="AL">
    <div id="darkBackgroundLayer" class="darkenBackground" style="visibility: hidden; display: none;"></div>
    <body <?=$GLOBALS["loader"];?>>
      <div id="<?=$GLOBALS["main_container"];?>">
        <? if(isset($this)) { ?>
          <? if ($this->aff_dat["Affiliate_Name"]) { ?>
            <? if ($this->aff_content["header"]) { ?>
              <div id="aff_header"><?=$this->aff_content["header"];?><br><br></div>
            <? } ?>
          <? } ?>
        <? } ?>
                