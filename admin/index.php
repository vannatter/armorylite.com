<?
  $page_title = "Administration";
  include("../inc/armorylite.class.php");

  $armorylite_admin = new armorylite_admin();
  $armorylite_admin->check_login(1);
  $armorylite = new armorylite();
  
  if ($_POST["act"] == "blog") {
    $q = "INSERT INTO armorylite.blog (User_ID, Blog_Date, Category, Blog_Body) 
          VALUES ('" . addslashes($_COOKIE["user_id"]) . "','" . addslashes(time()) . "','','" . addslashes($_POST["Blog_Body"]) . "')
          ";
    $armorylite->db->query($q);
  }
  if ($_GET["act"] == "logout") {
    setcookie("username", "", -1);
    setcookie("user_id", "", -1);
    setcookie("lvl", "", -1);
    header("location: index.php?logout");
    exit;
  }
  include("../inc/header.php");
?>

<div id="homepage">
  <div id="body">
    <div id="left">
      <div class="sub">Armory Lite Administration</div>
      <p />
      <li> <a href="server.php">Server Populator</a>
      <li> <a href="todo.php">Enchant To-Do List</a>
      <li> <a href="enchants.php">Enchant Master List</a>
      <li> <a href="talents.php">Talent Admin</a>
      <li> <a href="affiliate.php">Affiliate Admin</a>
      <p />
      
      <form method="post" action="index.php">
        <input type="hidden" name="act" value="blog">
        <div class="sub">Blog Administration</div>
        <textarea name="Blog_Body" rows="6" cols="40"></textarea>
        <br />
        <input type="submit" value="Blog">
      </form>
      <p />
      
      <li> <a href="index.php?act=logout">Logout</a>
      <li> <a href="/">Homepage</a>
      <br><br>

    </div>
  </div>
</div>

<?
  include("../inc/footer.php");
?>

