<?
  include("../inc/armorylite.class.php");
  $armorylite_admin = new armorylite_admin();
  $armorylite_admin->check_login(1);

  $armorylite = new armorylite();

  $page_title = "Talent Administration";
  include("../inc/header.php");
  
  $panes = 3;
  $rows  = 11;
  $cols  = 4;

  $_class_id = $_GET["class_id"];
  if (!$_class_id) { $_class_id = 7; }
  list ($_tSID, $_talentname, $_maxpoints, $_spellurls) = $armorylite->get_talentgrid($_class_id);
?>

<script language="javascript">
  function jumpme(p,r,c,t) {
    if (t > 0) {
      window.location.href = '/admin/talent_input.php?tsid=' + t + '&class_id=' + document._talents.Class_ID[document._talents.Class_ID.selectedIndex].value + '&r=' + r + '&c=' + c + '&p=' + p;  
    } else {
      window.location.href = '/admin/talent_input.php?class_id=' + document._talents.Class_ID[document._talents.Class_ID.selectedIndex].value + '&r=' + r + '&c=' + c + '&p=' + p;  
    }
  }
  
  function swapclass() {
    window.location.href = '/admin/talents.php?class_id=' + document._talents.Class_ID[document._talents.Class_ID.selectedIndex].value;
  }
</script>

<form method="post" action="talents.php" name="_talents">
<div id="talents">
  <div id="header">
    <select name="Class_ID" onChange="swapclass()">
      <?=$armorylite_admin->get_classlist($_class_id);?>
    </select>
  </div>
  <div id="content" class="content">
    <?
      for ($p = 1; $p <= $panes; $p++) {
    ?>
    <div id="p_<?=$p;?>" class="pane">
      <? for ($r = 1; $r <= $rows; $r++) { ?>
      <div id="p_<?=$p;?>_r_<?=$r;?>" class="row">
        <? 
          for ($c = 1; $c <= $cols; $c++) { 
            if ($_tSID[$p][$r][$c]) {
              $_tsid = $_tSID[$p][$r][$c];
              $_talent_name = $_talentname[$p][$r][$c];
              $_max_points = $_maxpoints[$p][$r][$c];
              $_spent_pts = "0/" . $_max_points;
              $_slot_id = "tal_p_" . $p . "_r_" . $r . "_c_" . $c;

              $tt = "";
              $tt .= "<div class=\"tlink\" id=\"" . $_slot_id . "\">";

              for ($_ranks = 1; $_ranks <= 5; $_ranks++) {
                if ($_spellurls[$p][$r][$c][$_ranks]) {
                  $tt .= "<div id=\"rank_off\"><a href=\"" . $_spellurls[$p][$r][$c][$_ranks] . "\">" . $_talent_name . " (" . $_ranks . "/" . $_max_points . ") &gt;&nbsp;&nbsp;</a></div>";
                }
              }
              $tt .= "</div><a href=\"javascript:jumpme(" . $p . "," . $r . "," . $c . "," . $_tsid . ")\" onMouseover=\"dropdownmenu(this, event, '" . $_slot_id . "')\">"  . $_spent_pts . "</a>" . r . r;
              ?>
              <div id="p_<?=$p;?>_r_<?=$r;?>_c_<?=$c;?>" class="col_on">
                <?=$tt;?>
              </div>
              <?
            } else {
              ?>
              <div id="p_<?=$p;?>_r_<?=$r;?>_c_<?=$c;?>" class="col">
                <a href="javascript:jumpme(<?=$p;?>,<?=$r;?>,<?=$c;?>,0)"><font color='#444444'>[x]</font></a>
              </div>
              <?
            }        
          } 
        ?>
      </div>
      <? } ?>
    </div>
    <?      
      }
    ?>
  </div>
</div>
</form>

<a href="/admin">Back to Admin</a>

<?
  include("../inc/footer.php");
?>
