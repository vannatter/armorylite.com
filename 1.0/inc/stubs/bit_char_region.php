<? if (!$this->anon) { ?>
  <div class="sub3">
    <a href="/<?=$this->z;?>/<?=urlencode(stripslashes($this->r));?>/"><?=$this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['FACTION'] . " - " . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['REALM'] . " - " . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['BATTLEGROUP'];?></a>
  </div>
  
  <?= $this->serverpop($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['REALM'], strtoupper($this->z), ''); ?>
<? } ?>
