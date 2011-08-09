<?
  include("inc/armorylite.class.php");

  $_z = strtolower(stripslashes(strtolower($_GET["z"])));
  $_r = strtolower(stripslashes(strtolower($_GET["r"])));
  if (!$_z) { $_z = "all"; }
  if (!$_r) { $_r = "all"; }
  if (!$_s) { $_s = "all"; }
      
  $GLOBALS["main_container"] = "armorylite_wide";
  $armorylite = new armorylite();
  $armorylite->print_header_info("Summary for " . ucwords(stripslashes($_r)) . " [" . strtoupper($_z) . "]");
  
  $_classes = $armorylite->get_classes();
  $_overall = $armorylite->summary_get_gear_score_overall($_z, $_r, 5);
?>

  <div id="profile_wide">
   <div class="page_content">
    <div class="headernav">
      <div class="box_off floatleft nav"><a href="/">[Al]</a> > <a href="/score/">Gear Score</a> > Summary: <?=ucwords(stripslashes($_r))?> - <?=strtoupper($_z)?>&nbsp;</div>
    </div>

    <div id="browse">
      <div id="content">
        <div class="row">

          <br>

          <div class="sub3 alignleft">
            &nbsp;&nbsp;You can use this summary for forum posts (preformatted for Blizzard forums) or to share with guildmates - enjoy!
          </div>
          
<pre class="alignleft">
[b][u]Armorylite.com Gear Score Summary - <?=ucwords($_r);?> (<?=strtoupper($_z);?>)[/u][/b]

[b]Overall[/b] - http://armorylite.com/score/<?=strtolower($_z);?>/<?=strtolower(urlencode($_r));?>/
<? while ($d = $armorylite->db->fetch_array($_overall)) { ?>
<?=ucfirst($d["Toon"]); ?> (<?=$d["Score"]; ?>) http://armorylite.com/<?=strtolower($d["Region"]);?>/<?=strtolower(urlencode($d["Server"]));?>/<?=strtolower($d["Toon"]); ?>/
<? } ?>    
<? while ($c = $armorylite->db->fetch_array($_classes)) { ?>
[b]<?=ucfirst($c["Class_Name"]); ?>[/b] - http://armorylite.com/score/<?=strtolower($_z);?>/<?=strtolower(urlencode($_r));?>/<?=$c["Class_ID"];?>/ 
<?
$_p = $armorylite->summary_get_gear_score_class($_z, $_r, $c["Class_ID"], 5);
while ($p = $armorylite->db->fetch_array($_p)) {
?>
<?=ucfirst($p["Toon"]); ?> (<?=$p["Score"]; ?>) http://armorylite.com/<?=strtolower($p["Region"]);?>/<?=strtolower(urlencode($p["Server"]));?>/<?=strtolower($p["Toon"]); ?>/
<? } ?>     
<? } ?>     
</pre>
          <br><br>
          <?=$armorylite->show_ad("overall","wide");?>
          <br>        

          <br><br>
        </div>
      </div>

      
    </div>      

    </div>  

    <div class="page_ad">
      <?=$armorylite->show_ad("homepage","tall");?>      
    </div>

  </div>
    
<?
  $armorylite->print_footer_info();
?>