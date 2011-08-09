<?
  $tt = "<div id=\"stats_melee\" class=\"stats\">";

  if ($this->melee_on == true) {
    $tt .= "<div id=\"stats_melee_head\" class=\"stats_head_on\" onClick=\"stat_show('stats_melee_main','stats_melee_head')\">Melee Statistics</div>";
    $tt .= "<div id=\"stats_melee_main\" class=\"stats_main\"><center>";
  } else {
    $tt .= "<div id=\"stats_melee_head\" class=\"stats_head_off\" onClick=\"stat_show('stats_melee_main','stats_melee_head')\">Melee Statistics</div>";
    $tt .= "<div style=\"display: none;\" id=\"stats_melee_main\" class=\"stats_main\"><center>";
  }

  $tt .= "<table width=\"380\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"stats_item\">";

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td class=\"stats_item stats_lbl\">MH Damage:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['MAINHANDDAMAGE'][0]['ATTRIBUTES']['MIN'] . "-" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['MAINHANDDAMAGE'][0]['ATTRIBUTES']['MAX'] . " (" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['MAINHANDDAMAGE'][0]['ATTRIBUTES']['DPS'] . " DPS)</td>";
  $tt .= "<td width=20></td>";
  $tt .= "<td class=\"stats_item stats_lbl\">MH Speed:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['MAINHANDDAMAGE'][0]['ATTRIBUTES']['SPEED'] . "</td>";
  $tt .= "</tr>";

  if ($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['OFFHANDDAMAGE'][0]['ATTRIBUTES']['DPS'] != "0.0") {
    $tt .= "<tr class=\"stats_item\">";
    $tt .= "<td class=\"stats_item stats_lbl\">OH Damage:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['OFFHANDDAMAGE'][0]['ATTRIBUTES']['MIN'] . "-" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['OFFHANDDAMAGE'][0]['ATTRIBUTES']['MAX'] . " (" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['OFFHANDDAMAGE'][0]['ATTRIBUTES']['DPS'] . " DPS)</td>";
    $tt .= "<td width=20></td>";
    $tt .= "<td class=\"stats_item stats_lbl\">OH Speed:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['OFFHANDDAMAGE'][0]['ATTRIBUTES']['SPEED'] . "</td>";
    $tt .= "</tr>";
  }

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td class=\"stats_item stats_lbl\">AP:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['POWER'][0]['ATTRIBUTES']['BASE'] . " (" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['POWER'][0]['ATTRIBUTES']['EFFECTIVE'] . " EFF)" . "</td>";
  $tt .= "<td width=20></td>";
  $tt .= "<td class=\"stats_item stats_lbl\">+DPS:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['POWER'][0]['ATTRIBUTES']['INCREASEDDPS'] . "</td>";
  $tt .= "</tr>";

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td class=\"stats_item stats_lbl\">Hit Rating:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['HITRATING'][0]['ATTRIBUTES']['VALUE'] . "</td>";
  $tt .= "<td width=20></td>";
  $tt .= "<td class=\"stats_item stats_lbl\">Hit %:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['HITRATING'][0]['ATTRIBUTES']['INCREASEDHITPERCENT'] . "</td>";
  $tt .= "</tr>";

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td class=\"stats_item stats_lbl\">Crit Rating:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['CRITCHANCE'][0]['ATTRIBUTES']['RATING'] . " (+" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['CRITCHANCE'][0]['ATTRIBUTES']['PLUSPERCENT'] . "%)</td>";
  $tt .= "<td width=20></td>";
  $tt .= "<td class=\"stats_item stats_lbl\">Crit %:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['CRITCHANCE'][0]['ATTRIBUTES']['PERCENT'] . "</td>";
  $tt .= "</tr>";

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td class=\"stats_item stats_lbl\">Expertise:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['EXPERTISE'][0]['ATTRIBUTES']['RATING'] . " (+" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['EXPERTISE'][0]['ATTRIBUTES']['VALUE'] . ")</td>";
  $tt .= "<td width=20></td>";
  $tt .= "<td class=\"stats_item stats_lbl\">Exp %:</td><td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['MELEE'][0]['EXPERTISE'][0]['ATTRIBUTES']['PERCENT'] . "</td>";
  $tt .= "</tr>";
    
  $tt .= "</table>";

  $tt .= "</center></div>";
  $tt .= "</div>" . r;
  echo $tt;  
?>
