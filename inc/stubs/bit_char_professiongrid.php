  <? 
  if (is_array($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PROFESSIONS'][0]['SKILL'])) {
    foreach ( $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PROFESSIONS'][0]['SKILL'] as $pkey => $pvalue ) {
      ?>
      <div class="prof">
        <?=$pvalue['ATTRIBUTES']['NAME'] . " - " . $pvalue['ATTRIBUTES']['VALUE'] . (($pvalue['ATTRIBUTES']['VALUE']==$pvalue['ATTRIBUTES']['MAX']) ? "" : ("/" . $pvalue['ATTRIBUTES']['MAX']));?>
      </div>  
      <?
    }
  }
  ?>
