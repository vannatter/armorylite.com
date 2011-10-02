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

  $page_title = "Search";
  $GLOBALS["loader"] = " onload=\"profileupdater()\" ";
  include("inc/corp_header.php");
?>

<table border="0" width="100%">
  <tr valign="top">
    <td>
      <div class="imghead"><img src="/images/search.gif" alt="Search Armory" width="200" height="25"></div>
      <div class="hr"></div>

      <div class="blog2">
      
        You can use the form below to search for Armory profiles anywhere in the world. 
        <p>
        Enter the full character name you are searching for, and you can either choose a specific region or you can 
        choose to search globally.
        <p>
        Unfortunately at this time the Armory does not allow wildcard searches; when they do, we will make sure we support them
        as well.
        <p>
        <div class="breaker"></div>
    
        <form name="_search" onSubmit="location.href='/search/'+document._search._country[document._search._country.selectedIndex].value+'/'+document._search._name.value; return false;">
        <div class="corp_box2">
          <div class="corp_box_buffer">
            <div class="breaker"></div>
            <div class="arm_box">
              <div class="arm_box_top">
                <span id="box_ele">
                <select class="w9 search_sel" name="_country">
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
            <div class="breaker"></div>
          </div>
        </div>
        </form>  

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