<?
  include("../inc/armorylite.class.php");
  $armorylite_admin = new armorylite_admin();
  $armorylite_admin->check_login(1);

  $armorylite = new armorylite();

  $page_title = "Enchants";
  include("../inc/header.php");
  
  if ($_POST["act"] == "1") {
    if ($_POST["Enchant_ID"] != "") {
      $q = "UPDATE armorylite.enchants SET
            Spell_ID = '" . $_POST["Spell_ID"] . "', Spell_Name = '" . addslashes($_POST["Spell_Name"]) . "', URL = '" . addslashes($_POST["URL"]) . "' WHERE Enchant_ID = '" . $_POST["Enchant_ID"] . "'
      ";
    } else {
      $q = "INSERT INTO armorylite.enchants (Spell_ID, Spell_Name, URL)
            VALUES ('" . $_POST["Spell_ID"] . "','" . addslashes($_POST["Spell_Name"]) . "','" . addslashes($_POST["URL"]) . "')
      ";
    }
    $armorylite->db->query($q);
  }
  
  if ($_GET["act"] == "edit") {
    $q = "SELECT * FROM armorylite.enchants WHERE Enchant_ID = '" . $_GET["id"] . "'";
    $r = $armorylite->db->query($q);
    $y = $armorylite->db->fetch_array($r);
  }

  $q = "SELECT * FROM armorylite.enchants ORDER BY Spell_ID DESC";
  $r = $armorylite->db->query($q);
?>


<form method="post" action="enchants.php">
<input type="hidden" name="act" value="1">
<input type="hidden" name="Enchant_ID" value="<?=$y["Enchant_ID"];?>">

<table>
  <tr>
    <td class="sub3">
      Spell ID:
    </td>
    <td>
      <input type="text" name="Spell_ID" size="10" value="<?=$y["Spell_ID"];?>">
    </td>
    <td width="20"></td>
    <td class="sub3">
      Spell Name:
    </td>
    <td>
      <input type="text" name="Spell_Name" size="30" value="<?=$y["Spell_Name"];?>">
    </td>
    <td width="20"></td>
    <td class="sub3">
      URL:
    </td>
    <td>
      <input type="text" name="URL" size="40" value="<?=$y["URL"];?>">
    </td>
    <td>
      <input type="submit" value="GO">
    </td>
  </tr>
</table>
</form>

<table width="100%">
<?
  while ($x = $armorylite->db->fetch_array($r)) {
  ?>
  <tr class="sub4">
    <td><?=$x["Enchant_ID"];?></td>
    <td><?=$x["Spell_ID"];?></td>
    <td><?=$x["Spell_Name"];?></td>
    <td><a href="<?=$x["URL"];?>"><?=$x["URL"];?></a></td>
    <td><a href="enchants.php?act=edit&id=<?=$x["Enchant_ID"];?>">Edit</a></td>
  </tr>
  <?  
  }
?>
</table>
  

<?
  include("../inc/footer.php");
?>
