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

  $page_title = "Information, Simplified.";
  $GLOBALS["loader"] = " onload=\"profileupdater()\" ";
  include("inc/header.php");

  $q = "SELECT b.*, u.Name FROM armorylite.blog b INNER JOIN armorylite.users u ON u.User_ID = b.User_ID WHERE Archived = 0 ORDER BY b.Blog_ID DESC";
  $r = $armorylite->db->query($q);
   
  if ($_COOKIE["armorylite_user"]) {
    $logged_in = true;
    $_username = $armorylite->crypt($_COOKIE["armorylite_user"],SALT);
  } else {
    $logged_in = false;
  }
?>

  <div id="homepage">
    <div id="header">
      <div id="tagline"><a href="/">Armory Lite</a>&nbsp;&nbsp;</div>
    </div>
    <div id="body">
      <div id="left">
        <div id="push">
          View your profile - select your server and type in your character name!
          <p />
          <form name="_arm" onSubmit="location.href='/'+document._arm._country.value+'/'+document._arm._servername.value+'/'+document._arm._name.value; return false;">
          <input type="hidden" name="_servername" value="">
          <input type="hidden" name="_country" value="">
          <div class="arm_box">
            <div class="arm_box_top">
              <span id="box_ele">
              <select class="w12" name="_server" onChange="do_arm_build('server')">
                <option value="">--</option>
                <?=$armorylite->build_serverlist();?>          
              </select>
              </span>
              <span id="box_ele"><input class="w9" type="text" id="login" name="_name" maxlength="20" size="10" value="Your Name" onFocus="ghost_txt_inc(this, 'Your Name', 'login_on')" onKeyUp="do_arm_build('user')" onKeyDown="do_arm_build('user')" onBlur="ghost_txt_out(this, 'Your Name', 'login')"></span>
            </div>
            <div class="arm_box_bot_head">
              Your Armory Lite URL: 
            </div>
            <div class="arm_box_bot_body">
              <span id="arm_link">http://armorylite.com/??/??/??</span>
            </div>
          </div>        
          </form>  
        </div>

        <div id="push">
          Search the Armory
          <p />
          <form name="_search" onSubmit="location.href='/search/'+document._search._country[document._search._country.selectedIndex].value+'/'+document._search._name.value; return false;">
          <div class="arm_box">
            <div class="arm_box_top">
              <span id="box_ele">
              <select class="w9" name="_country">
                <option value="all">All</option>
                <option value="us">US</option>
                <option value="eu">EU</option>
                <option value="tw">TW</option>
                <option value="kr">KR</option>
                <option value="cn">CN</option>
              </select>
              </span>
              <span id="box_ele">
                <input class="w12" type="text" id="login" name="_name" maxlength="20" size="10" value="Search" onFocus="ghost_txt_inc(this, 'Search', 'login_on')" onBlur="ghost_txt_out(this, 'Search', 'login')">
              </span>
            </div>
          </div>        
          </form>  
        </div>        
        
        <p />
        Development News

        <? while ($x = $armorylite->db->fetch_array($r)) { ?>
        <div id="blog">
          <?=stripslashes($x["Blog_Body"]);?> 
          <br />
          <span class="blog_footer"><?=$x["Name"];?> @ <?=date("m/d/Y H:i:s",$x["Blog_Date"]);?></span>
        </div>
        <? } ?>
        <br>
      </div>

      <div id="right">
        <div class="block_a" id="text_block">
          Armory Lite creates a textually soothing experience based on your 
          World of Warcraft Armory information.
          <p />
          <div id="pcount">Loading profile count...</div>
          <p />
          We keep local copies of your Armory information so you always
          have access to your data when you want it.
          <p />
          No gimmicks, no fluff - Just information, simplified.
        </div>

        <? if ($logged_in) { ?>

        <div class="block_c" id="text_block">
          <center>
            <div style="color:#fff" class="sub">
              Hi, <?=ucwords($_username);?>
              <p>
              <div id="lnk">
                <a class="lnk_a" href="/forums/">Forums</a>
              </div>
              <p>
              <div id="lnk">
                <a class="lnk_a" href="/my_characters.php">Manage Characters</a>
              </div>
              <p>
              <div id="lnk">
                <a class="lnk_a" href="/my_prefs.php">Manage Preferences</a>
              </div>
              <p> 
              <div id="lnk">
                <a class="lnk_a" href="/?log=1">Logout</a>
              </div>
            </div> 
          </center>
        </div>
        
        <? } else { ?>

        <form method="post" action="/login.php">
        <input type="hidden" name="_returnurl" value="/index.php">
        <div class="block_b" id="text_block">
          <center>
            <div class="lr">
              <div class="alignleft floatleft w0">Username:</div>
              <div class="floatleft w5">
                <input class="w5" type="text" id="login_l" name="_username" maxlength="60">
              </div>
            </div>

            <div class="lr">
              <div class="alignleft floatleft w0">Password:</div>
              <div class="floatleft w5">
                <input class="w5" type="password" id="login_l" name="_password" maxlength="60">
              </div>
            </div>

            <div class="lr">
              <div class="floatleft w0">&nbsp;</div>
              <div class="floatleft w5">
                <input class="w5" type="submit" id="login_on_l" value="GO">
              </div>
            </div>
            <br>
          </center>
        </div>
        </form>

        <div class="block_c" id="text_block">
          <center>
            <div class="sub"><a style="color:#fff" href="/register.php">Register Today</a></div>
          </center>
        </div>

        <? } ?>
        
        <div class="block_b" id="text_block">
          <div id="lnk" class="lnk_a">
            <a href="/score/">Browse Gear Scores</a>
          </div>
          <p />
          <div id="lnk" class="lnk_a">
            <a href="/poweredby.php">Powered By!</a>
          </div>
          <p />
          <div id="lnk" class="lnk_a">
            <a href="/mirror">Parse Mirror</a>
          </div>
          <p />
          <div id="lnk">
            <a class="lnk_a" href="javascript:addP()">FF2/IE7 Search Plug-In</a>
          </div>
          <p />
          <div id="lnk">
            <a class="lnk_a" href="javascript:addD()">FF2/IE7 DirectLink</a>
          </div>
          <p />
          <div id="lnk">
            <a class="lnk_a" href="/inc/armorylite.user.js">Greasemonkey Script</a>
          </div>
          <p />
          <div id="lnk">
            <a class="lnk_a" href="http://digg.com/pc_games/armorylite_com_Lite_alternative_to_the_WoW_armory">Help Digg Us!</a>
          </div>
        </div>
        <div class="block_c" id="text_block">
          <center>
            <span class="sub"><a style="color:#fff" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=dustin%40vannatter%2ecom&item_name=Armorylite%2ecom&no_shipping=0&cn=Suggestions%2c%20Comments%2c%20Etc%2e&tax=0&currency_code=USD&lc=US&bn=PP%2dDonationsBF&charset=UTF%2d8">Donate Today!</a></span>
          </center>
        </div>
        
        <br />
        <center><?=$armorylite->show_ad("homepage","block");?></center>
        
      </div>

      <div id="righter">
        <?=$armorylite->show_ad("homepage","tall");?>      
      </div>
      
    </div>
  </div>

  <script language="javascript">
    function profileupdater() {
      ajaxHelper('profilecount');
      setInterval("ajaxHelper('profilecount')",5000);
    }
    function profilecount_init() {
      return "/inc/ajax_profilecount.php";
    }
    function profilecount_ajax(res) {
      var tDiv = document.getElementById('pcount');
      var resultHTML = res;
      tDiv.innerHTML = resultHTML;
    }
  </script>

  <br><br>
  <?=$armorylite->show_ad("overall","wide");?>
  <br>        


<?
  $armorylite->print_footer_info();
?>
