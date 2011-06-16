<div id="gscore" class="sub6">Loading..</div>

<?

  if (is_array($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['TALENTSPECS'][0]['TALENTSPEC'])) {
    foreach ( $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['TALENTSPECS'][0]['TALENTSPEC'] as $pk => $pv ) {
      if ($pv['ATTRIBUTES']['ACTIVE'] == "1") {
?>

  <div class="sub_talent">
    <?=$pv['ATTRIBUTES']['TREEONE'];?>/<?=$pv['ATTRIBUTES']['TREETWO'];?>/<?=$pv['ATTRIBUTES']['TREETHREE'];?>
    <br />
    <b><?=$pv['ATTRIBUTES']['PRIM'];?></b>
  </div>

    <? } ?>
  <? } ?>
<? } ?>

<div class="hpx">  
  <div class="hp">
    <?=$this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['CHARACTERBARS'][0]['HEALTH'][0]['ATTRIBUTES']['EFFECTIVE'];?>
  </div>
  <? 
    switch ($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['CHARACTERBARS'][0]['SECONDBAR'][0]['ATTRIBUTES']['TYPE']) {
      case "m":
        ?>
        <div class="mana">
          <?=$this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['CHARACTERBARS'][0]['SECONDBAR'][0]['ATTRIBUTES']['EFFECTIVE'];?>
        </div>
        <?
        break;
      case "e":
        ?>
        <div class="energy">
          <?=$this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['CHARACTERBARS'][0]['SECONDBAR'][0]['ATTRIBUTES']['EFFECTIVE'];?>
        </div>
        <?
        break;
      case "r":
        ?>
        <div class="rage">
          <?=$this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['CHARACTERBARS'][0]['SECONDBAR'][0]['ATTRIBUTES']['EFFECTIVE'];?>
        </div>
        <?
        break;
      case "p":
        ?>
        <div class="rage">
          <?=$this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['CHARACTERBARS'][0]['SECONDBAR'][0]['ATTRIBUTES']['EFFECTIVE'];?>
        </div>
        <?
        break;
    }
  ?>
</div>
