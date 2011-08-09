<? if (($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PVP'][0]['ARENACURRENCY'][0]['ATTRIBUTES']['VALUE'] != "") && ($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PVP'][0]['ARENACURRENCY'][0]['ATTRIBUTES']['VALUE'] != "0")) { ?>
<div class="sub3">
  Arena Points:
  <?=$this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PVP'][0]['ARENACURRENCY'][0]['ATTRIBUTES']['VALUE'];?>
</div>
<? } ?>
