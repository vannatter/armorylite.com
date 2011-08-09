<?
  include("../inc/armorylite.class.php");
  $armorylite = new armorylite(); 
  header("Content-Type: application/xml; charset=ISO-8859-1"); 

  $_chid = $_GET["chid"];

  if ($_chid) {
    $_c = $armorylite->get_characterinfo($_chid);
    $_u = "http://armorylite.com/" . stripslashes(strtolower(urlencode($_c["Region"]))) . "/" . stripslashes(strtolower(urlencode($_c["Server"]))) . "/" . stripslashes(strtolower(urlencode($_c["Toon"])));
    $_r = $armorylite->comments_get($_chid, 100);
?>
<? echo "<?xml version=\"1.0\"?>"; ?>
<rss version="2.0">
  <channel>
    <title>Armorylite.com - <?=stripslashes(ucwords($_c["Toon"]));?>'s Character Feed</title>
    <description>Notes and character changes for <?=stripslashes(ucwords($_c["Toon"]));?> of <?=stripslashes(ucwords($_c["Server"]));?></description>
    <link><?=$_u;?></link>
  <? while ($x = $armorylite->db->fetch_array($_r)) { ?>
    <item>
      <title><?=$armorylite->get_username($x["Member_ID"]);?> @ <?=date("m/d/Y H:i:s",$x["Comment_Date"]);?></title>
      <description><?=substr(stripslashes(strip_tags($x["Body"])),0,400);?><?=((strlen($x["Body"] > 400)) ? "..." : "");?></description>
      <link><?=$_u;?></link>
    </item>
  <? } ?>
  </channel>
</rss>
<?  
  } else {
?>
<? echo "<?xml version=\"1.0\"?>"; ?>
<rss version="2.0">
  <channel>
    <title>Armorylite.com RSS Error</title>
    <description>RSS Error</description>
    <link>http://armorylite.com</link>
    <item>
      <title>Error</title>
      <description>An error occurred when processing your character rss feed. Please try again.</description>
      <link><?=$_SERVER['SERVER_NAME'] . "" . $_SERVER['REQUEST_URI'];?></link>
    </item>
  </channel>
</rss>
<? 
  }
?>