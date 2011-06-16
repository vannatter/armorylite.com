<?
  include("inc/armorylite.class.php");
  include("inc/parse.php");
  
  $GLOBALS["main_container"] = "armorylite_wide";
  $armorylite = new armorylite();
  $xmlparse = &new ParseXML;
  
  if ($_COOKIE["armorylite_user"]) {
    $logged_in = true;
    $_username = $armorylite->crypt($_COOKIE["armorylite_user"],SALT);
    $_memberid = $armorylite->get_memberid($_username);
  } else {
    $logged_in = false;
    header("location: /index.php?notloggedin");
  }
  
  $_claimid = $_GET["cid"];
  if (!$_claimid) { $_claimid = $_POST["cid"]; }
  if (!$_claimid) { 
    $GLOBALS["error_ad"] = true;
    $armorylite->print_header_info();
    echo "<br /><br /><br /><div class=sub3>Claim ID required.</div>";    
    $armorylite->print_footer_info();
    exit;
  }
  $_savedid = $_GET["sid"];
  if (!$_savedid) { $_savedid = $_POST["sid"]; }
  if (!$_savedid) { $_savedid = 0; }
  

  $rec = $armorylite->claim_get($_claimid, $_memberid);
  $dat = $armorylite->db->fetch_array($rec);
 
  if (!$dat["Claim_ID"]) {
    header("location: /my_characters.php?invalid_claim");
    exit;  
  }
  
  if ($_POST["action"] == "submit") {

    $_cres = $armorylite->claim_get($dat["Claim_ID"], $_memberid);
    $_cdat = $armorylite->db->fetch_array($_cres);

    $_char = $armorylite->get_characterinfo($_cdat["Character_ID"]);
    if (!$_char["Character_ID"]) {
      $GLOBALS["error_ad"] = true;
      $armorylite->print_header_info();
      echo "<br /><br /><br /><div class=sub3>Claim error - please retry your action.</div>";    
      $armorylite->print_footer_info();
      exit;
    }
  
    $_z = strtolower($_char["Region"]);
    $_r = strtolower($_char["Server"]);
    $_n = strtolower($_char["Toon"]);
    
    $_savedname = trim(stripslashes(strtolower($_POST["Saved_Name"])));
    $_saveddesc = trim(stripslashes(strtolower($_POST["Saved_Description"])));
    $_savedpriv = trim(stripslashes(strtolower($_POST["Is_Private"])));
    
    if (!$_savedname) {
      $error_code = "<div class='warn'><span class='err alignleft'>Save As required.</span></div>";
    } else if (!$_saveddesc) {
      $error_code = "<div class='warn'><span class='err alignleft'>Description required.</span></div>";
    } else {
      if (($_savedname) && (!preg_match('/[^A-Za-z0-9]/', $_savedname))) {
        $xml_raw = $armorylite->parse_mirror($_z, $_r, $_n, 1);
        if (!$xml_raw) {
          $error_code = "<span class='err alignleft'>Invalid XML from Armory. Try again.</span>";
        } else {
          $ret = $armorylite->data_saved_add($_cdat["Character_ID"], $_savedname, $_saveddesc, $_savedpriv, $xml_raw);       
          header("location: /my_characterdetail.php?cid=" . $dat["Claim_ID"] . "&added_saved=1&r=" . $armorylite->rand_str(10));
          exit;
        }        
      } else {
        $error_code = "<span class='err alignleft'>Save As name invalid, alpha-numeric only.</span>";
      }
    }    
  }  

  if (!$sav["Saved_Name"]) {
    $sav["Saved_Name"] = $_POST["Saved_Name"];
  }
  if (!$sav["Saved_Description"]) {
    $sav["Saved_Description"] = $_POST["Saved_Description"];
  }

  $armorylite->print_header_info("Saved Profile");
?>

  <div id="profile_wide">
   <div class="page_content">
    <div class="headernav">
      <div class="floatleft nav"><a href="/"><img src="/images/logo_mid_<?=(($_COOKIE["armorylite_style"] == "l")?"light":"dark");?>.gif" width="106" height="38" border="0" alt="Armory Lite"></a></div>
      <div class="box_off floatleft nav"><a href="/my_characters.php">Manage Characters</a> > <a href="/my_characterdetail.php?cid=<?=$_claimid;?>"><?=ucwords($dat["Toon"]);?></a> > Saved Profile&nbsp;</div>
    </div>

    <div id="browse">
      <div id="content">

        <?=$error_code;?>

        <div id="blog" class="floatleft">

          <form method="post" action="/my_saved.php">
          <input type="hidden" name="action" value="submit">
          <input type="hidden" name="sid" value="<?=$_savedid;?>">
          <input type="hidden" name="cid" value="<?=$_claimid;?>">

        <div class="corp_box2">
          <div class="corp_box_buffer">
            <div class="breaker"></div>

           <div class="lr">
              <div class="alignleft floatleft w4">Character:</div>
              <div class="alignleft floatleft w12">
                <b><?= ucwords($dat["Toon"]); ?></b>
              </div>
            </div>

           <div class="lr">
              <div class="alignleft floatleft w4">Server:</div>
              <div class="alignleft floatleft w12">
                <b><?= ucwords($dat["Server"]); ?></b>
              </div>
            </div>

          <div class="lr">
            <div class="alignleft floatleft w4">Save As:</div>
            <div class="alignleft floatleft w12">
              <input value="<?=$sav["Saved_Name"];?>" class="w12" type="text" id="login_nocenter" name="Saved_Name" maxlength="100" size="20">
            </div>
          </div>

          <div class="lr">
            <div class="alignleft floatleft w4">Describe:</div>
            <div class="alignleft floatleft w12">
              <textarea rows="8" class="w12" id="login_nocenter" name="Saved_Description"><?=$sav["Saved_Description"];?></textarea>
            </div>
          </div>

          <div class="lr">
            <div class="alignleft floatleft w4">Private?</div>
            <div class="alignleft floatleft w12">
              <input type="checkbox" id="login_nocenter" name="Is_Private">
            </div>
          </div>
                    
           <div class="lr">
              <div class="alignleft floatleft w4">&nbsp;</div>
              <div class="alignleft floatleft w12">
                <input class="w12" type="submit" id="login_on" value="Save">
              </div>
            </div>            

            <div class="breaker"></div>
            </div></div>
          </form>

        </div>
        
        <div id="blog" class="w13 floatleft alignleft">
          <br>
          You can now save your Armory data to a specific name to create custom views.
          <p>
          For example, equip all your PvP gear and log out so the Armory updates. Once the Armory shows your
          PvP gear, we can take a snapshot and save it to an easy-to-access URL that you can reference 
          whenever.
          <p>
          These gear sets are available on your main profile (if marked public) and can be deleted
          and recreated anytime.
          <p>
          Have fun!
          <br>
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

    <div class="page_ad">
      <?=$armorylite->show_ad("homepage","tall");?>      
    </div>

  </div>


<?
  $armorylite->print_footer_info();
?>
