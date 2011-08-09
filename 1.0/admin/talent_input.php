<?
  include("../inc/armorylite.class.php");
  $armorylite_admin = new armorylite_admin();
  $armorylite_admin->check_login(1);

  if ($_POST["act"] == "sub") {
    if ($_POST["Talent_Slot_ID"] != "") {
      $q = "UPDATE armorylite.talents SET
            Class_ID = '" . addslashes($_POST["Class_ID"]) . "', 
            Row = '" . addslashes($_POST["Row"]) . "', 
            Col = '" . addslashes($_POST["Col"]) . "', 
            Panel = '" . addslashes($_POST["Panel"]) . "', 
            Talent_Name = '" . addslashes($_POST["Talent_Name"]) . "', 
            Max_Points = '" . addslashes($_POST["Max_Points"]) . "', 
            Spell_URL_1 = '" . addslashes($_POST["Spell_URL_1"]) . "', 
            Spell_URL_2 = '" . addslashes($_POST["Spell_URL_2"]) . "', 
            Spell_URL_3 = '" . addslashes($_POST["Spell_URL_3"]) . "', 
            Spell_URL_4 = '" . addslashes($_POST["Spell_URL_4"]) . "', 
            Spell_URL_5 = '" . addslashes($_POST["Spell_URL_5"]) . "'
            WHERE Talent_Slot_ID = '" . $_POST["Talent_Slot_ID"] . "'
            AND Build = '" . TALENT_BUILD . "'
      ";
    } else {
      $q = "INSERT INTO armorylite.talents 
            (Build, Class_ID, Row, Col, Panel, Talent_Name, Max_Points, Spell_URL_1, Spell_URL_2, Spell_URL_3, Spell_URL_4, Spell_URL_5)
            VALUES (
            '" . addslashes($_POST["Build"]) . "',
            '" . addslashes($_POST["Class_ID"]) . "',
            '" . addslashes($_POST["Row"]) . "',
            '" . addslashes($_POST["Col"]) . "',
            '" . addslashes($_POST["Panel"]) . "',
            '" . addslashes($_POST["Talent_Name"]) . "',
            '" . addslashes($_POST["Max_Points"]) . "',
            '" . addslashes($_POST["Spell_URL_1"]) . "',
            '" . addslashes($_POST["Spell_URL_2"]) . "',
            '" . addslashes($_POST["Spell_URL_3"]) . "',
            '" . addslashes($_POST["Spell_URL_4"]) . "',
            '" . addslashes($_POST["Spell_URL_5"]) . "'
            )
      ";
    }
    $armorylite_admin->db->query($q);
    header("location: talents.php?class_id=".$_POST["Class_ID"]);
  } elseif ($_POST["act"] == "del") {
    $armorylite_admin->delete_talentslot($_POST["Talent_Slot_ID"]);
    header("location: talents.php?class_id=".$_POST["Class_ID"]);
  }

  list ($_class_name, $_class_id) = $armorylite_admin->get_class($_GET["class_id"]);

  if ($_GET["tsid"]) {
    $tals = $armorylite_admin->get_talentslot($_GET["tsid"]);
  }

  $page_title = "Talent Administration";
  include("../inc/header.php");
  
?>

<form method="post" action="talent_input.php" name="tal">
<input type="hidden" name="act" value="sub">
<input type="hidden" name="Talent_Slot_ID" value="<?=$_GET["tsid"];?>">

<input type="hidden" name="Build" value="<?=TALENT_BUILD;?>">
<input type="hidden" name="Class_ID" value="<?=$_GET["class_id"];?>">
<input type="hidden" name="Panel" value="<?=$_GET["p"];?>">
<input type="hidden" name="Row" value="<?=$_GET["r"];?>">
<input type="hidden" name="Col" value="<?=$_GET["c"];?>">

<div id="talents">

  <div id="element">
    Class: <?=$_class_name;?>
  </div>

  <div id="element">
    Pane: <?=$_GET["p"];?>
  </div>

  <div id="element">
    Row: <?=$_GET["r"];?>
  </div>

  <div id="element">
    Col: <?=$_GET["c"];?>
  </div>

  <div id="element">
    Talent Name: <br />
    <input type="text" size="60" maxlength="100" name="Talent_Name" value="<?=$tals["Talent_Name"];?>">
  </div>

  <div id="element">
    Max Points: <br />
    <select name="Max_Points">
      <option <?=(($tals["Max_Points"]=="1") ? " selected " : "");?> value="1">1</option>
      <option <?=(($tals["Max_Points"]=="2") ? " selected " : "");?> value="2">2</option>
      <option <?=(($tals["Max_Points"]=="3") ? " selected " : "");?> value="3">3</option>
      <option <?=(($tals["Max_Points"]=="4") ? " selected " : "");?> value="4">4</option>
      <option <?=(($tals["Max_Points"]=="5") ? " selected " : "");?> value="5">5</option>
    </select>
  </div>

  <div id="element">
    Spell Rank 1 URL: <br />
    <input type="text" size="60" maxlength="100" name="Spell_URL_1" value="<?=$tals["Spell_URL_1"];?>">
  </div>

  <div id="element">
    Spell Rank 2 URL: <br />
    <input type="text" size="60" maxlength="100" name="Spell_URL_2" value="<?=$tals["Spell_URL_2"];?>">
  </div>

  <div id="element">
    Spell Rank 3 URL: <br />
    <input type="text" size="60" maxlength="100" name="Spell_URL_3" value="<?=$tals["Spell_URL_3"];?>">
  </div>

  <div id="element">
    Spell Rank 4 URL: <br />
    <input type="text" size="60" maxlength="100" name="Spell_URL_4" value="<?=$tals["Spell_URL_4"];?>">
  </div>

  <div id="element">
    Spell Rank 5 URL: <br />
    <input type="text" size="60" maxlength="100" name="Spell_URL_5" value="<?=$tals["Spell_URL_5"];?>">
  </div>      

  <div id="element">
    <input type="submit" value="GO">
    <input type="button" value="Delete" onClick="del()">
  </div>      

</div>

<script language="javascript">
function del() {
  d = confirm('Really delete this pane?');
  
  if (d) {
    document.tal.act.value = 'del';
    document.tal.submit();
  }
}
</script>
<?
  include("../inc/footer.php");
?>
