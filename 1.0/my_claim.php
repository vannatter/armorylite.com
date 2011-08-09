<?
  include("inc/armorylite.class.php");

  $_cid = $_GET["cid"];
  if (!$_cid) { $_cid = $_POST["cid"]; }

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
  
  if ($_POST["action"] == "submit") {

    $_z = trim(stripslashes(strtolower($_POST["_z"])));
    $_r = trim(stripslashes(strtolower($_POST["_r"])));
    $_n = trim(stripslashes(strtolower($_POST["_n"])));
    
    if (!$_z) {
      $error_code = "<div class='warn'><span class='err alignleft'>Region required.</span></div>";
    } else if (!$_r) {
      $error_code = "<div class='warn'><span class='err alignleft'>Server required.</span></div>";
    } else if (!$_n) {
      $error_code = "<div class='warn'><span class='err alignleft'>Character required.</span></div>";
    } else {
      list ($_response_code, $_chid, $_mid, $_claimdate, $_status) = $armorylite->claim_check($_z, $_r, $_n);

      switch ($_status) {
        case "1":
          $error_code = "<div class='warn'><span class='err alignleft'>This character has already been claimed.</span></div>";
          break;
                  
        default:
          switch ($_response_code) {
            case "-1":
              $error_code = "<div class='warn'><span class='err alignleft'>Invalid input or not cached on Armorylite - please verify.</span></div>";
              break;
              
            case "0":
              list ($_claimid, $_slot_1, $_slot_2, $_slot_3) = $armorylite->claim_open($_chid, $_memberid);
              header("location: /my_characters.php?".$armorylite->rand_str(20));
              break;
            
            default:
              if ($_mid == $_memberid) {
                ## since we own this, we can override it right now (no need to wait)...
                $armorylite->claim_close($_response_code);
                list ($_claimid, $_slot_1, $_slot_2, $_slot_3) = $armorylite->claim_open($_chid, $_memberid);
                header("location: /my_characters.php?".$armorylite->rand_str(20));
                exit;
              } else {
                ## now need to check the time on this claim..
                $_tim = time();
                $_dif = $_tim - $_claimdate;
                if ($_dif >= "43200") {
                  $armorylite->claim_close($_response_code);
                  list ($_claimid, $_slot_1, $_slot_2, $_slot_3) = $armorylite->claim_open($_chid, $_memberid);
                  header("location: /my_characters.php?".$armorylite->rand_str(20));
                  exit;
                } else {
                  $error_code = "<div class='warn'><span class='err alignleft'>Existing unverified claim by another user - can not override for 12 hours.</span></div>";
                }
              }
              break;
          }
      }
    }    
  }  

  $armorylite->print_header_info("New Claim for " . ucwords($_username));
?>

  <div id="profile_wide">
   <div class="page_content">
    <div class="headernav">
      <div class="floatleft nav"><a href="/"><img src="/images/logo_mid_<?=(($_COOKIE["armorylite_style"] == "l")?"light":"dark");?>.gif" width="106" height="38" border="0" alt="Armory Lite"></a></div>
      <div class="box_off floatleft nav"><a href="/my_characters.php">Manage Characters</a> > New Claim&nbsp;</div>
    </div>

    <div id="browse">
      <div id="content">

        <?=$error_code;?>


        <div id="blog" class="floatleft">

          <form method="post" action="my_claim.php">
          <input type="hidden" name="action" value="submit">
          <input type="hidden" name="cid" value="<?=$_cid;?>">

        <div class="corp_box2">
          <div class="corp_box_buffer">
            <div class="breaker"></div>

           <div class="lr">
              <div class="alignleft floatleft w4">Region:</div>
              <div class="alignleft floatleft w12">
                <select class="w12" name="_z">
                  <option value="us">US</option>
                  <option value="eu">EU</option>
                  <option value="tw">TW</option>
                  <option value="kr">KR</option>
                  <option value="cn">CN</option>
                </select>
              </div>
            </div>

           <div class="lr">
              <div class="alignleft floatleft w4">Server:</div>
              <div class="alignleft floatleft w12">
                <input value="<?=$_POST["_title"];?>" class="w12" type="text" id="login_nocenter" name="_r" maxlength="100" size="20">
              </div>
            </div>

           <div class="lr">
              <div class="alignleft floatleft w4">Character:</div>
              <div class="alignleft floatleft w12">
                <input value="<?=$_POST["_title"];?>" class="w12" type="text" id="login_nocenter" name="_n" maxlength="100" size="20">
              </div>
            </div>

           <div class="lr">
              <div class="alignleft floatleft w4">&nbsp;</div>
              <div class="alignleft floatleft w12">
                <input class="w12" type="submit" id="login_on" value="Claim">
              </div>
            </div>            

            <div class="breaker"></div>
            </div></div>
          </form>

        </div>
        
        <div id="blog" class="w13 floatleft alignleft">
          <br>
          Claiming a character ties a specific WoW profile to your Armory Lite account allowing you
          to perform custom operations directly on the claimed profile.
          <p>
          Once you have started your claim to the left, our system will randomly choose 3
          item slots that we will assign to your character. To validate your character claim we
          ask you to remove the gear from these 3 item slots, log out of the game and let your Armory
          profile update. Once our system sees that you have made these item slots empty we can assume
          that you have access to said character and your claim is validated!
          <p>
          This system allows us to safely assume people are who they say they are without needing
          to ever ask for sensitive information.
          <br>
          <br>
          <br>
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

    <div class="page_ad">
      <?=$armorylite->show_ad("homepage","tall");?>      
    </div>

  </div>


<?
  $armorylite->print_footer_info();
?>
