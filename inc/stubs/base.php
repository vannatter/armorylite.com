
<div id="stats_base" class="stats">
  <div id="stats_base_head" class="stats_head_on" onClick="stat_show('stats_base_main','stats_base_head')">Base Statistics</div>
  <div id="stats_base_main" class="stats_main">
    <center>
      <table border="0" cellpadding="0" cellspacing="0" class="stats_item">
        <tr class="stats_item">
          <td class="stats_item stats_lbl">Strength:</td><td class="stats_item stats_val"><?=$this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['BASESTATS'][0]['STRENGTH'][0]['ATTRIBUTES']['EFFECTIVE'];?></td>
          <td width=20></td>
          <td class="stats_item stats_lbl">Agility:</td><td class="stats_item stats_val"><?=$this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['BASESTATS'][0]['AGILITY'][0]['ATTRIBUTES']['EFFECTIVE'];?></td>
        </tr>
        <tr class="stats_item">
          <td class="stats_item stats_lbl">Stamina:</td><td class="stats_item stats_val"><?=$this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['BASESTATS'][0]['STAMINA'][0]['ATTRIBUTES']['EFFECTIVE'];?></td>
          <td width=20></td>
          <td class="stats_item stats_lbl">Intellect:</td><td class="stats_item stats_val"><?=$this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['BASESTATS'][0]['INTELLECT'][0]['ATTRIBUTES']['EFFECTIVE'];?></td>
        </tr>
        <tr class="stats_item">
          <td class="stats_item stats_lbl">Spirit:</td><td class="stats_item stats_val"><?=$this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['BASESTATS'][0]['SPIRIT'][0]['ATTRIBUTES']['EFFECTIVE'];?></td>
          <td width=20></td>
          <td class="stats_item stats_lbl">Armor:</td><td class="stats_item stats_val"><?=$this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['BASESTATS'][0]['ARMOR'][0]['ATTRIBUTES']['EFFECTIVE'];?></td>
        </tr>
      </table>
    </center>
  </div>
</div>
