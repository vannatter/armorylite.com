<?
  include("inc/armorylite.class.php");
  include("inc/parse.php");

  $xmlparse = &new ParseXML;
  $armorylite = new armorylite(); 
  $armorylite->is_archive = true;

  $_id = $_GET["id"];
  if (!$_id) { header("location: /?noid"); exit; }

  $_dat = $armorylite->data_archive_getinfo($_id);
  if (!$_dat) { header("location: /?nodata"); exit; }

  $_cat = $armorylite->get_characterinfo($_dat["Character_ID"]);
  if (!$_cat) { header("location: /?nodata"); exit; }

  $armorylite->chid = $_dat["Character_ID"];
  $armorylite->z = $_cat["Region"];
  $armorylite->r = $_cat["Server"];
  $armorylite->n = $_cat["Toon"];
  $armorylite->lite_url = "/" . strtolower(urlencode(stripslashes($armorylite->z))) . "/" . strtolower(urlencode(stripslashes($armorylite->r))) . "/" . strtolower(urlencode(stripslashes($armorylite->n)));

  $unzipped_xml = @gzuncompress($_dat["XML"]);
  $xml = $xmlparse->GetXMLTree($unzipped_xml);
  $armorylite->xml = $xml;

  $armorylite->print_header_info();
  $armorylite->print_main_info(0);
  $armorylite->print_footer_info();
?>
