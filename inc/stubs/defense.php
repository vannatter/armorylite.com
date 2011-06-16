<?
  $tt = "<div id=\"stats_defense\" class=\"stats\">";
  $tt .= "<div id=\"stats_defense_head\" class=\"stats_head_off\" onClick=\"stat_show('stats_defense_main','stats_defense_head')\">Defense Statistics</div>";
  $tt .= "<div style=\"display: none;\" id=\"stats_defense_main\" class=\"stats_main\"><center>";

  $tt .= "<table width=\"380\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"stats_item\">";

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td class=\"stats_item stats_lbl\">Armor:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['DEFENSES'][0]['ARMOR'][0]['ATTRIBUTES']['EFFECTIVE'] . " (" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['DEFENSES'][0]['ARMOR'][0]['ATTRIBUTES']['PERCENT'] . "%)</td>";
  $tt .= "<td class=\"stats_item stats_lbl\">Resilience:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['DEFENSES'][0]['RESILIENCE'][0]['ATTRIBUTES']['VALUE'] . "</td>";
  $tt .= "</tr>";

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td class=\"stats_item stats_lbl\">Defense:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . ($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['DEFENSES'][0]['DEFENSE'][0]['ATTRIBUTES']['VALUE']+$this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['DEFENSES'][0]['DEFENSE'][0]['ATTRIBUTES']['PLUSDEFENSE']) . " (-+" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['DEFENSES'][0]['DEFENSE'][0]['ATTRIBUTES']['INCREASEPERCENT'] . "%)</td>";
  $tt .= "<td class=\"stats_item stats_lbl\">Def Rating:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['DEFENSES'][0]['DEFENSE'][0]['ATTRIBUTES']['RATING'] . " (+" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['DEFENSES'][0]['DEFENSE'][0]['ATTRIBUTES']['PLUSDEFENSE'] . ")</td>";
  $tt .= "</tr>";

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td class=\"stats_item stats_lbl\">Dodge %:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['DEFENSES'][0]['DODGE'][0]['ATTRIBUTES']['PERCENT'] . "</td>";
  $tt .= "<td class=\"stats_item stats_lbl\">Dodge Rating:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['DEFENSES'][0]['DODGE'][0]['ATTRIBUTES']['RATING'] . " (+" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['DEFENSES'][0]['DODGE'][0]['ATTRIBUTES']['INCREASEPERCENT'] . "%)</td>";
  $tt .= "</tr>";

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td class=\"stats_item stats_lbl\">Parry %:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['DEFENSES'][0]['PARRY'][0]['ATTRIBUTES']['PERCENT'] . "</td>";
  $tt .= "<td class=\"stats_item stats_lbl\">Parry Rating:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['DEFENSES'][0]['PARRY'][0]['ATTRIBUTES']['RATING'] . " (+" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['DEFENSES'][0]['PARRY'][0]['ATTRIBUTES']['INCREASEPERCENT'] . "%)</td>";
  $tt .= "</tr>";

  $tt .= "<tr class=\"stats_item\">";
  $tt .= "<td class=\"stats_item stats_lbl\">Block %:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['DEFENSES'][0]['BLOCK'][0]['ATTRIBUTES']['PERCENT'] . "</td>";
  $tt .= "<td class=\"stats_item stats_lbl\">Block Rating:</td>";
  $tt .= "<td class=\"stats_item stats_val\">" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['DEFENSES'][0]['BLOCK'][0]['ATTRIBUTES']['RATING'] . " (+" . $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['DEFENSES'][0]['BLOCK'][0]['ATTRIBUTES']['INCREASEPERCENT'] . "%)</td>";
  $tt .= "</tr>";

  $tt .= "</table>";

  $tt .= "</center></div>";
  $tt .= "</div>" . r;
  echo $tt;  
?>
