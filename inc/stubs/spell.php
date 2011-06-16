<?
  $tt = "<div id=\"stats_spell\" class=\"stats\">";

  if ($this->spell_on == true) {
    $tt .= "<div id=\"stats_spell_head\" class=\"stats_head_on\" onClick=\"stat_show('stats_spell_main','stats_spell_head')\">Spell Statistics</div>";
    $tt .= "<div id=\"stats_spell_main\" class=\"stats_main\"><center>";
  } else {
    $tt .= "<div id=\"stats_spell_head\" class=\"stats_head_off\" onClick=\"stat_show('stats_spell_main','stats_spell_head')\">Spell Statistics</div>";
    $tt .= "<div style=\"display: none;\" id=\"stats_spell_main\" class=\"stats_main\"><center>";
  }
  
  $tt .= "<table width=\"380\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"stats_item\">";
  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td width=60 class=\"stats_item stats_lbl\">Damage:</td>";
  $tt .= "<td class=\"stats_item stats_val arcane\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['SPELL'][0]['BONUSDAMAGE'][0]['ARCANE'][0]['ATTRIBUTES']['VALUE'] . "Ar</td>";
  $tt .= "<td class=\"stats_item stats_val fire\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['SPELL'][0]['BONUSDAMAGE'][0]['FIRE'][0]['ATTRIBUTES']['VALUE'] . "Fi</td>";
  $tt .= "<td class=\"stats_item stats_val frost\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['SPELL'][0]['BONUSDAMAGE'][0]['FROST'][0]['ATTRIBUTES']['VALUE'] . "Fr</td>";
  $tt .= "<td class=\"stats_item stats_val holy\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['SPELL'][0]['BONUSDAMAGE'][0]['HOLY'][0]['ATTRIBUTES']['VALUE'] . "Ho</td>";
  $tt .= "<td class=\"stats_item stats_val nature\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['SPELL'][0]['BONUSDAMAGE'][0]['NATURE'][0]['ATTRIBUTES']['VALUE'] . "Na</td>";
  $tt .= "<td class=\"stats_item stats_val shadow\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['SPELL'][0]['BONUSDAMAGE'][0]['SHADOW'][0]['ATTRIBUTES']['VALUE'] . "Sh</td>";
  $tt .= "</tr>";
  $tt .= "</table>";

  $tt .= "<table width=\"380\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"stats_item\">";

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td width=60 class=\"stats_item stats_lbl\">Healing:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['SPELL'][0]['BONUSHEALING'][0]['ATTRIBUTES']['VALUE'] . "</td>";
  $tt .= "<td class=\"stats_item stats_lbl\">Hit Rating:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['SPELL'][0]['HITRATING'][0]['ATTRIBUTES']['VALUE'] . " (+" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['SPELL'][0]['HITRATING'][0]['ATTRIBUTES']['INCREASEDHITPERCENT'] . "%)</td>";
  $tt .= "</tr>";

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td width=60 class=\"stats_item stats_lbl\">Crit %:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['SPELL'][0]['CRITCHANCE'][0]['HOLY'][0]['ATTRIBUTES']['PERCENT'] . "</td>";
  $tt .= "<td class=\"stats_item stats_lbl\">Crit Rating:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['SPELL'][0]['CRITCHANCE'][0]['ATTRIBUTES']['RATING'] . "</td>";
  $tt .= "</tr>";

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td width=60 class=\"stats_item stats_lbl\">Regen:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['SPELL'][0]['MANAREGEN'][0]['ATTRIBUTES']['CASTING'] . "/" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['SPELL'][0]['MANAREGEN'][0]['ATTRIBUTES']['NOTCASTING'] . "</td>";
  $tt .= "<td class=\"stats_item stats_lbl\">Penetration:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['SPELL'][0]['PENETRATION'][0]['ATTRIBUTES']['VALUE'] . "</td>";
  $tt .= "</tr>";

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td class=\"stats_item stats_lbl\">Haste %:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['SPELL'][0]['HASTERATING'][0]['ATTRIBUTES']['HASTEPERCENT'] . "</td>";
  $tt .= "<td width=60 class=\"stats_item stats_lbl\"><nobr>Haste Rating:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['SPELL'][0]['HASTERATING'][0]['ATTRIBUTES']['HASTERATING'] . "</td>";
  $tt .= "</tr>";
  
  $tt .= "</table>";

  $tt .= "</center></div>";
  $tt .= "</div>" . r;
  echo $tt;
?>
