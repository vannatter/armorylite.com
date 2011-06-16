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
  
  $_claimid = $_GET["cid"];

  $armorylite->print_header_info("Character Detail");
  $rec = $armorylite->claim_get($_claimid, $_memberid);
  $dat = $armorylite->db->fetch_array($rec);
  
  $_s1 = $armorylite->slot_getname($dat["Slot_1"]);
  $_s2 = $armorylite->slot_getname($dat["Slot_2"]);
  $_s3 = $armorylite->slot_getname($dat["Slot_3"]);
  
  if (!$dat["Claim_ID"]) {
    header("location: /my_characters.php?invalid_claim");
    exit;  
  }
?>

  <div id="profile_wide">
   <div class="page_content">
    <div class="headernav">
      <div class="floatleft nav"><a href="/"><img src="/images/logo_mid_<?=(($_COOKIE["armorylite_style"] == "l")?"light":"dark");?>.gif" width="106" height="38" border="0" alt="Armory Lite"></a></div>
      <div class="box_off floatleft nav"><a href="/my_characters.php">Manage Characters</a> > Character Detail&nbsp;</div>
    </div>

    <?
      if ($dat["Claim_Status"] == 0) {
      ?>
        <div id="browse">
          <div id="content">
            <div class="row">
            
              <div class="warn">
                This claim has not been verified. <a href="my_verify.php?claim_id=<?=$dat["Claim_ID"];?>">Verify now.</a>
              </div>

              <div class="msg alignleft">
                To verify this claim, you must remove the gear from the following
                slots and have this change reflected on the Armory:
                <p>
                <b>1) <?=$_s1;?></b>
                <br>
                <b>2) <?=$_s2;?></b>
                <br>
                <b>3) <?=$_s3;?></b>
              </div>

              <div class="footmain">
                <br><br>
                <?=$armorylite->show_ad("overall","wide");?>
                <br>        
              </div>
              
			 <? include("inc/conflct.php"); ?>
                             
            </div>
          </div>
        </div>
        
      <?      
      } else {
        
        $_cinfo = $armorylite->get_characterinfo($dat["Character_ID"]);
        $_sname = $armorylite->shortname_getname($dat["Character_ID"]);
        $_archi = $armorylite->data_archive_getlist($dat["Character_ID"], 1);
        $_saved = $armorylite->data_saved_getlist($dat["Character_ID"], 1);
      ?>

        <div id="browse">
          <div id="content">
            <div class="row">
            
              <div class="claim_header">
                <a href="/<?=strtolower($_cinfo["Region"]);?>/<?=strtolower(urlencode($_cinfo["Server"]));?>/<?=strtolower($_cinfo["Toon"]);?>/"><?=ucfirst($_cinfo["Toon"]);?></a> / <a href="/<?=strtolower($_cinfo["Region"]);?>/<?=strtolower(urlencode($_cinfo["Server"]));?>/"><?=ucwords($_cinfo["Server"]);?></a> / <?=strtoupper($_cinfo["Region"]);?>
              </div>

              <div class="msg alignleft">
                Congratulations, <?=ucfirst($_cinfo["Toon"]);?> of <?=ucwords($_cinfo["Server"]);?> has been
                successfully verified by you and is now tied to your Armorylite account.
                <p>
                Below you will find features custom-made for your specific claimed character. Please be aware
                that these features are only set for this specific character. If you would like to make similar
                changes and settings to other characters you will also need to claim and verify them as well.
              </div>
              
              <table width="100%">
                <tr valign="top">
                  <td width="50%">
                    <div class="whead">
                      Saved Profiles
                    </div>
                    <div class="whead2">
                      <a href="my_saved.php?cid=<?=$_claimid;?>&sid=0">Add</a>
                    </div>
      
                    <div class="msg2 alignleft">
                    
                      <table width="100%" class="sortable">
                        <tr class="searchgrid_head">
                          <th>&nbsp;Saved As&nbsp;</th>
                          <th>&nbsp;Saved On&nbsp;</th>
                          <th>&nbsp;&nbsp;</th>
                        </tr>
                        <?
                          $saved_cnt = 0;
                          while ($s = $armorylite->db->fetch_array($_saved)) {
                        ?>

                          <tr>
                            <td class="searchgrid_col">
                              <a target="_new" href="/<?=strtolower($_cinfo["Region"]);?>/<?=strtolower(urlencode($_cinfo["Server"]));?>/<?=strtolower($_cinfo["Toon"]);?>/my/<?=strtolower(urlencode($s["Saved_Name"]));?>/">/<?=$s["Saved_Name"];?>/</a>
                            </td>
                            <td class="searchgrid_col">
                              <?=date("F j, Y h:i",$s["Cache_Date"]);?>
                            </td>
                            <td align="middle" class="searchgrid_col">
                              <a href="/my_controls.php?act=delsp&id=<?=$s["SavedCache_ID"];?>&cid=<?=$_claimid;?>">[Delete]</a>
                            </td>
                          </tr>

                        
                        <?
                            $saved_cnt++;
                          }
                          
                          if ($saved_cnt == 0) {
                          ?>
                          
                          <tr>
                            <td class="searchgrid_col" align="middle" colspan="3">No saved profiles found, why don't you add one!</td>
                          </tr>
                          
                          <?
                          } 
                        ?>
                        
                        <tr class="">
                          <td colspan="6">
                          </td>
                        </tr>
                      </table>
                    </div>
                  </td>
                  
                  <td width="50%">
                    <div class="whead">
                      Shorthand URL
                    </div>
      
                    <div class="msg2 alignleft">
                      <? if (!$_sname) { ?>
                        This feature allows you to choose a shorthand URL for your specific character. So instead of accessing
                        your profile at <i>http://armorylite.com/<?=strtolower($_cinfo["Region"]);?>/<?=strtolower(urlencode($_cinfo["Server"]));?>/<?=strtolower($_cinfo["Toon"]);?>/</i> you could
                        use something like <i>http://armorylite.com/<?=strtolower($_cinfo["Toon"]);?>/</i> - assuming it wasn't already being used.
                        <p>
                        To create your own shorthand URL, use the form below.

                        <p>
                        <div class="hrd"></div>
                        <p>

                        <form method="post" action="/my_controls.php">
                          <input type="hidden" name="act" value="shorthand">
                          <input type="hidden" name="cid" value="<?=$_claimid;?>">
                          <span class="urlf">http://armorylite.com/</span>
                          <input class="w4" id="login" type="text" name="shortname" value="<?=strtolower($_sname);?>" maxlength="50">
                          <input class="w3" id="login_on" type="submit" value="GO">                
                        </form>
                      <? } else { ?>
                        You currently have the shorthand name '<b><?=strtolower($_sname);?></b>' tied to this character. You can access your profile at <i>http://armorylite.com/<?=strtolower($_sname);?>/</i>             
                        <p>
                        If you would like to change your shorthand URL to something else, use the form below.

                        <p>
                        <div class="hrd"></div>
                        <p>

                        <form method="post" action="/my_controls.php">
                          <input type="hidden" name="act" value="shorthand">
                          <input type="hidden" name="cid" value="<?=$_claimid;?>">
                          <input type="hidden" name="df" value="1">
                          <span class="urlf">http://armorylite.com/</span>
                          <input class="w4" id="login" type="text" name="shortname" value="<?=strtolower($_sname);?>" maxlength="50">
                          <input class="w3" id="login_on" type="submit" value="GO">                
                        </form>
                      <? } ?>
                    </div>
                  </td>
                  
                </tr>
              </table>


              <div class="whead">
                Cache Archives
              </div>

              <div class="msg2 alignleft">
                <table width="100%" class="sortable">
                  <tr class="searchgrid_head">
                    <th>&nbsp;Cache Date&nbsp;</th>
                    <th>&nbsp;Cache Date&nbsp;</th>
                    <th>&nbsp;Cache Date&nbsp;</th>
                    <th>&nbsp;Cache Date&nbsp;</th>
                  </tr>

                  <?  
                    $col = 4;
                    $cnt = 0;
                    while ($d = $armorylite->db->fetch_array($_archi)) {
                      ?>
                      <? if ($cnt == 0) { ?>
                      <tr class="searchgrid_row">
                      <? } ?>
                        <td class="searchgrid_col">
                          <a target="_new" href="/arc/<?=$d["Archive_ID"];?>"><?=date("F j, Y h:i",$d["Cache_Date"]);?></a>
                        </td>
                      <?
                      $cnt++;
                      if ($cnt == $col) {
                        echo "</tr>";
                        $cnt = 0;
                      }                      
                    }
                    if ($cnt != $col) {
                      for ($xx=$cnt; $xx<$col; $xx++) {
                        echo "<td class=searchgrid_col>&nbsp;</td>";
                      }
                      echo "</tr>";
                    }                    
                  ?>
                </table>
              </div>

              <div class="footmain">
                <br><br>
                <?=$armorylite->show_ad("overall","wide");?>
                <br>        
              </div>
              
              <div class="footmain">
                <a href="http://conflct.com/" target="_new"><img src="/images/conflct.gif" alt="Conflct Gaming Network 2009" border="0"></a>
              </div>    

            </div>
          </div>
        </div>
      
      <?
      }
    ?>

      </div>
     </div>
 
     <div class="page_ad">
      <?=$armorylite->show_ad("homepage","tall");?>      
     </div>

<?
  $armorylite->print_footer_info();
?>