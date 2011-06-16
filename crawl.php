<?
  include("inc/armorylite.class.php");

  $armorylite = new armorylite();

  $q1 = "SELECT count(Character_ID) AS 'cnt' FROM armorylite.characters WHERE Status = 1";
  $r1 = $armorylite->db->query($q1);
  $x1 = $armorylite->db->fetch_array($r1);

  $q2 = "SELECT count(Character_ID) AS 'cnt' FROM armorylite.characters WHERE Status = 2";
  $r2 = $armorylite->db->query($q2);
  $x2 = $armorylite->db->fetch_array($r2);

  $q3 = "SELECT count(Character_ID) AS 'cnt' FROM armorylite.characters WHERE Status = 0";
  $r3 = $armorylite->db->query($q3);
  $x3 = $armorylite->db->fetch_array($r3);



?>
  <h2>Spider Statistics</h2>
  <p>
    
  Uncrawled characters: <b><?=number_format($x1["cnt"]);?> (<?= number_format(((($x1["cnt"])/($x1["cnt"]+$x2["cnt"]+$x3["cnt"]))*100),2); ?>%)</b>
  <br />

  Crawled characters: <b><?=number_format($x2["cnt"]);?> (<?= number_format(((($x2["cnt"])/($x1["cnt"]+$x2["cnt"]+$x3["cnt"]))*100),2); ?>%)</b>
  <br />

  Deleted characters: <b><?=number_format($x3["cnt"]);?> (<?= number_format(((($x3["cnt"])/($x1["cnt"]+$x2["cnt"]+$x3["cnt"]))*100),2); ?>%)</b>
  <br />    
  
