<?
  include("inc/armorylite.class.php");
  $armorylite = new armorylite(); 

  if ($armorylite->aff_dat["Affiliate_Name"]) { 
    header("location: " . $armorylite->aff_dat["Affiliate_URL"]);
    exit;
  }
   
  if ($_GET["log"] == "1") {
    setcookie("armorylite_user", "", time()-3600, "/");   
    header("location: /index.php?s_".$armorylite->rand_str(10));
  }

  if ($_COOKIE["armorylite_user"]) {
    $logged_in = true;
    $_username = $armorylite->crypt($_COOKIE["armorylite_user"],SALT);
  } else {
    $logged_in = false;
  }

  $page_title = "Browse";
  $GLOBALS["loader"] = " onload=\"profileupdater()\" ";
  include("inc/corp_header.php");

  $rec = $armorylite->server_list();
?>

<table border="0" width="100%">
  <tr valign="top">
    <td>
      <div class="imghead"><img src="/images/browse.gif" alt="Browse Armory Lite" width="200" height="25"></div>
      <div class="hr"></div>

      <div class="blog2">
      
        You can browse characters we have discovered by clicking any of the servers below. This list is always being
        updated as we discover new servers, so check back soon if you don't see your server listed.
        <p>
        <div class="breaker"></div>
    
        <div class="corp_box2">
          <div class="corp_box_buffer">
              <table width="100%">
              <?
                $x = 0;
                $r = 2;
              ?>
              <? while ($dat = $armorylite->db->fetch_array($rec)) { ?>
                <?= (($x==0) ? "<tr>":""); ?>
                  <td class="td">
                    <a href="/browse/<?=strtolower($dat["country_code"]);?>/<?=strtolower(urlencode($dat["server_name"]));?>/"><?=$dat["server_name"];?> (<?=strtoupper($dat["country_code"]);?>)</a>
                  </td>
                <?
                  $x++;
                  if ($x == 2) {
                    echo "</tr>";
                    $x = 0;
                  } 
                ?>      
              <? } ?>
              
              <?= (($x <= 2) ? "</tr>":""); ?>

              </table>
          </div>
        </div>

      </div>

    </td>
    
    <td align="right" width="240">
      <? include("inc/corp_side.php"); ?>
    </td>

    <td width="5">&nbsp;</td>
	
  </tr> 
</table>

<?
  include("inc/corp_footer.php");
?>