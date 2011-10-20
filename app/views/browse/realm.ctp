<? $this->Javascript->link("page/browse.js", null, array("inline"=>false)); ?>

   <div id="profile_wide">
    <div class="page_content">
    <form name="_browse">
     <div class="headernav">
      <div class="floatleft nav"><a href="/"><img src="/img/logo_mid_dark.gif" width="106" height="38" border="0" alt="Armory Lite"></a></div>
      <div class="box_off floatleft nav"><a href="/dobrowse.php">Browse</a> &gt; <a href="/<?=strtolower($set->z)?>"><?=strtoupper($set->z)?></a> &gt; <?= $server['Servers']['server_name']; ?>&nbsp;</div>
              
      <div class="box_on floatright nav">
        &nbsp;Sort All: <select id="filter_browse" data-href="/<?= $set->z; ?>/<?= $set->r; ?>/*/" class="w5" name="_sort">
          <option <?= (($set->p == "n") ? " selected " : ""); ?> value="n">Name</option>        
          <option <?= (($set->p == "c") ? " selected " : ""); ?> value="c">Class</option>        
          <option <?= (($set->p == "l") ? " selected " : ""); ?> value="l">Level</option>        
          <option <?= (($set->p == "s") ? " selected " : ""); ?> value="s">Score</option>        
        </select>&nbsp;</div>
    </div>

    <div id="browse">
      <div id="content">
        <div class="row">

          <table width=100% class="sortable">
            <tr class="searchgrid_head">
              <th>&nbsp;<?= (($set->p == "n") ? "<span class=me_on>Name</span>" : "Name"); ?>&nbsp;</th>
              <th>&nbsp;<?= (($set->p == "c") ? "<span class=me_on>Class</span>" : "Class"); ?>&nbsp;</th>
              <th>&nbsp;<?= (($set->p == "l") ? "<span class=me_on>Lvl</span>" : "Lvl"); ?>&nbsp;</th>
              <th>&nbsp;<?= (($set->p == "f") ? "<span class=me_on>Faction</span>" : "Faction"); ?>&nbsp;</th>
              <th>&nbsp;<?= (($set->p == "g") ? "<span class=me_on>Guild</span>" : "Guild"); ?>&nbsp;</th>
              <th>&nbsp;<?= (($set->p == "s") ? "<span class=me_on>Score</span>" : "Score"); ?>&nbsp;</th>
            </tr>
            
            <? foreach ($characters as $char) { ?>
              <tr class=searchgrid_row>
                <td class=searchgrid_col><a href="/<?= $char['Characters']['Region']; ?>/<?= $char['Characters']['Server']; ?>/<?=strtolower(stripslashes($char['Characters']['Toon']));?>/"><?=ucfirst($char['Characters']['Toon']);?></a></td>
                <td class=searchgrid_col><?= $this->Profile->getClass($char['Characters']['Class']); ?>&nbsp;</td>
                <td class=searchgrid_col><?= $char['Characters']['Level']; ?>&nbsp;</td>
                <td class=searchgrid_col><?= $this->Profile->getFaction($char['Characters']['Race']); ?>&nbsp;</td>
                <td class=searchgrid_col><?= $char['Characters']['Guild']; ?>&nbsp;</td>
                <td class=searchgrid_col>
                  <?
                    $score = $char['Characters']['Score'];
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
            <?= $this->Common->pager($set, $count, $set->x, 2); ?>
          </div>
                    

          <br>
          <?= $this->element('corp/conflct'); ?>
        
        </div>
      </div>

    </div> 
    </div>     

    <div class="page_ad">
		<?= $this->Common->show_ad("homepage","tall"); ?> 
    </div>

  </div>
  </form>
