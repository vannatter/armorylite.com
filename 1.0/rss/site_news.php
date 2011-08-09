<?
  include("../inc/armorylite.class.php");
  $armorylite = new armorylite(); 
  header("Content-Type: application/xml; charset=ISO-8859-1"); 

  $q = "SELECT b.*, u.Name FROM armorylite.blog b INNER JOIN armorylite.users u ON u.User_ID = b.User_ID ORDER BY b.Blog_ID DESC LIMIT 10";
  $r = $armorylite->db->query($q);
?>
<? echo "<?xml version=\"1.0\"?>"; ?>
<rss version="2.0">
  <channel>

    <title>Armorylite.com Site News Feed</title>
    <description>Keep up to date with what's happening on Armorylite.com</description>
    <link>http://armorylite.com</link>

  <? while ($x = $armorylite->db->fetch_array($r)) { ?>

    <item>
      <title><?=$x["Name"];?> @ <?=date("m/d/Y H:i:s",$x["Blog_Date"]);?></title>
      <description><?=substr(stripslashes(strip_tags($x["Blog_Body"])),0,4e00);?>...</description>
      <link>http://armorylite.com/</link>
    </item>

  <? } ?>

  </channel>
</rss>
