<?
  include("inc/armorylite.class.php");
  include("inc/parse.php");

  $_claimid = $_GET["claim_id"];
  $_err = "";
  $_valid = false;
  
  $GLOBALS["main_container"] = "armorylite_wide";
  $armorylite = new armorylite();
  $xmlparse = &new ParseXML;

  if ($_COOKIE["armorylite_user"]) {
    $logged_in = true;
    $_username = $armorylite->crypt($_COOKIE["armorylite_user"],SALT);
    $_memberid = $armorylite->get_memberid($_username);
  } else {
    $logged_in = false;
    header("location: /index.php?notloggedin");
    exit;
  }

  if (!$_claimid) { 
    $GLOBALS["error_ad"] = true;
    $armorylite->print_header_info();
    echo "<br /><br /><br /><div class=sub3>Claim error - please retry your action.</div>";    
    $armorylite->print_footer_info();
    exit;
  }

  $_cres = $armorylite->claim_get($_claimid, $_memberid);
  $_cdat = $armorylite->db->fetch_array($_cres);

  if (!$_cdat["Claim_ID"]) {
    $GLOBALS["error_ad"] = true;
    $armorylite->print_header_info();
    echo "<br /><br /><br /><div class=sub3>Claim error - please retry your action.</div>";    
    $armorylite->print_footer_info();
    exit;
  }
  
  $_char = $armorylite->get_characterinfo($_cdat["Character_ID"]);
  if (!$_char["Character_ID"]) {
    $GLOBALS["error_ad"] = true;
    $armorylite->print_header_info();
    echo "<br /><br /><br /><div class=sub3>Claim error - please retry your action.</div>";    
    $armorylite->print_footer_info();
    exit;
  }

  $_slot1 = $_cdat["Slot_1"];
  $_slot2 = $_cdat["Slot_2"];
  $_slot3 = $_cdat["Slot_3"];
  
  $_z = strtolower($_char["Region"]);
  $_r = strtolower($_char["Server"]);
  $_n = strtolower($_char["Toon"]);

  $xml_raw = $armorylite->parse_mirror($_z, $_r, $_n, 1);

  if (!$xml_raw) {
    $_err = "Error parsing Armory data. Try again later. [1]";
    $_valid = false;
  } else {
    $xml_par = $xmlparse->GetXMLTree(trim($xml_raw));
  
    $_match_slot1 = false;
    $_match_slot2 = false;
    $_match_slot3 = false;
  
    if (is_array($xml_par['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['ITEMS'][0]['ITEM'])) {
      foreach ( $xml_par['PAGE'][0]['CHARACTERINFO'][0]['CHARACTERTAB'][0]['ITEMS'][0]['ITEM'] as $pkey => $pvalue ) {
        if ($pvalue['ATTRIBUTES']['SLOT'] == $_slot1) {
          $_match_slot1 = true;
        } 
        if ($pvalue['ATTRIBUTES']['SLOT'] == $_slot2) {
          $_match_slot2 = true;
        } 
        if ($pvalue['ATTRIBUTES']['SLOT'] == $_slot3) {
          $_match_slot3 = true;
        }
      }
      $_valid = true;
    } else {
      $_err = "Error parsing Armory data. Try again later. [2]";
      $_valid = false;
    }
  }

  if (($_match_slot1) || ($_match_slot2) || ($_match_slot3)) {
    $_err = "Your Armory shows you without the correct items removed. Please check your Armory and try again.<br><br><a href='/my_characterdetail.php?cid=" . $_claimid . "'>&lt;&lt; Back</a>";
  }

  if ((!$_err) && ($_valid)) {
    ## proceed with marking as valid.
    $armorylite->claim_approve($_claimid);
    header("location: /my_characters.php?msg=v&n=" . urlencode($_n) . "&x=" . $armorylite->rand_str(10));
    exit;  
  } else {
    $GLOBALS["error_ad"] = true;
    $armorylite->print_header_info();
    echo "<br /><br /><br /><div class=sub3>" . $_err . "</div>";    
    $armorylite->print_footer_info();
    exit;
  }

?>