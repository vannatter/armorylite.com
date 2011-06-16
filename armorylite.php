<?
  $GLOBALS["is_cached"] = false;
  $GLOBALS["cache_id"] = 0;
  $GLOBALS["error_ad"] = false;
  include("inc/parse.php");
  include("inc/armorylite.class.php");

  $armorylite = new armorylite();
  $xmlparse = &new ParseXML;

  $_z = trim($_GET["z"]);
  $_r = trim($_GET["r"]);
  $_n = trim($_GET["n"]);
  $_p = trim($_GET["p"]);
  $_x = trim($_GET["x"]);

  $armorylite->z = $_z;
  $armorylite->r = $_r;
  $armorylite->n = $_n;
  $armorylite->x = $_x;
  $armorylite->lite_url = "/" . strtolower(urlencode(stripslashes($_z))) . "/" . strtolower(urlencode(stripslashes($_r))) . "/" . strtolower(urlencode(stripslashes($_n)));
  
  if ($_z == "xx") {
    $_anonid = $_n;
    list ($_z, $_r, $_n) = $armorylite->anon_getcharacterinfo($_anonid);

    if (!$_z) {
      header("location: /?no_anon_found");
      exit;
    } else {
      $armorylite->anon = true;
      $armorylite->z = $_z;
      $armorylite->r = $_r;
      $armorylite->n = $_n;
      $armorylite->x = $_x;
      $armorylite->lite_url = "/anon/" . $_anonid;
    }
  }

  $armorylite->chid = $armorylite->get_characterid($_z, $_r, $_n);
  
  switch (strtolower($_z)) {
    case "us":
      $armorylite->main_url = "http://www.wowarmory.com/character-sheet.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->talent_url = "http://www.wowarmory.com/character-talents.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->rep_url = "http://www.wowarmory.com/character-reputation.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->skill_url = "http://www.wowarmory.com/character-skills.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->guild_url = "http://www.wowarmory.com/guild-info.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=";
      $armorylite->arena_url = "http://www.wowarmory.com/character-arenateams.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->achieve_url = "http://www.wowarmory.com/character-achievements.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n))) . (($_x!="") ? "&c=".strtolower(urlencode(stripslashes($_x))) : "");
      $armorylite->stat_url = "http://www.wowarmory.com/character-statistics.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n))) . (($_x!="") ? "&c=".strtolower(urlencode(stripslashes($_x))) : "");
      break;
    case "eu":
      $armorylite->main_url = "http://eu.wowarmory.com/character-sheet.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->talent_url = "http://eu.wowarmory.com/character-talents.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->rep_url = "http://eu.wowarmory.com/character-reputation.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->skill_url = "http://eu.wowarmory.com/character-skills.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->guild_url = "http://eu.wowarmory.com/guild-info.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=";
      $armorylite->arena_url = "http://eu.wowarmory.com/character-arenateams.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->achieve_url = "http://eu.wowarmory.com/character-achievements.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n))) . (($_x!="") ? "&c=".strtolower(urlencode(stripslashes($_x))) : "");
      $armorylite->stat_url = "http://eu.wowarmory.com/character-statistics.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n))) . (($_x!="") ? "&c=".strtolower(urlencode(stripslashes($_x))) : "");
      break;
    case "kr":
      $armorylite->main_url = "http://kr.wowarmory.com/character-sheet.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->talent_url = "http://kr.wowarmory.com/character-talents.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->rep_url = "http://kr.wowarmory.com/character-reputation.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->skill_url = "http://kr.wowarmory.com/character-skills.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->guild_url = "http://kr.wowarmory.com/guild-info.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=";
      $armorylite->arena_url = "http://kr.wowarmory.com/character-arenateams.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->achieve_url = "http://kr.wowarmory.com/character-achievements.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n))) . (($_x!="") ? "&c=".strtolower(urlencode(stripslashes($_x))) : "");
      $armorylite->stat_url = "http://kr.wowarmory.com/character-statistics.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n))) . (($_x!="") ? "&c=".strtolower(urlencode(stripslashes($_x))) : "");
      break;
    case "tw":
      $armorylite->main_url = "http://tw.wowarmory.com/character-sheet.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->talent_url = "http://tw.wowarmory.com/character-talents.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->rep_url = "http://tw.wowarmory.com/character-reputation.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->skill_url = "http://tw.wowarmory.com/character-skills.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->guild_url = "http://tw.wowarmory.com/guild-info.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=";
      $armorylite->arena_url = "http://tw.wowarmory.com/character-arenateams.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->achieve_url = "http://tw.wowarmory.com/character-achievements.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n))) . (($_x!="") ? "&c=".strtolower(urlencode(stripslashes($_x))) : "");
      $armorylite->stat_url = "http://tw.wowarmory.com/character-statistics.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n))) . (($_x!="") ? "&c=".strtolower(urlencode(stripslashes($_x))) : "");
      break;
    case "cn":
      $armorylite->main_url = "http://cn.wowarmory.com/character-sheet.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->talent_url = "http://cn.wowarmory.com/character-talents.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->rep_url = "http://cn.wowarmory.com/character-reputation.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->skill_url = "http://cn.wowarmory.com/character-skills.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->guild_url = "http://cn.wowarmory.com/guild-info.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=";
      $armorylite->arena_url = "http://cn.wowarmory.com/character-arenateams.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
      $armorylite->achieve_url = "http://cn.wowarmory.com/character-achievements.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n))) . (($_x!="") ? "&c=".strtolower(urlencode(stripslashes($_x))) : "");
      $armorylite->stat_url = "http://cn.wowarmory.com/character-statistics.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n))) . (($_x!="") ? "&c=".strtolower(urlencode(stripslashes($_x))) : "");
      break;
  }

  switch (strtolower($_p)) {
  
    case "anonymize":
      $_anonid = $armorylite->anon_create($armorylite->chid);
      header("location: http://armorylite.com/anon/".$_anonid."/");
      break;
    
    case "donate":    
      header("location: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=dustin%40vannatter%2ecom&item_name=Armorylite%2ecom&no_shipping=0&cn=Suggestions%2c%20Comments%2c%20Etc%2e&tax=0&currency_code=USD&lc=US&bn=PP%2dDonationsBF&charset=UTF%2d8");
      break;

    case "style":    
      switch ($_x) {
        case "img-y":
          setcookie("armorylite_img", "y", time()+31536000, "/");    
          break;
        case "img-n":
          setcookie("armorylite_img", "n", time()+31536000, "/");    
          break;
        case "d":
          setcookie("armorylite_style", "d", time()+31536000, "/");    
          break;
        case "l":
          setcookie("armorylite_style", "l", time()+31536000, "/");    
          break;
      }
      header("location: ".$armorylite->lite_url);
      break;


    case "my":
      ### this is the my logic for tracking saved profiles; we should treat these as gear-only views, all other
      ### views should go to the basic user pages..
      
      $armorylite->is_saved = true;      
      
      $dx = $armorylite->data_saved_getitem($armorylite->chid, $_x);

      if ($dx) {
        $armorylite->sav_content = $dx;
        $unzipped_xml = @gzuncompress($dx["XML"]);
      
        $xml = $xmlparse->GetXMLTree($unzipped_xml);
        $armorylite->xml = $xml;
        if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
          $GLOBALS["error_ad"] = true;
          $armorylite->print_header_info();
          echo "<br /><br /><br /><div class=sub3>Armory Error - [[my.1] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";    
          $armorylite->print_footer_info();
        } else {
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PVP'][0]['LIFETIMEHONORABLEKILLS'][0]['ATTRIBUTES']['VALUE'] == "") {
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            if ($armorylite->anon) {
              echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [my.1]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
            } else {
              echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [my.1]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
            }
            $armorylite->print_footer_info();
          } else {
            $armorylite->print_header_info();
            $armorylite->print_main_info($GLOBALS["cache_id"]);
            $armorylite->print_footer_info();
          }
        }
      } else {
        $GLOBALS["error_ad"] = true;
        $armorylite->print_header_info();
        echo "<br /><br /><br /><div class=sub3>Armory Error - [my.2] Invalid saved data, please try again.</div>";    
        $armorylite->print_footer_info();
      }


      break;

      
    ###########################################################################################
    ### notes logic ###########################################################################
    ###########################################################################################
    case "notes":
      $armorylite->active_url = $armorylite->main_url;
      $armorylite->page = "m";
      list ($_returncode, $_cacheid, $_cachedate, $_cachexml) = $armorylite->check_cache($_z, $_r, $_n, 1);

      switch ($_returncode) {
        case "1":
          ## cache good, use cache..        
          $xml = $xmlparse->GetXMLTree($_cachexml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[n.1] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";    
            $armorylite->print_footer_info();
          } else {
            if ($xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PVP'][0]['LIFETIMEHONORABLEKILLS'][0]['ATTRIBUTES']['VALUE'] == "") {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [n.1]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [n.1]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              $armorylite->print_header_info();
              $armorylite->print_notes_info($GLOBALS["cache_id"]);
              $armorylite->print_footer_info();
            }
          }
          break;
          
        case "2":
          ## cache old, get new from armory and cache it..
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->main_url, $_z, $_r, $_n, 1);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[n.2] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";
            $armorylite->print_footer_info();
          } else {
            if ($xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PVP'][0]['LIFETIMEHONORABLEKILLS'][0]['ATTRIBUTES']['VALUE'] == "") {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [n.2]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [n.2]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 1);
              $armorylite->print_header_info();
              $armorylite->print_notes_info($cache_id);
              $armorylite->print_footer_info();
            }
          }
          break;

        case "0":
          ## no cache, get new from armory and cache it..
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->main_url, $_z, $_r, $_n, 1);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[n.0] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";    
            $armorylite->print_footer_info();
          } else {
            if ($xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PVP'][0]['LIFETIMEHONORABLEKILLS'][0]['ATTRIBUTES']['VALUE'] == "") {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [n.0]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [n.0]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 1);
              $armorylite->print_header_info();
              $armorylite->print_notes_info($cache_id);
              $armorylite->print_footer_info();
            }
          }
          break;
      }
      break;  


    ###########################################################################################
    ### force logic ###########################################################################
    ###########################################################################################
    case "force":
      $armorylite->page = $_x;

      switch ($_x) {
        case "g":
          list ($_g_returncode, $_g_cacheid, $_g_cachedate, $_g_cachexml) = $armorylite->check_cache($_z, $_r, $_n, 1);
          switch ($_g_returncode) {
            case "0":
              ## nothing found, we need to error out...
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              echo "<br /><br /><br /><div class=sub3>Armory Error - [No data found] - Make sure your <A href=\"" . $armorylite->lite_url . "\">Main Profile</a> is cached first.</div>";
              $armorylite->print_footer_info();
              exit;
              break;
            default:
              ## something found, lets use it...                       
              $g_xml = $xmlparse->GetXMLTree($_g_cachexml);
              if ($g_xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
                $GLOBALS["error_ad"] = true;
                $armorylite->print_header_info();
                echo "<br /><br /><br /><div class=sub3>Armory Error - [[f.g] " . $g_xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";
                $armorylite->print_footer_info();
                exit;
              } else {
                if ($g_xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PVP'][0]['LIFETIMEHONORABLEKILLS'][0]['ATTRIBUTES']['VALUE'] == "") {
                  $GLOBALS["error_ad"] = true;
                  $armorylite->print_header_info();
                  echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [force.g.2.0]]</div>";
                  $armorylite->print_footer_info();
                  exit;
                } else {
                  ## valid data..
                  $armorylite->guild_name = $g_xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['GUILDNAME'];
                }
              }
              break;
          }
          $armorylite->guild_url = $armorylite->guild_url . strtolower(urlencode(stripslashes($armorylite->guild_name))) . "&p=1";

          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->guild_url, $_z, $_r, strtolower(urlencode(stripslashes($armorylite->guild_name))), 5);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;

          if (!$xml['PAGE'][0]['GUILDINFO'][0]['GUILDHEADER'][0]['ATTRIBUTES']['NAME']) {
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            if ($armorylite->anon) {
              echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [force.g.k]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";
            } else {
              echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [force.g.o]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";
            }
            $armorylite->print_footer_info();
          } else {
            list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 5);
            $armorylite->delete_guild($old_cache_id);
            $guild_id = $armorylite->parse_guild($_z, $cache_id);
            header("location: ".$armorylite->lite_url."/g");
          }
          break;

        case "s":
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->skill_url, $_z, $_r, $_n, 4);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[f.s] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";
            $armorylite->print_footer_info();
          } else {
            if (!is_array($xml['PAGE'][0]['CHARACTERINFO'][0]['SKILLTAB'][0]['SKILLCATEGORY'])) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [force.s]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [force.s]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->skill_url . "\">Armory data</a> is valid?)</div>";
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 4);
              header("location: ".$armorylite->lite_url."/s");
            }
          }
          break;

        case "t":
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->talent_url, $_z, $_r, $_n, 2);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[f.t] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";
            $armorylite->print_footer_info();
          } else {
            if (!$xml['PAGE'][0]['CHARACTERINFO'][0]['TALENTGROUPS'][0]['TALENTGROUP'][0]['ATTRIBUTES']['GROUP']) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [force.t]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [force.t]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->talent_url . "\">Armory data</a> is valid?)</div>";
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 2);
              header("location: ".$armorylite->lite_url."/t");
            }
          }
          break;

        case "a":
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->arena_url, $_z, $_r, $_n, 6);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[f.a] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";
            $armorylite->print_footer_info();
          } else {
            if (!$xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['NAME']) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [force.a]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [force.a]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->arena_url . "\">Armory data</a> is valid?)</div>";
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 6);
              header("location: ".$armorylite->lite_url."/a");
            }
          }
          break;
          
        case "r":
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->rep_url, $_z, $_r, $_n, 3);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[f.r] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";
            $armorylite->print_footer_info();
          } else {
            if (!is_array($xml['PAGE'][0]['CHARACTERINFO'][0]['REPUTATIONTAB'][0]['FACTIONCATEGORY'])) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [force.r]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [force.r]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->rep_url . "\">Armory data</a> is valid?)</div>";
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 3);
              header("location: ".$armorylite->lite_url."/r");
            }
          }
          break;

        default:
        
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->main_url, $_z, $_r, $_n, 1);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;

          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[f.d] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . " [d]]</div>";
            $armorylite->print_footer_info();
          } else {
            if ($xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PVP'][0]['LIFETIMEHONORABLEKILLS'][0]['ATTRIBUTES']['VALUE'] == "") {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [force.m]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [force.m]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->main_url . "\">Armory data</a> is valid?)</div>";
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 1);
              header("location: ".$armorylite->lite_url);
            }
          }
          break;
      }
      break;    

    ###########################################################################################
    ### guild logic ###########################################################################
    ###########################################################################################
    case "guild":

      $armorylite->active_url = $armorylite->guild_url;
      $armorylite->page = "g";
      list ($_returncode, $_cacheid, $_cachedate, $_cachexml) = $armorylite->check_cache($_z, $_r, $_n, 5);

      switch ($_returncode) {
        #####################################################################################################
        case "1":
        #####################################################################################################

          ## use cache and dont reparse guild..
          $xml = $xmlparse->GetXMLTree($_cachexml);
          $armorylite->xml = $xml;
          
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[g.1x] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";    
            $armorylite->print_footer_info();
          } else {
            if (!$xml['PAGE'][0]['GUILDINFO'][0]['GUILDHEADER'][0]['ATTRIBUTES']['NAME']) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [g.1y]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [g.1z]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              $guild_id = $armorylite->get_guild_id($_cacheid);
              $armorylite->print_header_info("Armory Lite for &lt;" . ucwords(stripslashes($xml['PAGE'][0]['GUILDINFO'][0]['GUILDHEADER'][0]['ATTRIBUTES']['NAME'])) . "&gt;");
              $armorylite->print_guild_info($_cacheid, $guild_id);
              $armorylite->print_footer_info();
            }
          }
          break;          

        #####################################################################################################
        case "2":
        #####################################################################################################

          ## cache old, get new from armory and cache it reparse guild..
          ## first we need to make sure we have other data cached; we need to get the guild_name
          ## from the other cache so we can properly get to the guild..
          list ($_g_returncode, $_g_cacheid, $_g_cachedate, $_g_cachexml) = $armorylite->check_cache($_z, $_r, $_n, 1);
          switch ($_g_returncode) {
            case "0":
              ## nothing found, we need to error out...
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [No data found] - Make sure your Main Profile is cached first.</div>";
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [No data found] - Make sure your <A href=\"" . $armorylite->lite_url . "\">Main Profile</a> is cached first.</div>";
              }
              $armorylite->print_footer_info();
              exit;
              break;
            default:
              ## something found, lets use it...                       
              $g_xml = $xmlparse->GetXMLTree($_g_cachexml);
              if ($g_xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
                $GLOBALS["error_ad"] = true;
                $armorylite->print_header_info();
                echo "<br /><br /><br /><div class=sub3>Armory Error - [[g.2] " . $g_xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";
                $armorylite->print_footer_info();
                exit;
              } else {
                if ($g_xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PVP'][0]['LIFETIMEHONORABLEKILLS'][0]['ATTRIBUTES']['VALUE'] == "") {
                  $GLOBALS["error_ad"] = true;
                  $armorylite->print_header_info();
                  if ($armorylite->anon) {
                    echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [g.2.0]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/m\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";
                  } else {
                    echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [g.2.0]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/m\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->lite_url . "\">Armory data</a> is valid?)</div>";
                  }
                  $armorylite->print_footer_info();
                  exit;
                } else {
                  ## valid data..
                  $armorylite->guild_name = $g_xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['GUILDNAME'];
                }
              }
              break;
          }
          $armorylite->guild_url = $armorylite->guild_url . strtolower(urlencode(stripslashes($armorylite->guild_name))) . "&p=1";

          ### continue parsing now that we have our guild name...                    
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->guild_url, $_z, $_r, strtolower(urlencode(stripslashes($armorylite->guild_name))), 5);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
                    
          if (!$xml['PAGE'][0]['GUILDKEY'][0]['ATTRIBUTES']['NAME']) {
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            if ($armorylite->anon) {
              echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [g.2.1]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";
            } else {
              echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [g.2.1]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";
            }
            $armorylite->print_footer_info();
          } else {
            list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 5);
            $armorylite->delete_guild($old_cache_id);
            $guild_id = $armorylite->parse_guild($_z, $cache_id);
            $armorylite->print_header_info("Armory Lite for &lt;" . ucwords(stripslashes($xml['PAGE'][0]['GUILDINFO'][0]['GUILDHEADER'][0]['ATTRIBUTES']['NAME'])) . "&gt;");
            $armorylite->print_guild_info($cache_id, $guild_id);
            $armorylite->print_footer_info();
          }
          break;  

        #####################################################################################################
        case "0":
        #####################################################################################################

          ## no cache, get new from armory and cache it and reparse guild..
          ## first we need to make sure we have other data cached; we need to get the guild_name
          ## from the other cache so we can properly get to the guild..
          list ($_g_returncode, $_g_cacheid, $_g_cachedate, $_g_cachexml) = $armorylite->check_cache($_z, $_r, $_n, 1);
          switch ($_g_returncode) {
            case "0":
              ## nothing found, we need to error out...
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [No data found] - Make sure your Main Profile is cached first.</div>";
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [No data found] - Make sure your <A href=\"" . $armorylite->lite_url . "\">Main Profile</a> is cached first.</div>";
              }
              $armorylite->print_footer_info();
              exit;
              break;
            default:
              ## something found, lets use it...
              $g_xml = $xmlparse->GetXMLTree($_g_cachexml);
              if ($g_xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
                $GLOBALS["error_ad"] = true;
                $armorylite->print_header_info();
                echo "<br /><br /><br /><div class=sub3>Armory Error - [[g.0] " . $g_xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";
                $armorylite->print_footer_info();
                exit;
              } else {
                if ($g_xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PVP'][0]['LIFETIMEHONORABLEKILLS'][0]['ATTRIBUTES']['VALUE'] == "") {
                  $GLOBALS["error_ad"] = true;
                  $armorylite->print_header_info();
                  if ($armorylite->anon) {
                    echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [g.0.1]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/m\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";
                  } else {
                    echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [g.0.1]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/m\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->lite_url . "\">Armory data</a> is valid?)</div>";
                  }
                  $armorylite->print_footer_info();
                  exit;
                } else {
                  ## valid data..
                  $armorylite->guild_name = $g_xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['GUILDNAME'];
                }
              }
              break;
          }
          $armorylite->guild_url = $armorylite->guild_url . strtolower(urlencode(stripslashes($armorylite->guild_name))) . "&p=1";
    
          ### continue parsing now that we have our guild name...                    
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->guild_url, $_z, $_r, strtolower(urlencode(stripslashes($armorylite->guild_name))), 5);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
                    
          if (!$xml['PAGE'][0]['GUILDINFO'][0]['GUILDHEADER'][0]['ATTRIBUTES']['NAME']) {
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            if ($armorylite->anon) {
              echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [g.0.2]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";
            } else {
              echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [g.0.2]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";
            }
            $armorylite->print_footer_info();
          } else {
            list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 5);
            $armorylite->delete_guild($old_cache_id);
            $guild_id = $armorylite->parse_guild($_z, $cache_id);
            $armorylite->print_header_info("Armory Lite for &lt;" . ucwords(stripslashes($xml['PAGE'][0]['GUILDINFO'][0]['GUILDHEADER'][0]['ATTRIBUTES']['NAME'])) . "&gt;");
            $armorylite->print_guild_info($cache_id, $guild_id);
            $armorylite->print_footer_info();
          }
          break;          
      }
      break;

    ###########################################################################################
    ### achievement logic #####################################################################
    ###########################################################################################
    case "achieve":
      
      $armorylite->active_url = $armorylite->achieve_url;
      $armorylite->page = "v";
      list ($_returncode, $_cacheid, $_cachedate, $_cachexml) = $armorylite->check_cache($_z, $_r, $_n, 9);

      switch ($_returncode) {
        case "1":
          //echo "--->1<br>";
          //echo "<textarea rows='50' cols='90'>" . $_cachexml . "</textarea>";
          //exit;

          ## cache good, use cache..        
          $xml = $xmlparse->GetXMLTree($_cachexml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[v.1] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";    
            $armorylite->print_footer_info();
          } else {
            if (!is_array($xml['PAGE'][0]['CHARACTERINFO'][0]['SKILLTAB'][0]['SKILLCATEGORY'])) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [v.1]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [v.1]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              $armorylite->print_header_info();
              $armorylite->print_achievement_info($GLOBALS["cache_id"]);
              $armorylite->print_footer_info();
            }
          }
          break;
          
        case "2":
          //echo "--->2<br>";
          //exit;
          
          ## cache old, get new from armory and cache it..
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->achieve_url, $_z, $_r, $_n, 9);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[v.2] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";
            $armorylite->print_footer_info();
          } else {
            if (!is_array($xml['PAGE'][0]['CHARACTERINFO'][0]['SKILLTAB'][0]['SKILLCATEGORY'])) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [v.2]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [v.2]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 9);
              $armorylite->print_header_info();
              $armorylite->print_achievement_info($cache_id);
              $armorylite->print_footer_info();
            }
          }
          break;

        case "0":
          //echo "--->0<br>";
          
          ## no cache, get new from armory and cache it..
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->achieve_url, $_z, $_r, $_n, 9);

          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;

          $armorylite->achievement_parse_category($xml);

          ///echo "<br><br><pre>";
          //print_r($xml);
          //echo "</pre>";
          //exit;
          


          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[v.0] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";    
            $armorylite->print_footer_info();
          } else {
            if (!is_array($xml['PAGE'][0]['CHARACTERINFO'][0]['SKILLTAB'][0]['SKILLCATEGORY'])) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [v.0]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [v.0]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 9);
              $armorylite->print_header_info();
              $armorylite->print_achievement_info($cache_id);
              $armorylite->print_footer_info();
            }
          }
          break;
      }
      break;  

      
    ###########################################################################################
    ### skills logic ##########################################################################
    ###########################################################################################
    case "skills":
      $armorylite->active_url = $armorylite->skill_url;
      $armorylite->page = "s";
      list ($_returncode, $_cacheid, $_cachedate, $_cachexml) = $armorylite->check_cache($_z, $_r, $_n, 4);

      switch ($_returncode) {
        case "1":
          ## cache good, use cache..        
          $xml = $xmlparse->GetXMLTree($_cachexml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[s.1] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";    
            $armorylite->print_footer_info();
          } else {
            if (!is_array($xml['PAGE'][0]['CHARACTERINFO'][0]['SKILLTAB'][0]['SKILLCATEGORY'])) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [s.1]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [s.1]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              $armorylite->print_header_info();
              $armorylite->print_skill_info($GLOBALS["cache_id"]);
              $armorylite->print_footer_info();
            }
          }
          break;
          
        case "2":
          ## cache old, get new from armory and cache it..
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->skill_url, $_z, $_r, $_n, 4);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[s.2] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";
            $armorylite->print_footer_info();
          } else {
            if (!is_array($xml['PAGE'][0]['CHARACTERINFO'][0]['SKILLTAB'][0]['SKILLCATEGORY'])) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [s.2]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [s.2]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 4);
              $armorylite->print_header_info();
              $armorylite->print_skill_info($cache_id);
              $armorylite->print_footer_info();
            }
          }
          break;

        case "0":
          ## no cache, get new from armory and cache it..
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->skill_url, $_z, $_r, $_n, 4);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[s.0] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";    
            $armorylite->print_footer_info();
          } else {
            if (!is_array($xml['PAGE'][0]['CHARACTERINFO'][0]['SKILLTAB'][0]['SKILLCATEGORY'])) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [s.0]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [s.0]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 4);
              $armorylite->print_header_info();
              $armorylite->print_skill_info($cache_id);
              $armorylite->print_footer_info();
            }
          }
          break;
      }
      break;  

    ###########################################################################################
    ### arena logic ###########################################################################
    ###########################################################################################
    case "arena":
      $armorylite->active_url = $armorylite->arena_url;
      $armorylite->page = "a";
      list ($_returncode, $_cacheid, $_cachedate, $_cachexml) = $armorylite->check_cache($_z, $_r, $_n, 6);

      switch ($_returncode) {
        case "1":
          ## cache good, use cache..        
          $xml = $xmlparse->GetXMLTree($_cachexml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[a.1] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";    
            $armorylite->print_footer_info();
          } else {
            if (!$xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['NAME']) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [a.1]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [a.1]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              $armorylite->print_header_info();
              $armorylite->print_arenateam_info($GLOBALS["cache_id"]);
              $armorylite->print_footer_info();
            }
          }
          break;
          
        case "2":
          ## cache old, get new from armory and cache it..
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->arena_url, $_z, $_r, $_n, 6);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[a.2] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";
            $armorylite->print_footer_info();
          } else {
            if (!$xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['NAME']) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [a.2]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [a.2]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 6);
              $armorylite->print_header_info();
              $armorylite->print_arenateam_info($cache_id);
              $armorylite->print_footer_info();
            }
          }
          break;

        case "0":
          ## no cache, get new from armory and cache it..
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->arena_url, $_z, $_r, $_n, 6);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[a.0] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";    
            $armorylite->print_footer_info();
          } else {
            if (!$xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['NAME']) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [a.0]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [a.0]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 6);
              $armorylite->print_header_info();
              $armorylite->print_arenateam_info($cache_id);
              $armorylite->print_footer_info();
            }
          }
          break;
      }
      break;  

      
    ###########################################################################################
    ### reputation logic ######################################################################
    ###########################################################################################
    case "rep":
      $armorylite->active_url = $armorylite->rep_url;
      $armorylite->page = "r";
      list ($_returncode, $_cacheid, $_cachedate, $_cachexml) = $armorylite->check_cache($_z, $_r, $_n, 3);

      switch ($_returncode) {
        case "1":
          ## cache good, use cache..        
          $xml = $xmlparse->GetXMLTree($_cachexml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[r.1] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";    
            $armorylite->print_footer_info();
          } else {
            if (!is_array($xml['PAGE'][0]['CHARACTERINFO'][0]['REPUTATIONTAB'][0]['FACTION'])) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [r.1a]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\">force</a> a reload. (Are you sure your Armory data is valid?)</div>";
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [r.1b]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\">force</a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              $armorylite->print_header_info();
              $armorylite->print_reputation_info($GLOBALS["cache_id"]);
              $armorylite->print_footer_info();
            }
          }
          break;
          
        case "2":
          ## cache old, get new from armory and cache it..
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->rep_url, $_z, $_r, $_n, 3);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [" . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";
            $armorylite->print_footer_info();
          } else {
            if (!is_array($xml['PAGE'][0]['CHARACTERINFO'][0]['REPUTATIONTAB'][0]['FACTION'])) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [r.2a]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [r.2b]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 3);
              $armorylite->print_header_info();
              $armorylite->print_reputation_info($cache_id);
              $armorylite->print_footer_info();
            }
          }
          break;

        case "0":
          ## no cache, get new from armory and cache it..
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->rep_url, $_z, $_r, $_n, 3);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [" . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";    
            $armorylite->print_footer_info();
          } else {
            if (!is_array($xml['PAGE'][0]['CHARACTERINFO'][0]['REPUTATIONTAB'][0]['FACTION'])) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [r.0]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [r.0]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 3);
              $armorylite->print_header_info();
              $armorylite->print_reputation_info($cache_id);
              $armorylite->print_footer_info();
            }
          }
          break;
      }
      break;  

    ###########################################################################################
    ### talents logic #########################################################################
    ###########################################################################################
    case "talents":
      $armorylite->active_url = $armorylite->talent_url;
      $armorylite->page = "t";
      list ($_returncode, $_cacheid, $_cachedate, $_cachexml) = $armorylite->check_cache($_z, $_r, $_n, 2);

      switch ($_returncode) {
        case "1":
          ## cache good, use cache..        
          $xml = $xmlparse->GetXMLTree($_cachexml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [" . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";    
            $armorylite->print_footer_info();
          } else {
            if (!$xml['PAGE'][0]['CHARACTERINFO'][0]['TALENTS'][0]['TALENTGROUP'][0]['ATTRIBUTES']['GROUP']) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [t.1a]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [t.1b]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              $armorylite->print_header_info();
              $armorylite->print_talent_info($GLOBALS["cache_id"]);
              $armorylite->print_footer_info();
            }
          }
          break;
          
        case "2":
          ## cache old, get new from armory and cache it..
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->talent_url, $_z, $_r, $_n, 2);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [" . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";
            $armorylite->print_footer_info();
          } else {
          
            if (!$xml['PAGE'][0]['CHARACTERINFO'][0]['TALENTS'][0]['TALENTGROUP'][0]['ATTRIBUTES']['GROUP']) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [t.2a]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [t.2b]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 2);
              $armorylite->print_header_info();
              $armorylite->print_talent_info($cache_id);
              $armorylite->print_footer_info();
            }
          }
          break;

        case "0":
          ## no cache, get new from armory and cache it..
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->talent_url, $_z, $_r, $_n, 2);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [" . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";    
            $armorylite->print_footer_info();
          } else {
            if (!$xml['PAGE'][0]['CHARACTERINFO'][0]['TALENTS'][0]['TALENTGROUP'][0]['ATTRIBUTES']['GROUP']) {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [t.0a]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [t.0b]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 2);
              $armorylite->print_header_info();
              $armorylite->print_talent_info($cache_id);
              $armorylite->print_footer_info();
            }
          }
          break;
      }
      break;
  
    ###########################################################################################
    ### main logic ############################################################################
    ###########################################################################################
    default:
      $armorylite->active_url = $armorylite->main_url;
      $armorylite->page = "m";
      list ($_returncode, $_cacheid, $_cachedate, $_cachexml) = $armorylite->check_cache($_z, $_r, $_n, 1);

      switch ($_returncode) {
        case "1":
          ## cache good, use cache..        
          $xml = $xmlparse->GetXMLTree($_cachexml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[m.1] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";    
            $armorylite->print_footer_info();
#            $armorylite->delete_characterid($_z, $_r, $_n);
            $armorylite->delete_characterid_byid($armorylite->chid);
          } else {
            if ($xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PVP'][0]['LIFETIMEHONORABLEKILLS'][0]['ATTRIBUTES']['VALUE'] == "") {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [m.1] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [m.1] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              $armorylite->print_header_info();
              $armorylite->print_main_info($GLOBALS["cache_id"]);
              $armorylite->update_gear_score($_z, $_r, $_n, "m");

              $armorylite->reset_characterid($_z, $_r, $_n);
              $armorylite->set_summaryinfo( $armorylite->chid, $xml,
                                            $xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['LEVEL'], 
                                            $xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['CLASS'], 
                                            $xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['RACE'], 
                                            (($xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['FACTION'] == "Horde") ? "1" : "0"), 
                                            '', 
                                            $xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['GUILDNAME']
                                          );
				$GLOBALS["error_ad"] = true;
                $armorylite->print_footer_info();
            }
          }
          break;
          
        case "2":
          ## cache old, get new from armory and cache it..
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->main_url, $_z, $_r, $_n, 1);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[m.2] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "]</div>";    
            $armorylite->print_footer_info();
            $armorylite->delete_characterid_byid($armorylite->chid);
          } else {
            if ($xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PVP'][0]['LIFETIMEHONORABLEKILLS'][0]['ATTRIBUTES']['VALUE'] == "") {

              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [m.2]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [m.2]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 1);
              $armorylite->print_header_info();
              $armorylite->print_main_info($cache_id);
              $armorylite->update_gear_score($_z, $_r, $_n, "m");

              $armorylite->reset_characterid($_z, $_r, $_n);
              $armorylite->set_summaryinfo( $armorylite->chid, $xml,
                                            $xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['LEVEL'], 
                                            $xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['CLASS'], 
                                            $xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['RACE'], 
                                            (($xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['FACTION'] == "Horde") ? "1" : "0"), 
                                            '', 
                                            $xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['GUILDNAME']
                                          );
				$GLOBALS["error_ad"] = true;
                $armorylite->print_footer_info();
            }
          }
          break;

        case "0":
          ## no cache, get new from armory and cache it..
          list ($returncode, $raw_xml) = $armorylite->get_xml($armorylite->main_url, $_z, $_r, $_n, 1);
          $xml = $xmlparse->GetXMLTree($raw_xml);
          $armorylite->xml = $xml;
          if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
            $GLOBALS["error_ad"] = true;
            $armorylite->print_header_info();
            echo "<br /><br /><br /><div class=sub3>Armory Error - [[m.0x] " . $xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] . "][" . $armorylite->chid . "]</div>";    
            $armorylite->print_footer_info();
            $armorylite->delete_characterid_byid($armorylite->chid);
          } else {
            if ($xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PVP'][0]['LIFETIMEHONORABLEKILLS'][0]['ATTRIBUTES']['VALUE'] == "") {
              $GLOBALS["error_ad"] = true;
              $armorylite->print_header_info();
              if ($armorylite->anon) {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [m.0y]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your Armory data is valid?)</div>";    
              } else {
                echo "<br /><br /><br /><div class=sub3>Armory Error - [Invalid Data [m.0z]] - Try accessing your Armory data again, or <a href=\"" . $armorylite->lite_url . "/force/" . $armorylite->page . "\"><b>force</b></a> a reload. (Are you sure your <a href=\"" . $armorylite->active_url . "\">Armory data</a> is valid?)</div>";    
              }
              $armorylite->print_footer_info();
            } else {
              list ($cache_id, $old_cache_id) = $armorylite->set_cache($_z, $_r, $_n, $raw_xml, 1);
              $armorylite->print_header_info();
              $armorylite->print_main_info($cache_id);
              $armorylite->update_gear_score($_z, $_r, $_n, "m");

              $armorylite->reset_characterid($_z, $_r, $_n);
              $armorylite->set_summaryinfo( $armorylite->chid, $xml,
                                            $xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['LEVEL'], 
                                            $xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['CLASS'], 
                                            $xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['RACE'], 
                                            (($xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['FACTION'] == "Horde") ? "1" : "0"), 
                                            '', 
                                            $xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['GUILDNAME']
                                          );
				$GLOBALS["error_ad"] = true;
				$armorylite->print_footer_info();
            }
          }
          break;
      }
      break;          
  }
?>
