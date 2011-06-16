<? if (!$this->anon) { ?>
<div class="sub">
  <?=trim($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['PREFIX']) . " " . stripslashes($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['NAME']) . " " . trim($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['SUFFIX']);?>
</div>
<? } else { ?>
<div class="sub">
  Anonymous Profile
</div>

<? } ?>
