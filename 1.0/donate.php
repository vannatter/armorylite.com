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

  $page_title = "Donate";
  $GLOBALS["loader"] = " onload=\"profileupdater()\" ";
  include("inc/corp_header.php");
?>

<table border="0" width="100%">
  <tr valign="top">
    <td>
      <div class="imghead"><img src="/images/donate.gif" alt="Donate To Armory Lite" width="200" height="25"></div>
      <div class="hr"></div>

      <div class="blog2">
        If you enjoy the services we provide here at Armory Lite, please consider donating any funds you can afford
        to help keep this service running.
        <p>
        As we continue to grow, our operating expenses to support servers and bandwidth grow too. We rely on donations
        provided by happy users and advertising revenue to continue the success of this project.
        <p>
        People providing donations can choose to have their organization profiled on this section of Armory Lite for their
        support.
        <p>
        
        <div class="breaker"></div>
        <div class="navelem_on">
          <div class="donate">
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=dustin%40vannatter%2ecom&item_name=Armorylite%2ecom&no_shipping=0&cn=Suggestions%2c%20Comments%2c%20Etc%2e&tax=0&currency_code=USD&lc=US&bn=PP%2dDonationsBF&charset=UTF%2d8">Donate Today!</a>
          </div>
        </div>
        <div class="breaker"></div>
    
        <div class="corp_box2">
          <div class="corp_box_buffer textleft">
        
            <div class="breaker"></div>
            <div class="sub2">Some of our gracious donors:</div>
            <div class="hr"></div>
            <p>

            <table width="100%">
              <tr>
                <td class="td">
                  Andreas Z
                </td>                            
                <td class="td">
                  C J S
                </td>          
                <td class="td">
                  John A
                </td>                  
              </tr>
              <tr>
                <td class="td">
                  David L
                </td>                            
                <td class="td">
                  Phillip J
                </td>                            
                <td class="td">
                  Nicholas M
                </td>                  
              </tr>
              <tr>
                <td class="td">
                  Wolf K
                </td>                            
                <td class="td">
                  Matt G
                </td>                            
                <td class="td">
                  Ernie M
                </td>                  
              </tr>
              <tr>
                <td class="td">
                  James T
                </td>                            
                <td class="td">
                  Andrew M
                </td>                            
                <td class="td">
                  Dobiah Inc.
                </td>                  
              </tr>
              <tr>
                <td class="td">
                  Izac A
                </td>                            
                <td class="td">
                  Joey J
                </td>                            
                <td class="td">
                  Stacey W
                </td>                  
              </tr>
              <tr>
                <td class="td">
                  Peter G
                </td>                            
                <td class="td">
                  Jacob R
                </td>                            
                <td class="td">
                  Sandra P
                </td>                  
              </tr>
            </table>            
            
            <div class="breaker"></div>
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