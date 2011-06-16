<?
  include("inc/parse.php");
  include("inc/armorylite.class.php");

  $_z = strtolower($_GET["z"]);
  $_r = strtolower($_GET["r"]);
  $_n = strtolower($_GET["n"]);
  if (!$_n) { $_n = "all"; }
  
  $GLOBALS["main_container"] = "armorylite_wide";
  $armorylite = new armorylite();
  $xmlparse = &new ParseXML;

  $dump = "<table width=100% class=sortable><tr class=searchgrid_head><th>&nbsp;Name&nbsp;</th><th>&nbsp;Class&nbsp;</th><th>&nbsp;Lvl&nbsp;</th><th>&nbsp;Faction&nbsp;</th><th>&nbsp;Guild&nbsp;</th><th>&nbsp;Server&nbsp;</th><th>&nbsp;Battlegroup&nbsp;</th><th>&nbsp;Seen&nbsp;</th><th>&nbsp;Region&nbsp;</th></tr>";

  switch ($_z) {
    case "cn":
      $armorylite->search_url = "http://cn.wowarmory.com/search.xml?searchQuery=" . strtolower(urlencode(stripslashes($_r))) . "&searchType=" . strtolower(urlencode(stripslashes($_n)));
      list ($ret, $raw_xml) = $armorylite->get_xml($armorylite->search_url, $_z, $_r, $_n, 7);
      $xml = $xmlparse->GetXMLTree($raw_xml);
      $armorylite->xml = $xml;

      if (is_array($armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'])) {
        foreach ( $armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'] as $pk => $pv ) {
          list ($a, $b) = split(" ", $pv['ATTRIBUTES']['LASTLOGINDATE']);
          $dump .= "<tr class=searchgrid_row>";
          $dump .= "<td class=searchgrid_col><A href=\"/cn/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['REALM']))) . "/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['NAME']))) . "\">" . $pv['ATTRIBUTES']['NAME'] . "</a></td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['CLASS'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['LEVEL'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['FACTION'] . "</td>";
          if ($pv['ATTRIBUTES']['GUILD'] == "") {
            $dump .= "<td class=searchgrid_col>--</td>";
          } else {
            $dump .= "<td class=searchgrid_col>&lt;" . $pv['ATTRIBUTES']['GUILD'] . "&gt;</td>";
          }
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['REALM'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['BATTLEGROUP'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $a . "</td>";
          $dump .= "<td class=searchgrid_col>CN</td>";
          $dump .= "</tr>";
        }
      }      
      break;

    case "tw":
      $armorylite->search_url = "http://tw.wowarmory.com/search.xml?searchQuery=" . strtolower(urlencode(stripslashes($_r))) . "&searchType=" . strtolower(urlencode(stripslashes($_n)));
      list ($ret, $raw_xml) = $armorylite->get_xml($armorylite->search_url, $_z, $_r, $_n, 7);
      $xml = $xmlparse->GetXMLTree($raw_xml);
      $armorylite->xml = $xml;

      if (is_array($armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'])) {
        foreach ( $armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'] as $pk => $pv ) {
          list ($a, $b) = split(" ", $pv['ATTRIBUTES']['LASTLOGINDATE']);
          $dump .= "<tr class=searchgrid_row>";
          $dump .= "<td class=searchgrid_col><A href=\"/tw/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['REALM']))) . "/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['NAME']))) . "\">" . $pv['ATTRIBUTES']['NAME'] . "</a></td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['CLASS'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['LEVEL'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['FACTION'] . "</td>";
          if ($pv['ATTRIBUTES']['GUILD'] == "") {
            $dump .= "<td class=searchgrid_col>--</td>";
          } else {
            $dump .= "<td class=searchgrid_col>&lt;" . $pv['ATTRIBUTES']['GUILD'] . "&gt;</td>";
          }
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['REALM'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['BATTLEGROUP'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $a . "</td>";
          $dump .= "<td class=searchgrid_col>TW</td>";
          $dump .= "</tr>";
        }
      }      
      break;

    case "kr":
      $armorylite->search_url = "http://kr.wowarmory.com/search.xml?searchQuery=" . strtolower(urlencode(stripslashes($_r))) . "&searchType=" . strtolower(urlencode(stripslashes($_n)));
      list ($ret, $raw_xml) = $armorylite->get_xml($armorylite->search_url, $_z, $_r, $_n, 7);
      $xml = $xmlparse->GetXMLTree($raw_xml);
      $armorylite->xml = $xml;

      if (is_array($armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'])) {
        foreach ( $armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'] as $pk => $pv ) {
          list ($a, $b) = split(" ", $pv['ATTRIBUTES']['LASTLOGINDATE']);
          $dump .= "<tr class=searchgrid_row>";
          $dump .= "<td class=searchgrid_col><A href=\"/kr/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['REALM']))) . "/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['NAME']))) . "\">" . $pv['ATTRIBUTES']['NAME'] . "</a></td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['CLASS'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['LEVEL'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['FACTION'] . "</td>";
          if ($pv['ATTRIBUTES']['GUILD'] == "") {
            $dump .= "<td class=searchgrid_col>--</td>";
          } else {
            $dump .= "<td class=searchgrid_col>&lt;" . $pv['ATTRIBUTES']['GUILD'] . "&gt;</td>";
          }
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['REALM'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['BATTLEGROUP'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $a . "</td>";
          $dump .= "<td class=searchgrid_col>KR</td>";
          $dump .= "</tr>";
        }
      }      
      break;

    case "us":
      $armorylite->search_url = "http://www.wowarmory.com/search.xml?searchQuery=" . strtolower(urlencode(stripslashes($_r))) . "&searchType=" . strtolower(urlencode(stripslashes($_n)));
      list ($ret, $raw_xml) = $armorylite->get_xml($armorylite->search_url, $_z, $_r, $_n, 7);
      $xml = $xmlparse->GetXMLTree($raw_xml);
      $armorylite->xml = $xml;

      if (is_array($armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'])) {
        foreach ( $armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'] as $pk => $pv ) {
          list ($a, $b) = split(" ", $pv['ATTRIBUTES']['LASTLOGINDATE']);
          $dump .= "<tr class=searchgrid_row>";
          $dump .= "<td class=searchgrid_col><A href=\"/us/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['REALM']))) . "/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['NAME']))) . "\">" . $pv['ATTRIBUTES']['NAME'] . "</a></td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['CLASS'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['LEVEL'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['FACTION'] . "</td>";
          if ($pv['ATTRIBUTES']['GUILD'] == "") {
            $dump .= "<td class=searchgrid_col>--</td>";
          } else {
            $dump .= "<td class=searchgrid_col>&lt;" . $pv['ATTRIBUTES']['GUILD'] . "&gt;</td>";
          }
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['REALM'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['BATTLEGROUP'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $a . "</td>";
          $dump .= "<td class=searchgrid_col>US</td>";
          $dump .= "</tr>";
        }
      }      
      break;
      
    case "eu":
      $armorylite->search_url = "http://eu.wowarmory.com/search.xml?searchQuery=" . strtolower(urlencode(stripslashes($_r))) . "&searchType=" . strtolower(urlencode(stripslashes($_n)));
      list ($ret, $raw_xml) = $armorylite->get_xml($armorylite->search_url, $_z, $_r, $_n, 7);
      $xml = $xmlparse->GetXMLTree($raw_xml);
      $armorylite->xml = $xml;

      if (is_array($armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'])) {
        foreach ( $armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'] as $pk => $pv ) {
          list ($a, $b) = split(" ", $pv['ATTRIBUTES']['LASTLOGINDATE']);
          $dump .= "<tr class=searchgrid_row>";
          $dump .= "<td class=searchgrid_col><A href=\"/eu/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['REALM']))) . "/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['NAME']))) . "\">" . $pv['ATTRIBUTES']['NAME'] . "</a></td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['CLASS'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['LEVEL'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['FACTION'] . "</td>";
          if ($pv['ATTRIBUTES']['GUILD'] == "") {
            $dump .= "<td class=searchgrid_col>--</td>";
          } else {
            $dump .= "<td class=searchgrid_col>&lt;" . $pv['ATTRIBUTES']['GUILD'] . "&gt;</td>";
          }
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['REALM'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['BATTLEGROUP'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $a . "</td>";
          $dump .= "<td class=searchgrid_col>EU</td>";
          $dump .= "</tr>";
        }
      }      
      break;
      
    case "all":
      $armorylite->search_url = "http://www.wowarmory.com/search.xml?searchQuery=" . strtolower(urlencode(stripslashes($_r))) . "&searchType=" . strtolower(urlencode(stripslashes($_n)));
      list ($ret, $raw_xml) = $armorylite->get_xml($armorylite->search_url, $_z, $_r, $_n, 7);
      $xml = $xmlparse->GetXMLTree($raw_xml);
      $armorylite->xml = $xml;

      if (is_array($armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'])) {
        foreach ( $armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'] as $pk => $pv ) {
          list ($a, $b) = split(" ", $pv['ATTRIBUTES']['LASTLOGINDATE']);
          $dump .= "<tr class=searchgrid_row>";
          $dump .= "<td class=searchgrid_col><A href=\"/us/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['REALM']))) . "/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['NAME']))) . "\">" . $pv['ATTRIBUTES']['NAME'] . "</a></td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['CLASS'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['LEVEL'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['FACTION'] . "</td>";
          if ($pv['ATTRIBUTES']['GUILD'] == "") {
            $dump .= "<td class=searchgrid_col>--</td>";
          } else {
            $dump .= "<td class=searchgrid_col>&lt;" . $pv['ATTRIBUTES']['GUILD'] . "&gt;</td>";
          }
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['REALM'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['BATTLEGROUP'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $a . "</td>";
          $dump .= "<td class=searchgrid_col>US</td>";
          $dump .= "</tr>";
        }
      }      
      
      $armorylite->search_url = "http://armory.wow-europe.com/search.xml?searchQuery=" . strtolower(urlencode(stripslashes($_r))) . "&searchType=" . strtolower(urlencode(stripslashes($_n)));
      list ($ret, $raw_xml) = $armorylite->get_xml($armorylite->search_url, $_z, $_r, $_n, 7);
      $xml = $xmlparse->GetXMLTree($raw_xml);
      $armorylite->xml = $xml;

      if (is_array($armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'])) {
        foreach ( $armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'] as $pk => $pv ) {
          list ($a, $b) = split(" ", $pv['ATTRIBUTES']['LASTLOGINDATE']);
          $dump .= "<tr class=searchgrid_row>";
          $dump .= "<td class=searchgrid_col><A href=\"/eu/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['REALM']))) . "/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['NAME']))) . "\">" . $pv['ATTRIBUTES']['NAME'] . "</a></td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['CLASS'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['LEVEL'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['FACTION'] . "</td>";
          if ($pv['ATTRIBUTES']['GUILD'] == "") {
            $dump .= "<td class=searchgrid_col>--</td>";
          } else {
            $dump .= "<td class=searchgrid_col>&lt;" . $pv['ATTRIBUTES']['GUILD'] . "&gt;</td>";
          }
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['REALM'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['BATTLEGROUP'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $a . "</td>";
          $dump .= "<td class=searchgrid_col>EU</td>";
          $dump .= "</tr>";
        }
      }      

      $armorylite->search_url = "http://kr.wowarmory.com/search.xml?searchQuery=" . strtolower(urlencode(stripslashes($_r))) . "&searchType=" . strtolower(urlencode(stripslashes($_n)));
      list ($ret, $raw_xml) = $armorylite->get_xml($armorylite->search_url, $_z, $_r, $_n, 7);
      $xml = $xmlparse->GetXMLTree($raw_xml);
      $armorylite->xml = $xml;

      if (is_array($armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'])) {
        foreach ( $armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'] as $pk => $pv ) {
          list ($a, $b) = split(" ", $pv['ATTRIBUTES']['LASTLOGINDATE']);
          $dump .= "<tr class=searchgrid_row>";
          $dump .= "<td class=searchgrid_col><A href=\"/kr/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['REALM']))) . "/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['NAME']))) . "\">" . $pv['ATTRIBUTES']['NAME'] . "</a></td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['CLASS'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['LEVEL'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['FACTION'] . "</td>";
          if ($pv['ATTRIBUTES']['GUILD'] == "") {
            $dump .= "<td class=searchgrid_col>--</td>";
          } else {
            $dump .= "<td class=searchgrid_col>&lt;" . $pv['ATTRIBUTES']['GUILD'] . "&gt;</td>";
          }
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['REALM'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['BATTLEGROUP'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $a . "</td>";
          $dump .= "<td class=searchgrid_col>KR</td>";
          $dump .= "</tr>";
        }
      }     

      $armorylite->search_url = "http://tw.wowarmory.com/search.xml?searchQuery=" . strtolower(urlencode(stripslashes($_r))) . "&searchType=" . strtolower(urlencode(stripslashes($_n)));
      list ($ret, $raw_xml) = $armorylite->get_xml($armorylite->search_url, $_z, $_r, $_n, 7);
      $xml = $xmlparse->GetXMLTree($raw_xml);
      $armorylite->xml = $xml;

      if (is_array($armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'])) {
        foreach ( $armorylite->xml['PAGE'][0]['ARMORYSEARCH'][0]['SEARCHRESULTS'][0]['CHARACTERS'][0]['CHARACTER'] as $pk => $pv ) {
          list ($a, $b) = split(" ", $pv['ATTRIBUTES']['LASTLOGINDATE']);
          $dump .= "<tr class=searchgrid_row>";
          $dump .= "<td class=searchgrid_col><A href=\"/tw/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['REALM']))) . "/" . strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['NAME']))) . "\">" . $pv['ATTRIBUTES']['NAME'] . "</a></td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['CLASS'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['LEVEL'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['FACTION'] . "</td>";
          if ($pv['ATTRIBUTES']['GUILD'] == "") {
            $dump .= "<td class=searchgrid_col>--</td>";
          } else {
            $dump .= "<td class=searchgrid_col>&lt;" . $pv['ATTRIBUTES']['GUILD'] . "&gt;</td>";
          }
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['REALM'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $pv['ATTRIBUTES']['BATTLEGROUP'] . "</td>";
          $dump .= "<td class=searchgrid_col>" . $a . "</td>";
          $dump .= "<td class=searchgrid_col>TW</td>";
          $dump .= "</tr>";
        }
      }     
      break;
  }

  $dump .= "</table>";
  
  $page_title = "Search Results";
  $GLOBALS["loader"] = " onload=\"profileupdater()\" ";
  include("inc/corp_header.php");
?>

<script language="javascript" type="text/javascript" src="/inc/power.php"></script>

<table border="0" width="100%">
  <tr valign="top">
    <td>
      <div class="imghead"><img src="/images/results.gif" alt="Search Results" width="200" height="25"></div>
      <div class="hr"></div>

      <div class="blog2">

        <form name="_search" onSubmit="location.href='/search/'+document._search._country[document._search._country.selectedIndex].value+'/'+document._search._name.value; return false;">
        <div class="corp_box2">
          <div class="corp_box_buffer">
            <div class="breaker"></div>
            <div class="arm_box">
              <div class="arm_box_top">
                <span id="box_ele">
                <select class="w9" name="_country">
                  <option <? (($_z=="all") ? " selected ":""); ?> value="all">All</option>
                  <option <? (($_z=="us") ? " selected ":""); ?> value="us">US</option>
                  <option <? (($_z=="eu") ? " selected ":""); ?> value="eu">EU</option>
                  <option <? (($_z=="tw") ? " selected ":""); ?> value="tw">TW</option>
                  <option <? (($_z=="kr") ? " selected ":""); ?> value="kr">KR</option>
                  <option <? (($_z=="cn") ? " selected ":""); ?> value="cn">CN</option>
                </select>
                </span>
                <span id="box_ele">
                  <input value="<?=ucwords(stripslashes($_r));?>" class="w13" type="text" id="login" name="_name" maxlength="20" size="10" value="Search" onFocus="ghost_txt_inc(this, 'Search', 'login_on')" onBlur="ghost_txt_out(this, 'Search', 'login')">
                </span>
              </div>
            </div>        
            <div class="breaker"></div>
          </div>
        </div>
        </form>  
              
        Searching for <b>'<?=ucwords(stripslashes($_r))?>'</b> in <b>'<?=strtoupper($_z);?>'</b>.
        If you'd like to revise your search results, use the form above to change your search criteria.
        We've also included Powered By links for characters we have information on to help you find people easier.
        <p>
        
        <div id="content">
          <div class="row">
            <?=$dump;?>
          </div>
        </div>

      </div>

    </td>
    
    <td width="5">&nbsp;</td>
	
  </tr> 
</table>

<?
  include("inc/corp_footer.php");
?>
