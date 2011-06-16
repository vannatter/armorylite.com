<?
  include("../inc/armorylite.class.php");
  $armorylite_admin = new armorylite_admin();
  $armorylite_admin->check_login(1);

  $armorylite = new armorylite();

  if ($_POST["act"] == "edit") {
  
    if ($_POST["rowid_1"] != "") {
      $q = "UPDATE armorylite.affiliate_content SET
            Content_Body = '" . addslashes($_POST["content_1"]) . "'
            WHERE Affiliate_Content_ID = '" . $_POST["rowid_1"] . "'";
    } else {
      $q = "INSERT INTO armorylite.affiliate_content (Affiliate_ID, Content_Type, Content_Body)
            VALUES (
            '" . addslashes($_POST["id"]) . "',
            '1',
            '" . addslashes($_POST["content_1"]) . "')";
    }
    $armorylite->db->query($q);

    if ($_POST["rowid_2"] != "") {
      $q = "UPDATE armorylite.affiliate_content SET
            Content_Body = '" . addslashes($_POST["content_2"]) . "'
            WHERE Affiliate_Content_ID = '" . $_POST["rowid_2"] . "'";
    } else {
      $q = "INSERT INTO armorylite.affiliate_content (Affiliate_ID, Content_Type, Content_Body)
            VALUES (
            '" . addslashes($_POST["id"]) . "',
            '2',
            '" . addslashes($_POST["content_2"]) . "')";
    }
    $armorylite->db->query($q);
  
    header("location: /admin/affiliate.php?act=edit&id=" . $_POST["id"]);    
  }

  $page_title = "Affiliate Content";
  include("../inc/header.php");
?>  

<form method="post" action="affiliate_content.php">
<input type="hidden" name="act" value="edit">
<input type="hidden" name="id" value="<?=$_GET["id"];?>">

<table>
  <tr>
    <td colspan="2"><br></td>
  </tr>

  <?  
    $q = "SELECT * FROM armorylite.affiliate_content WHERE Affiliate_ID = '" . $_GET["id"] . "' AND Content_Type = 1";
    $r = $armorylite->db->query($q);
    $y = $armorylite->db->fetch_array($r);
  ?>
  <tr>
    <td class="sub3">Header:</td>
    <td>
      <textarea name="content_1" rows="8" cols="80"><?=$y["Content_Body"];?></textarea>
      <input type="hidden" name="rowid_1" value="<?=$y["Affiliate_Content_ID"];?>">
    </td>
  </tr>
  
  <?
    $q = "SELECT * FROM armorylite.affiliate_content WHERE Affiliate_ID = '" . $_GET["id"] . "' AND Content_Type = 2";
    $r = $armorylite->db->query($q);
    $y = $armorylite->db->fetch_array($r);
  ?>
  <tr>
    <td class="sub3">Footer:</td>
    <td>
      <textarea name="content_2" rows="8" cols="80"><?=$y["Content_Body"];?></textarea>
      <input type="hidden" name="rowid_2" value="<?=$y["Affiliate_Content_ID"];?>">
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
      <a href="/admin/affiliate.php?act=edit&id=<?=$_GET["id"];?>">&lt; Back to affiliate detail</a>
      <br><br>
      <a href="/admin/">&lt; Back to admin</a>
    </td>  
  </tr>

</table>
</form>

<?
  include("../inc/footer.php");
?>