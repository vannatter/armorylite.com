<? if (!$this->anon) { ?>
  <?
    if ($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['GUILDNAME']) {
  ?>
    <div class="sub2"> 
      &lt;<A href="<?=$this->lite_url . "/g"?>"><?=stripslashes($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['GUILDNAME']);?></a>&gt;
    </div>
  <?
    }
  ?>
<? } else { ?>
  <div class="sub2"> 
    &lt;Anonymous&gt;
  </div>
<? } ?>
