<?
  include("../inc/armorylite.class.php");
  include("../inc/parse.php");
  $armorylite_admin = new armorylite_admin();
  $armorylite_admin->check_login(1);

  $armorylite = new armorylite();
  $xmlparse = &new ParseXML;

  $page_title = "Server Population";
  include("../inc/header.php");

  $us_raw = $armorylite->get_xml_raw("http://www.worldofwarcraft.com/realmstatus/index.xml");
  $us_xml = $xmlparse->GetXMLTree($us_raw);

  #print_r($us_xml);
  echo "<br>";
  echo "Checking US servers...<br>";
  
  foreach ( $us_xml['RSS'][0]['CHANNEL'][0]['ITEM'] as $pk => $pv ) {
    $_tmp = $pv['TITLE'][0]['VALUE'];
    $_type = "";
    
    $_tmp = str_replace("Realm Down","",$_tmp);
    $_tmp = str_replace("Realm Up","",$_tmp);

    $_pos = strpos($_tmp, "(PVP)");
    if ($_pos !== false) {
      $_type = "PVP";
    } 
    $_pos = strpos($_tmp, "(PVE)");
    if ($_pos !== false) {
      $_type = "PVE";
    } 
    $_pos = strpos($_tmp, "(RP)");
    if ($_pos !== false) {
      $_type = "RP";
    } 
    $_pos = strpos($_tmp, "(RPPVP)");
    if ($_pos !== false) {
      $_type = "RPPVP";
    } 

    $_tmp = str_replace("(RPPVP)","",$_tmp);
    $_tmp = str_replace("(RP)","",$_tmp);
    $_tmp = str_replace("(PVE)","",$_tmp);
    $_tmp = str_replace("(PVP)","",$_tmp);

    $_locate = $armorylite->server_find($_tmp, "US");

    if ($_locate == 0) {
      echo "Found new server - " . $_tmp . " - " . $_type . " -> adding to database... ";

      $_serverid = $armorylite->server_add($_tmp, $_type, "US", "en");
      echo "done (serverid=" . $_serverid . ")<br>";
    }

  }
  echo "Done processing US servers.<br>";
  
?>

<br>
<A href="/admin/">&lt; Back to admin</a>