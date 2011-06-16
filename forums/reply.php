<?
  include("../inc/armorylite.class.php");

  $GLOBALS["main_container"] = "armorylite_wide";
  $armorylite = new armorylite();

  if ($_COOKIE["armorylite_user"]) {
    $logged_in = true;
    $_username = $armorylite->crypt($_COOKIE["armorylite_user"],SALT);
  } else {
    $logged_in = false;
    header("location: /index.php?notloggedin");
  }

  $_f = strtolower(stripslashes($_GET["f"]));
  $_t = strtolower(stripslashes($_GET["t"]));
  if (!$_f) {
    $_f = strtolower(stripslashes($_POST["f"]));
  }
  if (!$_t) {
    $_t = strtolower(stripslashes($_POST["t"]));
  }
  if (!$_f) { $_f = 1; }
  if (!is_numeric($_f)) { $_f = 1; }
  if (!$_t) { header("location: /forums/"); }
  if (!is_numeric($_t)) { header("location: /forums/"); }

  if ($_POST["action"] == "submit") {
  
    $_title = trim(stripslashes($_POST["_title"]));
    $_body  = trim(stripslashes($_POST["_body"]));
    
    if (!$_title) {
      $_title = " -- ";
    }
    
    if (!$_body) {
      $error_code = "<span class='blog alignleft err'>Body required.</span>";
    } else {
      $armorylite->forum_postreply($_f, $_t, $_username, $_title, $_body);
      header("location: /forums/?f=" . $_f . "&t=" . $_t . "&x=" . $armorylite->rand_str(10));
    }    
  }



  $_thisthread = ((strlen(htmlspecialchars(ucwords(stripslashes($armorylite->forum_getthreadtitle($_t))))>50)) ? substr(htmlspecialchars(ucwords(stripslashes($armorylite->forum_getthreadtitle($_t)))),0,40) . "..." : htmlspecialchars(ucwords(stripslashes($armorylite->forum_getthreadtitle($_t)))));
  $_thisforum = $armorylite->forum_getname($_f);
  $armorylite->print_header_info("[Al] Forums " . " - " . ucwords($_thisforum) . " - " . $_thisthread . " - Post Reply");
?>

  <div id="profile_wide">
   <div class="page_content">
    <div class="headernav">
      <div class="floatleft nav"><a href="/"><img src="/images/logo_mid_<?=(($_COOKIE["armorylite_style"] == "l")?"light":"dark");?>.gif" width="106" height="38" border="0" alt="Armory Lite"></a></div>
      <div class="box_off floatleft nav"><a href="/forums/">Forums</a> > <a href="/forums/?f=<?=$_f;?>"><?=$_thisforum;?></a> > Post Reply&nbsp;</div>
    </div>

    <div id="browse">
      <div id="content">
        
        <br><?=$error_code;?><br>

        <div id="blog">
          <form method="post" action="reply.php">
            <input type="hidden" name="action" value="submit">
            <input type="hidden" name="f" value="<?=$_f;?>">
            <input type="hidden" name="t" value="<?=$_t;?>">

           <div class="lr">
              <div class="alignleft floatleft w4">Thread:</div>
              <div class="alignleft floatleft w13">
                <b><?=$_thisthread;?></b>
              </div>
            </div>

            <div class="lr">
              <div class="alignleft floatleft w4">Username:</div>
              <div class="alignleft floatleft w13">
                <?=ucwords($_username);?>
              </div>
            </div>

           <div class="lr">
              <div class="alignleft floatleft w4">Title:</div>
              <div class="alignleft floatleft w16">
                <input value="<?=$_POST["_title"];?>" class="w16" type="text" id="login_nocenter" name="_title" maxlength="60" size="20">
              </div>
            </div>

          <div class="lr">
            <div class="alignleft floatleft w4">Body:</div>
            <div class="alignleft floatleft w16">
              <textarea id="login_nocenter" name="_body" class="w16" rows="10" cols="50"><?=$_POST["_body"];?></textarea>
            </div>
          </div>

          <div class="lr">
            <div class="alignleft floatleft w4">&nbsp;</div>
            <div class="alignleft floatleft w15">
              <input class="w1" type="submit" id="login_on" value="Reply">
            </div>
          </div>            

          </form>
        
        </div>
       </div>
      </div>

      <div class="key">
        <?=$nav;?>
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

    <div class="page_ad">
      <?=$armorylite->show_ad("homepage","tall");?>      
    </div>

    </div>      
  </div>


<?
  $armorylite->print_footer_info();
?>
