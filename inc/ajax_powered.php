<?
  include("armorylite.class.php");
  include("parse.php");

  $armorylite = new armorylite();
  $xmlparse = &new ParseXML;
  
  $_err = false;
  $_errcode = 0;
  $_z = strtolower(stripslashes(urldecode($_GET["z"])));  
  $_r = strtolower(stripslashes(urldecode($_GET["r"])));  
  $_n = strtolower(stripslashes(urldecode($_GET["n"])));  
  $_i = strtolower(stripslashes(urldecode($_GET["il"])));

  $armorylite->chid = $armorylite->get_characterid($_z, $_r, $_n);

  if ($armorylite->chid) {

    switch (strtolower($_z)) {
      case "us":
        $armorylite->main_url = "http://www.wowarmory.com/character-sheet.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
        break;
      case "eu":
        $armorylite->main_url = "http://eu.wowarmory.com/character-sheet.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
        break;
      case "kr":
        $armorylite->main_url = "http://kr.wowarmory.com/character-sheet.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
        break;
      case "tw":
        $armorylite->main_url = "http://tw.wowarmory.com/character-sheet.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
        break;
      case "cn":
        $armorylite->main_url = "http://cn.wowarmory.com/character-sheet.xml?r=" . strtolower(urlencode(stripslashes($_r))) . "&n=" . strtolower(urlencode(stripslashes($_n)));
        break;
    }
  
    list ($_returncode, $_cacheid, $_cachedate, $_cachexml) = $armorylite->check_cache($_z, $_r, $_n, 1);

    switch ($_returncode) {
      case "1":
      ## cache good, use cache..        
      $xml = $xmlparse->GetXMLTree($_cachexml);
      $armorylite->xml = $xml;
      
      if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
        $_err = true;
        $_errcode = "1.1";
        $armorylite->delete_characterid($_z, $_r, $_n);
      } else {
        if ($xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PVP'][0]['LIFETIMEHONORABLEKILLS'][0]['ATTRIBUTES']['VALUE'] == "") {
          $_err = true;
          $_errcode = "1.2";
        } else {
          $_err = false;
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
        }
      }
      break;

      case "2":
      ## cache old, but use cache..        
      $xml = $xmlparse->GetXMLTree($_cachexml);
      $armorylite->xml = $xml;
      if ($xml['PAGE'][0]['CHARACTERINFO'][0]['ATTRIBUTES']['ERRCODE'] != "") { 
        $_err = true;
        $_errcode = "2.1";
        $armorylite->delete_characterid($_z, $_r, $_n);
      } else {
        if ($xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['PVP'][0]['LIFETIMEHONORABLEKILLS'][0]['ATTRIBUTES']['VALUE'] == "") {
          $_err = true;
          $_errcode = "2.2";
        } else {
          $_err = false;
        }
      }
      break;
      
      case "0":
      ## no cache, lets error out (we dont want to overload our host)
      $_err = true;
      $_errcode = "0.1";
    }

    if (!$_err) {
      list ($_score, $_prev_score) = $armorylite->get_gear_score($armorylite->chid, 1);
    
      if ($_i == "1") {
        $_alp_left   = " style='font-family: verdana, arial, sans-serif; width: 140px; clear: left;' ";
        $_alp_right  = " style='font-family: verdana, arial, sans-serif; width: 100px;' ";
        $_alp_name   = " style='font-family: verdana, arial, sans-serif; font-size: 12px; font-weight: bold; clear: both; color: #ffffff;' ";
        $_alp_guild  = " style='font-family: verdana, arial, sans-serif; font-size: 12px; font-weight: bold; clear: both; color: #666666;' ";
        $_alp_demo   = " style='font-family: verdana, arial, sans-serif; margin-top: 4px; font-size: 11px; clear: both; color: #ffffff;' ";
        $_alp_spec   = " style='font-family: verdana, arial, sans-serif; color: #aaaaaa; font-size: 11px;' ";
        $_alp_region = " style='font-family: verdana, arial, sans-serif; margin-top: 4px; font-size: 11px; color: #aaaaaa; clear: both;' ";
        $_alp_score  = " style='font-family: verdana, arial, sans-serif; border: 1px solid #000000; background-color: #333333; padding: 3px; color: #ffffff; font-size: 11px; font-weight: bold; text-align: center;' ";
        $_alp_hp     = " style='font-family: verdana, arial, sans-serif; margin-top: 2px; border: 1px solid #000000; background-color: #247B01; padding: 3px; color: #ffffff; font-size: 11px; font-weight: bold; text-align: center;' ";
        $_alp_img    = " style='font-family: verdana, arial, sans-serif; clear: both; text-align: right; float: right; margin-top: 4px;' ";
      } else {
        $_alp_left   = " class='alp_left' ";
        $_alp_right  = " class='alp_right' ";
        $_alp_name   = " class='alp_name' ";
        $_alp_guild  = " class='alp_guild' ";
        $_alp_demo   = " class='alp_demo' ";
        $_alp_spec   = " class='alp_spec' ";
        $_alp_region = " class='alp_region' ";
        $_alp_score  = " class='alp_score' ";
        $_alp_hp     = " class='alp_hp' ";
        $_alp_img    = " class='alp_img' ";
      }
    
      $_st  = "<table width='100%'><tr valign='top'>";
      $_st .= "<td align='left'><div " . $_alp_left . ">";
      $_st .= "<div " . $_alp_name . ">" . trim($armorylite->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['PREFIX']) . " " . stripslashes($armorylite->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['NAME']) . " " . trim($armorylite->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['SUFFIX']) . "</div>";
      if ($armorylite->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['GUILDNAME']) {
        $_st .= "<div " . $_alp_guild . ">&lt;" . stripslashes($armorylite->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['GUILDNAME']) . "&gt;</div>";
      }
      $_st .= "<div " . $_alp_demo . ">" . $armorylite->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['LEVEL'] . " " . $armorylite->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['RACE'] . " " . $armorylite->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['CLASS'] . "</div>";

      $_ts = "";
      if (is_array($armorylite->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['TALENTSPECS'][0]['TALENTSPEC'])) {
        foreach ( $armorylite->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['TALENTSPECS'][0]['TALENTSPEC'] as $tk => $tv ) {
          if ($tv['ATTRIBUTES']['ACTIVE'] == "1") {
            $_ts = $tv['ATTRIBUTES']['TREEONE'] . "/" . $tv['ATTRIBUTES']['TREETWO'] . "/" . $tv['ATTRIBUTES']['TREETHREE'];
          }
        }
      }
      
      if ($_ts) {
        $_st .= "<div " . $_alp_spec . ">Spec: " . $_ts . "</div>";
      }

      $_st .= "<div " . $_alp_region . ">" . $armorylite->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['FACTION'] . " - " . $armorylite->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['BATTLEGROUP'] . "</div>";
      $_st .= "</div></td>";

      $_st .= "<td align='right'><div " . $_alp_right . ">";
      if ($_score) {
        $_qua = $armorylite->gearscore_color($_score);

        if ($_i == "1") {
          switch ($_qua) {
            case "5":
              $_qual = " style='color: #FF8000; text-decoration: none;' ";
              break;          
            case "4":
              $_qual = " style='color: #A335EE; text-decoration: none;' ";
              break;          
            case "3":
              $_qual = " style='color: #0070DD; text-decoration: none;' ";
              break;          
            case "2":
              $_qual = " style='color: #009500; text-decoration: none;' ";
              break;          
            case "1":
              $_qual = " style='color: #777777; text-decoration: none;' ";
              break;          
          }
        } else {
          $_qual = " class='qual_" . $_qua . "' ";
        }
                
        $_scr = "<span " . $_qual . ">" . $_score . "</span>";
        $_st .= "<div " . $_alp_score . ">Score: " . $_scr . "</div>";
      }

      switch ($armorylite->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['CHARACTERBARS'][0]['SECONDBAR'][0]['ATTRIBUTES']['TYPE']) {
        case "m":
          $_etype = "m";
          $_etxt  = " background-color: #205497; ";
          break;
        case "e":
          $_etype = "e";
          $_etxt  = " background-color: #C6C600; ";
          break;
        case "r":
          $_etype = "r";
          $_etxt  = " background-color: #C10000; ";
          break;
        case "p":
          $_etype = "r";
          $_etxt  = " background-color: #C10000; ";
          break;
      }

      if ($_i == "1") {
        $_alp_bar = " style='margin-top: 2px; border: 1px solid #000000; padding: 3px; color: #ffffff; font-size: 11px; font-weight: bold; text-align: center; " . $_etxt . "' ";
      } else {
        $_alp_bar = " class='alp_bar alp_" . $_etype . "' ";
      }      
      
      $_st .= "<div " . $_alp_hp . ">" . $armorylite->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['CHARACTERBARS'][0]['HEALTH'][0]['ATTRIBUTES']['EFFECTIVE'] . "</div>";
      $_st .= "<div " . $_alp_bar . ">" . $armorylite->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['CHARACTERBARS'][0]['SECONDBAR'][0]['ATTRIBUTES']['EFFECTIVE'] . "</div>";
      $_st .= "<div " . $_alp_img . "><img src='http://armorylite.com/images/poweredby.gif' width='53' height='19'></div>";
      $_st .= "</div></td>";
      $_st .= "</tr></table>";
                
    ?>
    ALP_p('<?=addslashes($_st);?>', 1);
    <?    
    } else {
    ?>
    ALP_p('Armorylite cache not found [<?=$_errcode;?>]', 3);
    <?
    }
  } else { ?>
ALP_p('Character not found.', 4);
<? } ?>