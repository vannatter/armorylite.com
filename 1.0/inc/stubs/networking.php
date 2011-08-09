<div id="stats_networking" class="stats">
  <div id="stats_networking_head" class="stats_head_off" onClick="stat_show('stats_networking_main','stats_networking_head')">Social Networking</div>
  <div style="display: none;" id="stats_networking_main" class="stats_main">
    <center>
      <table width="380" border="0" cellpadding="0" cellspacing="0" class="stats_item">
        <tr class="stats_item">
          <td class="stats_item stats_lbl">
            <? if ($this->anon) { ?>
              <?=$this->show_ad("homepage","block");?>   
            <? } else { ?>
              <div class="netp"><a class="netlnk" target="_new" href="http://be.imba.hu/?zone=<?=urlencode(strtolower($this->z));?>&realm=<?=urlencode(strtolower($this->r));?>&character=<?=urlencode(strtolower($this->n));?>"><?=ucwords(stripslashes($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['NAME']));?> on Be Imba!</a></div>
              <div class="netp"><a class="netlnk" target="_new" href="http://www.wowjuju.com/index.php?page=6#<?=urlencode(strtoupper($this->z));?>_<?=urlencode(ucwords($this->r));?>_<?=urlencode(ucwords($this->n));?>"><?=ucwords(stripslashes($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['NAME']));?> on WoWJuju</a></div>
              <div class="netp"><a class="netlnk" target="_new" href="http://www.wow-achievements.com/Person.aspx?region=<?=urlencode(strtoupper($this->z));?>&realm=<?=urlencode(strtolower($this->r));?>&name=<?=urlencode(strtolower($this->n));?>"><?=ucwords(stripslashes($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['NAME']));?> on WoW Achievements</a></div>
              <div class="netp"><a class="netlnk" target="_new" href="http://www.3darmory.com/<?=urlencode(strtolower($this->z));?>/<?=urlencode(strtolower($this->r));?>/<?=urlencode(strtolower($this->n));?>"><?=ucwords(stripslashes($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['NAME']));?> on 3D Armory</a></div>
              <div class="netp"><a class="netlnk" target="_new" href="http://www.wow-heroes.com/index.php?zone=<?=urlencode(strtoupper($this->z));?>&server=<?=urlencode(ucwords($this->r));?>&name=<?=urlencode(ucwords($this->n));?>"><?=ucwords(stripslashes($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['NAME']));?> on WoW Heroes</a></div>
              <div class="netp"><a class="netlnk" target="_new" href="http://<?=str_replace(" ","",(strtolower($this->r)));?>-<?=urlencode(strtolower($this->z));?>.warcrafter.net/<?=urlencode(ucwords($this->n));?>"><?=ucwords(stripslashes($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['NAME']));?> on Warcrafter</a></div>
            <? } ?>
          </td>
          <td colspan=10 class="stats_item stats_val">
            <?=$this->show_ad("homepage","block");?>   
          </td>
        </tr>
      </table>
    </center>
  </div>
</div>

