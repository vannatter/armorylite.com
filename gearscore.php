<?
  include("inc/armorylite.class.php");

  $_z = strtolower(stripslashes(strtolower($_GET["z"])));
  $_r = strtolower(stripslashes(strtolower($_GET["r"])));
  $_s = strtolower(stripslashes(strtolower($_GET["s"])));
  if (!$_z) { $_z = "all"; }
  if (!$_r) { $_r = "all"; }
  if (!$_s) { $_s = "all"; }
      
  $GLOBALS["main_container"] = "armorylite_wide";
  $armorylite = new armorylite();
  $armorylite->print_header_info("Top " . $_n . " Gear Scores for " . ucwords(stripslashes($_r)) . " [" . strtoupper($_z) . "]");
  $rec = $armorylite->browse_gear_scores($_z, $_r, $_s);
?>

  <script language="javascript" type="text/javascript" src="/inc/power.php"></script>

  <div id="profile_wide">
   <div class="page_content">
    <form name="_gear">
    <div class="headernav">
      <div class="floatleft nav"><a href="/"><img src="/images/logo_mid_<?=(($_COOKIE["armorylite_style"] == "l")?"light":"dark");?>.gif" width="106" height="38" border="0" alt="Armory Lite"></a></div>
      <div class="box_off floatleft nav"><a href="/score/">Gear Score</a> > <a href="/score/<?=strtolower($_z);?>/"><?=strtoupper($_z);?></a> > <?=ucwords(stripslashes($_r));?>&nbsp;</div>

      <div class="box_on floatleft nav">
        <a href="/summary/?z=<?=addslashes($_z);?>&r=<?=addslashes($_r);?>">Summary View</a>
      </div>

      <div class="box_on floatright nav">
        &nbsp;Filter: <select onChange="filtergear('<?=addslashes($_z);?>','<?=addslashes($_r);?>','<?=addslashes($_s);?>')" class="w5" name="_filter">
          <option value="">--</option>
          <?=$armorylite->get_classlist($_s);?>       
        </select>&nbsp;</div>
    </div>

    <div id="browse">
      <div id="content">
        <div class="row">

          <table width="100%" class="sortable">
            <tr class="searchgrid_head">
              <th>&nbsp;#&nbsp;</th>
              <th>&nbsp;Score&nbsp;</th>
              <th>&nbsp;Name&nbsp;</th>
              <th>&nbsp;Lvl&nbsp;</th>
              <th>&nbsp;Class&nbsp;</th>
              <th>&nbsp;Server&nbsp;</th>
              <th>&nbsp;Region&nbsp;</th>
            </tr>

            <?  
              $xx = 1;
              while ($dat = $armorylite->db->fetch_array($rec)) {
                ?>
                <tr class=searchgrid_row>
                  <td class=searchgrid_col>
                    <?=$xx;?>
                  </td>
                  <td class=searchgrid_col>
                  	<span class="qual_<?= $armorylite->gearscore_color($dat["Score"]); ?>"><?= $dat["Score"]; ?></span>
                  </td>
                  <td class=searchgrid_col>
                    <a href="/<?=strtolower(urlencode(stripslashes($dat["Region"])))?>/<?=strtolower(urlencode(stripslashes($dat["Server"])))?>/<?=strtolower(stripslashes(urlencode($dat["Toon"])));?>/"><?=ucfirst(stripslashes($dat["Toon"]));?></a>
                  </td>
                  <td class=searchgrid_col>
                    <?=$dat["Level"];?>
                  </td>
                  <td class=searchgrid_col>
                    <?=$dat["Class"];?>
                  </td>
                  <td class=searchgrid_col>
                    <a href="/score/<?=strtolower(urlencode(stripslashes($dat["Region"])))?>/<?=strtolower(urlencode(stripslashes($dat["Server"])))?>/"><?=stripslashes(ucwords($dat["Server"]));?></a>
                  </td>
                  <td class=searchgrid_col>
                    <a href="/score/<?=strtolower(urlencode(stripslashes($dat["Region"])))?>/"><?=strtoupper($dat["Region"]);?></a>
                  </td>
                </tr>
                <?
                $xx++;
              }
            ?>
          </table>          
          <br>
          
          <div class="footmain">
            <br><br>
            <?=$armorylite->show_ad("overall","wide");?>
            <br>        
          </div>
          
			<? include("inc/conflct.php"); ?>    

        </div>      
      
      </div>
     </div>      

    </div>  

    <div class="page_ad">
      <?=$armorylite->show_ad("homepage","tall");?>      
      <br />
      <br />
      <?=$armorylite->show_ad("homepage","tinytall");?>      
      <br />
      <br />
      <?=$armorylite->show_ad("homepage","tallhouse");?>      

    </div>

  </div>
  </form>

<?
  $armorylite->print_footer_info();
?>
