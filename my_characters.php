<?
  include("inc/armorylite.class.php");

  $GLOBALS["main_container"] = "armorylite_wide";
  $armorylite = new armorylite();

  if ($_COOKIE["armorylite_user"]) {
    $logged_in = true;
    $_username = $armorylite->crypt($_COOKIE["armorylite_user"],SALT);
    $_memberid = $armorylite->get_memberid($_username);
  } else {
    $logged_in = false;
    header("location: /index.php?notloggedin");
  }

  $armorylite->print_header_info("Manage Characters for " . ucwords($_username));
  $rec = $armorylite->claim_getlist($_memberid);
?>

  <div id="profile_wide">
   <div class="page_content">
    <div class="headernav">
      <div class="floatleft nav"><a href="/"><img src="/images/logo_mid_<?=(($_COOKIE["armorylite_style"] == "l")?"light":"dark");?>.gif" width="106" height="38" border="0" alt="Armory Lite"></a></div>
      <div class="box_off floatleft nav"><a href="/my_characters.php">Manage Characters</a>&nbsp;</div>
      <div class="box_on floatright nav">
        &nbsp;<a href="/my_claim.php?cid=0">New Claim</a>&nbsp;
      </div>
    </div>

    <div id="browse">
      <div id="content">
        <div class="row">

          <?
          if ($_GET["msg"] == "v") {
            ?>
            <table width="100%" cellpadding="8">
              <tr>
                <td class="sub2">
                  Congratulations, you have been verified as the owner of <?=ucwords($_GET["n"]);?>!
                </td>
              </tr>
            </table>
            <?
          }
          ?>

          <table width="100%" class="sortable">
            <tr class="searchgrid_head">
              <th>&nbsp;Name&nbsp;</th>
              <th>&nbsp;Server&nbsp;</th>
              <th>&nbsp;Region&nbsp;</th>
              <th>&nbsp;Status&nbsp;</th>
              <th>&nbsp;&nbsp;</th>
              <th>&nbsp;&nbsp;</th>
            </tr>

            <?  
              while ($dat = $armorylite->db->fetch_array($rec)) {
              
                if ($dat["Claim_Status"] == 0) {
                  $claim_status_txt = "<font color='FF7100'>Unverified</font>";
                } elseif ($dat["Claim_Status"] == 1) {
                  $claim_status_txt = "<font color='649A00'>Verified</font>";
                }
                
                ?>
                <tr class="searchgrid_row">
                  <td class="searchgrid_col">
                    <a href="/<?=strtolower($dat["Region"]);?>/<?=strtolower(urlencode($dat["Server"]));?>/<?=strtolower($dat["Toon"]);?>/"><?=ucwords($dat["Toon"]);?></a>
                  </td>
                  <td class=searchgrid_col>
                    <?=ucwords($dat["Server"]);?>
                  </td>
                  <td class=searchgrid_col>
                    <?=strtoupper($dat["Region"]);?>
                  </td>
                  <td class=searchgrid_col>
                    <?=$claim_status_txt;?>
                  </td>
                  <td align="center" class=searchgrid_col>
                    <a href="/my_characterdetail.php?cid=<?=$dat["Claim_ID"];?>">[Manage]</a>
                  </td>
                  <td align="center" class=searchgrid_col>
                    <a href="/my_claimdelete.php?cid=<?=$dat["Claim_ID"];?>">[Delete]</a>
                  </td>
                </tr>
                <?
              }
            ?>
          </table>

          <div class="footmain">
            <br><br>
            <?=$armorylite->show_ad("overall","wide");?>
            <br>        
          </div>
          
		<? include("inc/conflct.php"); ?>
          
        </div>
      </div>
    </div>

    </div>  

    <div class="page_ad">
      <?=$armorylite->show_ad("homepage","tall");?>      
    </div>

  </div>

<?
  $armorylite->print_footer_info();
?>
