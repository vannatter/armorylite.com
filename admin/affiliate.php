<?
  include("../inc/armorylite.class.php");
  $armorylite_admin = new armorylite_admin();
  $armorylite_admin->check_login(1);

  $armorylite = new armorylite();

  if ($_POST["act"] == "1") {
    if ($_POST["Affiliate_ID"] != "") {
      $q = "UPDATE armorylite.affiliates SET
            Affiliate_Name = '" . addslashes($_POST["Affiliate_Name"]) . "',
            Affiliate_URL_Key = '" . addslashes($_POST["Affiliate_URL_Key"]) . "',
            Affiliate_API_Key = '" . addslashes($_POST["Affiliate_API_Key"]) . "',
            Affiliate_Contact_Name = '" . addslashes($_POST["Affiliate_Contact_Name"]) . "',
            Affiliate_Contact_Email = '" . addslashes($_POST["Affiliate_Contact_Email"]) . "',
            Affiliate_Contact_Phone = '" . addslashes($_POST["Affiliate_Contact_Phone"]) . "',
            Affiliate_URL = '" . addslashes($_POST["Affiliate_URL"]) . "'
            WHERE Affiliate_ID = '" . $_POST["Affiliate_ID"] . "'";
    } else {
      $q = "INSERT INTO armorylite.affiliates (Affiliate_Name, Affiliate_URL_Key, Affiliate_API_Key, Affiliate_Contact_Name, Affiliate_Contact_Email, Affiliate_Contact_Phone, Affiliate_URL, Affiliate_Status)
            VALUES (
            '" . addslashes($_POST["Affiliate_Name"]) . "',
            '" . addslashes($_POST["Affiliate_URL_Key"]) . "',
            '" . addslashes($_POST["Affiliate_API_Key"]) . "',
            '" . addslashes($_POST["Affiliate_Contact_Name"]) . "',
            '" . addslashes($_POST["Affiliate_Contact_Email"]) . "',
            '" . addslashes($_POST["Affiliate_Contact_Phone"]) . "',
            '" . addslashes($_POST["Affiliate_URL"]) . "', 1)";
    }
    $armorylite->db->query($q);
    header("location: /admin/");    
  }
  
  if ($_GET["act"] == "edit") {
    $q = "SELECT * FROM armorylite.affiliates WHERE Affiliate_ID = '" . $_GET["id"] . "'";
    $r = $armorylite->db->query($q);
    $y = $armorylite->db->fetch_array($r);
  }

  $qa = "SELECT * FROM armorylite.affiliates ORDER BY Affiliate_Name DESC";
  $ra = $armorylite->db->query($qa);

  $page_title = "Affiliates";
  include("../inc/header.php");
?>

<form method="post" action="affiliate.php" name="aff">
<input type="hidden" name="act" value="1">
<input type="hidden" name="Affiliate_ID" value="<?=$y["Affiliate_ID"];?>">

<br>
<table>
  <tr>
    <td class="sub2">Jump to:</td>
    <td>
      <select name="afflist" onChange="jumpAff()">
        <option value="">---------------------------------------------------</option>
      <?
        while ($x = $armorylite->db->fetch_array($ra)) {
      ?>
        <option value="<?=$x["Affiliate_ID"];?>"><?=$x["Affiliate_Name"];?></option>
      <? 
        }
      ?>
      </select>
    </td>
  </tr>

  <tr>
    <td colspan="2"><br></td>
  </tr>
  
  <tr>
    <td class="sub3">
      Affiliate Name:
    </td>
    <td>
      <input type="text" name="Affiliate_Name" size="60" value="<?=$y["Affiliate_Name"];?>">
    </td>
  </tr>

  <tr>
    <td class="sub3">
      Affiliate URL Key:
    </td>
    <td>
      <input type="text" name="Affiliate_URL_Key" size="60" value="<?=$y["Affiliate_URL_Key"];?>">
    </td>
  </tr>

  <tr>
    <td class="sub3">
      Affiliate API Key:
    </td>
    <td>
      <input type="text" name="Affiliate_API_Key" size="60" value="<?= (($y["Affiliate_API_Key"]=="") ? $armorylite->rand_str(15) : $y["Affiliate_API_Key"]) ?>">
    </td>
  </tr>

  <tr>
    <td class="sub3">
      Affiliate Contact Name:
    </td>
    <td>
      <input type="text" name="Affiliate_Contact_Name" size="60" value="<?=$y["Affiliate_Contact_Name"];?>">
    </td>
  </tr>

  <tr>
    <td class="sub3">
      Affiliate Contact Email:
    </td>
    <td>
      <input type="text" name="Affiliate_Contact_Email" size="60" value="<?=$y["Affiliate_Contact_Email"];?>">
    </td>
  </tr>

  <tr>
    <td class="sub3">
      Affiliate Contact Phone:
    </td>
    <td>
      <input type="text" name="Affiliate_Contact_Phone" size="60" value="<?=$y["Affiliate_Contact_Phone"];?>">
    </td>
  </tr>

  <tr>
    <td class="sub3">
      Affiliate URL:
    </td>
    <td>
      <input type="text" name="Affiliate_URL" size="60" value="<?=$y["Affiliate_URL"];?>">
    </td>
  </tr>

  <tr>
    <td></td>
    <td><input type="submit" value="Process">  
  </tr>

  <tr>
    <td colspan="2"><br></td>
  </tr>
  
  <tr>
    <td></td>
    <td class="sub2">
      <? if ($_GET["act"] == "edit") { ?>
        <a href="affiliate_content.php?id=<?=$y["Affiliate_ID"];?>">&gt; Manage affiliate content blocks</a>
        <br>
        <a href="affiliate_menu.php?id=<?=$y["Affiliate_ID"];?>">&gt; Manage affiliate menu</a>
        <br>
        <a href="affiliate_stylesheet.php?id=<?=$y["Affiliate_ID"];?>">&gt; Manage affiliate stylesheet</a>
        <br>
        <a target="_new" href="http://<?=$y["Affiliate_URL_Key"];?>.affiliate.dev.armorylite.com/anon/28565">&gt; Visit Affiliate AL site</a>
        <br>
      <? } ?>
      
      <br>
      <a href="/admin/">&lt; Back to admin</a>
      <br><br>
    </td>  
  </tr>
</table>

</form>


<?
  include("../inc/footer.php");
?>
