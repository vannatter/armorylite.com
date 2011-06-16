<?
  $tt = "<div id=\"stats_arena\" class=\"stats\">";
  $tt .= "<div id=\"stats_arena_head\" class=\"stats_head_off\" onClick=\"stat_show('stats_arena_main','stats_arena_head')\">Arena Statistics</div>";
  $tt .= "<div style=\"display: none;\" id=\"stats_arena_main\" class=\"stats_main\"><center>";

  if (is_array($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ARENATEAMS'])) {
    $tt .= "<table width=\"380\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"stats_item\">";
    foreach ( $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ARENATEAMS'][0]['ARENATEAM'] as $pkey => $pvalue ) {

      $tt .= "<tr class=\"stats_item\">";
      $tt .= "<td class=\"stats_item stats_lbl\">Team:</td>";
      if ($this->anon) {
        $tt .= "<td colspan=10 class=\"stats_item stats_val\">Anonymous</td>";
      } else {
        $tt .= "<td colspan=10 class=\"stats_item stats_val\">" . utf8_encode($pvalue['ATTRIBUTES']['NAME']) . "</td>";
      }
      $tt .= "</tr>";

      $tt .= "<tr class=\"stats_item\">";
      $tt .= "<td class=\"stats_item stats_lbl\">Bracket:</td>";
      $tt .= "<td class=\"stats_item stats_val\">" . $pvalue['ATTRIBUTES']['SIZE'] . "v" . $pvalue['ATTRIBUTES']['SIZE'] . "</td>";
      $tt .= "<td class=\"stats_item stats_lbl\"></td>";
      $tt .= "<td class=\"stats_item stats_lbl\">Ratio:</td>";
      $tt .= "<td class=\"stats_item stats_val\">" . $pvalue['ATTRIBUTES']['SEASONGAMESWON'] . "/" . $pvalue['ATTRIBUTES']['SEASONGAMESPLAYED'] . "</td>";
      $tt .= "<td class=\"stats_item stats_lbl\"></td>";
      $tt .= "<td class=\"stats_item stats_lbl\">Rating:</td>";
      $tt .= "<td class=\"stats_item stats_val\">" . $pvalue['ATTRIBUTES']['RATING'] . "</td>";
      $tt .= "<td class=\"stats_item stats_lbl\"></td>";
      $tt .= "<td class=\"stats_item stats_lbl\">Rank:</td>";
      $tt .= "<td class=\"stats_item stats_val\">" . $pvalue['ATTRIBUTES']['RANKING'] . "</td>";
      $tt .= "</tr>";

      $tt .= "<tr class=\"stats_item\"><td colspan=11>&nbsp;</td></tr>";
    }
    $tt .= "</table>";
  }

  $tt .= "</center></div>";
  $tt .= "</div>" . r;
  echo $tt;  
?>
