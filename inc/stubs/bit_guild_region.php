<div class="sub3">
  <?=utf8_encode($this->xml['PAGE'][0]['GUILDINFO'][0]['GUILDHEADER'][0]['ATTRIBUTES']['REALM']) . " " . strtoupper($this->z) . " - " . (($this->xml['PAGE'][0]['GUILDINFO'][0]['GUILDHEADER'][0]['ATTRIBUTES']['FACTION']=="0") ? "Alliance" : "Horde") . " - " . $this->xml['PAGE'][0]['GUILDINFO'][0]['GUILDHEADER'][0]['ATTRIBUTES']['MEMBERS'] . " Members";?>
</div>