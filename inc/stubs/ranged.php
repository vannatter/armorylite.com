<?
  $tt = "<div id=\"stats_ranged\" class=\"stats\">";

  if ($this->range_on == true) {
    $tt .= "<div id=\"stats_ranged_head\" class=\"stats_head_on\" onClick=\"stat_show('stats_ranged_main','stats_ranged_head')\">Ranged Statistics</div>";
    $tt .= "<div id=\"stats_ranged_main\" class=\"stats_main\"><center>";
  } else {
    $tt .= "<div id=\"stats_ranged_head\" class=\"stats_head_off\" onClick=\"stat_show('stats_ranged_main','stats_ranged_head')\">Ranged Statistics</div>";
    $tt .= "<div style=\"display: none;\" id=\"stats_ranged_main\" class=\"stats_main\"><center>";
  }

  $tt .= "<table width=\"380\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"stats_item\">";

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td class=\"stats_item stats_lbl\">Weapon Skill:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['RANGED'][0]['WEAPONSKILL'][0]['ATTRIBUTES']['VALUE'] . "</td>";
  $tt .= "<td width=20></td>";
  $tt .= "<td class=\"stats_item stats_lbl\">Rating:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['RANGED'][0]['WEAPONSKILL'][0]['ATTRIBUTES']['RATING'] . "</td>";
  $tt .= "</tr>";

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td class=\"stats_item stats_lbl\">Damage:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['RANGED'][0]['DAMAGE'][0]['ATTRIBUTES']['MIN'] . "-" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['RANGED'][0]['DAMAGE'][0]['ATTRIBUTES']['MAX'] . " (" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['RANGED'][0]['DAMAGE'][0]['ATTRIBUTES']['DPS'] . " DPS)</td>";
  $tt .= "<td width=20></td>";
  $tt .= "<td class=\"stats_item stats_lbl\">Speed:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['RANGED'][0]['DAMAGE'][0]['ATTRIBUTES']['SPEED'] . "</td>";
  $tt .= "</tr>";
  
  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td class=\"stats_item stats_lbl\">RAP:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['RANGED'][0]['POWER'][0]['ATTRIBUTES']['BASE'] . " (" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['RANGED'][0]['POWER'][0]['ATTRIBUTES']['EFFECTIVE'] . " EFF)" . "</td>";
  $tt .= "<td width=20></td>";
  $tt .= "<td class=\"stats_item stats_lbl\">+DPS:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['RANGED'][0]['POWER'][0]['ATTRIBUTES']['INCREASEDDPS'] . "</td>";
  $tt .= "</tr>";  

  if ($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['RANGED'][0]['POWER'][0]['ATTRIBUTES']['PETATTACK'] != "-1.00") {
    $tt .= "<tr class=\"stats_item\">";
    $tt .= "<td class=\"stats_item stats_lbl\">Pet +Spell:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['RANGED'][0]['POWER'][0]['ATTRIBUTES']['PETSPELL'] . "</td>";
    $tt .= "<td width=20></td>";
    $tt .= "<td class=\"stats_item stats_lbl\">Pet +AP:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['RANGED'][0]['POWER'][0]['ATTRIBUTES']['PETATTACK'] . "</td>";
    $tt .= "</tr>";  
  }

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td class=\"stats_item stats_lbl\">Hit Rating:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['RANGED'][0]['HITRATING'][0]['ATTRIBUTES']['VALUE'] . "</td>";
  $tt .= "<td width=20></td>";
  $tt .= "<td class=\"stats_item stats_lbl\">Hit %:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['RANGED'][0]['HITRATING'][0]['ATTRIBUTES']['INCREASEDHITPERCENT'] . "</td>";
  $tt .= "</tr>";

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td class=\"stats_item stats_lbl\">Crit Rating:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['RANGED'][0]['CRITCHANCE'][0]['ATTRIBUTES']['RATING'] . " (+" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['RANGED'][0]['CRITCHANCE'][0]['ATTRIBUTES']['PLUSPERCENT'] . "%)</td>";
  $tt .= "<td width=20></td>";
  $tt .= "<td class=\"stats_item stats_lbl\">Crit %:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['RANGED'][0]['CRITCHANCE'][0]['ATTRIBUTES']['PERCENT'] . "</td>";
  $tt .= "</tr>";
  
  $tt .= "</table>";

  $tt .= "</center></div>";
  $tt .= "</div>" . r;
  echo $tt;  
?>
