<?
  include("inc/parse.php");
  include("inc/armorylite.class.php");

  $_z = strtolower(stripslashes($_GET["z"]));
  $_r = strtolower(stripslashes($_GET["r"]));
  $_s = strtolower(stripslashes($_GET["s"]));
  $_o = strtolower(stripslashes($_GET["o"]));
  if (!$_s) { $_s = 0; }
  if (!is_numeric($_s)) { $_s = 0; }

  if ($_o) {
    switch ($_o) {
      case "n":
        $_o = "n";
        $ord = "Toon";
        $dir = "ASC";
        break;

      case "c":
        $_o = "c";
        $ord = "Class";
        $dir = "ASC";
        break;

      case "l":
        $_o = "l";
        $ord = "Level";
        $dir = "DESC";
        break;

      case "f":
        $_o = "f";
        $ord = "Faction";
        $dir = "ASC";
        break;

      case "g":
        $_o = "g";
        $ord = "Guild";
        $dir = "ASC";
        break;

      case "s":
        $_o = "s";
        $ord = "Score";
        $dir = "DESC";
        break;

      case "e":
        $_o = "e";
        $ord = "Server";
        $dir = "ASC";
        break;
      
      default:
        $_o = "n";
        $ord = "Toon";
        $dir = "ASC";
        break;
    }
  } else {
    $_o = "n";
    $ord = "Toon";
    $dir = "ASC";
  }

  $now = 1;
  $cnt = 200;  
  $tim = time();
  
  $GLOBALS["main_container"] = "armorylite_wide";
  $armorylite = new armorylite();

  
  $armorylite->print_header_info("Error!");
  echo "<br><br><br><span class=sub2>Browsing will be back shortly - sorry for the inconvenience!</span>";
  $armorylite->print_footer_info("Error!");
  exit;
  
  if ($_r == "*") {
    $armorylite->print_header_info("Error!");
    echo "<br><br><br><span class=sub2>Region-wide browsing disabled. Sorry!</span>";
    $armorylite->print_footer_info("Error!");
    exit;
  }
  
  $armorylite->print_header_info("Browse > " . strtoupper(stripslashes($_z)) . " > " . ucwords($_z));
  $rec = $armorylite->browse_cache($_z, $_r, $_s, $cnt, $ord, $dir);
  $nav = $armorylite->cache_nav($_z, $_r, $cnt, $_s, $_o);

?>

  <script language="javascript" type="text/javascript" src="/inc/power.php"></script>

   <div id="profile_wide">
    <div class="page_content">
    <form name="_browse">
     <div class="headernav">
      <div class="floatleft nav"><a href="/"><img src="/images/logo_mid_<?=(($_COOKIE["armorylite_style"] == "l")?"light":"dark");?>.gif" width="106" height="38" border="0" alt="Armory Lite"></a></div>
      <div class="box_off floatleft nav"><a href="/dobrowse.php">Browse</a> > <?=strtoupper($_z)?> > <?=ucwords(stripslashes($_r))?>&nbsp;</div>
              
      <div class="box_on floatright nav">
        &nbsp;Sort All: <select onChange="filterbrowse('<?= "/browse/" . strtolower(urlencode(stripslashes($_z))) . "/" . strtolower(urlencode(stripslashes($_r))) . "/" . strtolower(urlencode(stripslashes($_s)));?>')" class="w5" name="_sort">
          <option <?= (($_o == "n") ? " selected " : ""); ?> value="n">Name</option>        
          <option <?= (($_o == "c") ? " selected " : ""); ?> value="c">Class</option>        
          <option <?= (($_o == "l") ? " selected " : ""); ?> value="l">Level</option>        
          <option <?= (($_o == "f") ? " selected " : ""); ?> value="f">Faction</option>        
          <option <?= (($_o == "g") ? " selected " : ""); ?> value="g">Guild</option>        
          <? if ($_r == "*") { ?>
          <option <?= (($_o == "e") ? " selected " : ""); ?> value="e">Server</option>        
          <? } ?>
          <option <?= (($_o == "s") ? " selected " : ""); ?> value="s">Score</option>        
        </select>&nbsp;</div>
    </div>

    <div id="browse">
      <div id="content">
        <div class="row">

          <table width=100% class="sortable">
            <tr class="searchgrid_head">
              <th>&nbsp;<?= (($_o == "n") ? "<span class=me_on>Name</span>" : "Name"); ?>&nbsp;</th>
              <th>&nbsp;<?= (($_o == "c") ? "<span class=me_on>Class</span>" : "Class"); ?>&nbsp;</th>
              <th>&nbsp;<?= (($_o == "l") ? "<span class=me_on>Lvl</span>" : "Lvl"); ?>&nbsp;</th>
              <th>&nbsp;<?= (($_o == "f") ? "<span class=me_on>Faction</span>" : "Faction"); ?>&nbsp;</th>
              <th>&nbsp;<?= (($_o == "g") ? "<span class=me_on>Guild</span>" : "Guild"); ?>&nbsp;</th>
              <? if ($_r == "*") { ?>
                <th>&nbsp;<?= (($_o == "e") ? "<span class=me_on>Server</span>" : "Server"); ?>&nbsp;</th>
              <? } ?>
              <th>&nbsp;<?= (($_o == "s") ? "<span class=me_on>Score</span>" : "Score"); ?>&nbsp;</th>
            </tr>
            
            <? while ($dat = $armorylite->db->fetch_array($rec)) { ?>
              <tr class=searchgrid_row>
                <td class=searchgrid_col><a href="/<?=strtolower($_z)?>/<?=strtolower(stripslashes(urlencode($dat["Server"])));?>/<?=strtolower(stripslashes($dat["Toon"]));?>/"><?=ucfirst($dat["Toon"]);?></a></td>
                <td class=searchgrid_col><?=$dat["Class"];?>&nbsp;</td>
                <td class=searchgrid_col><?=$dat["Level"];?>&nbsp;</td>
                <td class=searchgrid_col><?= (($dat["Faction"]=="1") ? "Horde" : "Alliance");?>&nbsp;</td>
                <td class=searchgrid_col><?=$dat["Guild"];?>&nbsp;</td>
                <? if ($_r == "*") { ?>
                <td class=searchgrid_col><a href="/<?=strtolower($_z)?>/<?=strtolower(stripslashes($dat["Server"]));?>/"><?=ucwords($dat["Server"]);?></a></td>
                <? } ?>                
                <td class=searchgrid_col>
                  <?
                    $score = $dat["Score"];
                    if ($score >= 3800) {
                      echo "<span class=qual_5>" . $score . "</span>";
                    } else if ( ($score < 3800) && ($score >= 3100) ) {
                      echo "<span class=qual_4>" . $score . "</span>";
                    } else if ( ($score < 2100) && ($score >= 2500) ) {
                      echo "<span class=qual_3>" . $score . "</span>";
                    } else if ( ($score < 2500) && ($score >= 2000) ) {
                      echo "<span class=qual_2>" . $score . "</span>";
                    } else if ( ($score < 2000) ) {
                      echo "<span class=qual_1>" . $score . "</span>";
                    }
                  ?>
                &nbsp;</td>
              </tr>
            <? } ?>
          </table>

          <br>

          <div class="key">
            <?=$nav;?>
          </div>

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
