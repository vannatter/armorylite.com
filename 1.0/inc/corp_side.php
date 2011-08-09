      <div class="corp_box_main">
        <div class="corp_box_top"><img width="225" height="23" alt="User Options" src="/images/box_useroptions.gif"></div>
        <div class="corp_box_side"></div>
        <div class="corp_box_content">
          <div class="pad">

          <? if ($logged_in) { ?>

            <div class="navelem_on">
              <div class="navele_on navtxt">
                Hello, <?=ucwords($_username);?>
              </div>
            </div>

            <div class="breaker2"></div>

            <div class="navelem"><div class="navele" onMouseOver="this.className='navele_on'" onMouseOut="this.className='navele'"><a href="/my_characters.php">Manage My Characters</a></div></div>
            <div class="navelem"><div class="navele" onMouseOver="this.className='navele_on'" onMouseOut="this.className='navele'"><a href="/my_prefs.php">Manage My Preferences</a></div></div>
            <div class="navelem"><div class="navele" onMouseOver="this.className='navele_on'" onMouseOut="this.className='navele'"><a href="/forums/">Armory Lite Forums</a></div></div>
            <div class="navelem"><div class="navele" onMouseOver="this.className='navele_on'" onMouseOut="this.className='navele'"><a href="/?log=1">Logout</a></div></div>

          <? } else { ?>

            <div class="navelem">
              <div class="navele">
                <table border="0" width="180">
                  <form method="post" action="/login.php">
                  <input type="hidden" name="_returnurl" value="/index.php">

                  <tr>
                    <td class="logtxt">
                      Username:                    
                    </td>
                    <td>
                      <input class="w4" type="text" id="login" name="_username" maxlength="60">
                    </td>
                  </tr>

                  <tr>
                    <td class="logtxt">
                      Password:                    
                    </td>
                    <td>
                      <input class="w4" type="password" id="login" name="_password" maxlength="60">
                    </td>
                  </tr>

                  <tr>
                    <td>
                    </td>
                    <td>
                      <input class="w4" type="submit" id="login_on" value="GO">
                    </td>
                  </tr>

                </form>
                </table>
             </div>
            </div>
            
            <div class="breaker"></div>

            <div class="navelem_on">
              <div class="navele_on"><a href="http://conflct.com/signup/armorylite">Register Today</a></div>
            </div>
    
            <div class="navelem">
              <div class="navele" onMouseOver="this.className='navele_on'" onMouseOut="this.className='navele'"><a href="/lostpassword.php">Forgot Your Password?</a></div>
            </div>
    
  
          <? } ?>

          </div>
        </div>
        <div class="corp_box_side"></div>
      </div>

      <div class="breaker"></div>

      <div class="corp_box_main">
        <div class="corp_box_top"><img width="225" height="23" alt="Site Features" src="/images/box_sitefeatures.gif"></div>
        <div class="corp_box_side"></div>
        <div class="corp_box_content">
          <div class="pad">
      
            <div class="navelem"><div class="navele" onMouseOver="this.className='navele_on'" onMouseOut="this.className='navele'"><a href="/score/us/">Browse US Gear Scores</a></div></div>
            <div class="navelem"><div class="navele" onMouseOver="this.className='navele_on'" onMouseOut="this.className='navele'"><a href="/score/eu/">Browse EU Gear Scores</a></div></div>
            <div class="navelem"><div class="navele" onMouseOver="this.className='navele_on'" onMouseOut="this.className='navele'"><a href="/stats/us/">Browse US Statistics</a></div></div>
            <div class="navelem"><div class="navele" onMouseOver="this.className='navele_on'" onMouseOut="this.className='navele'"><a href="/stats/eu/">Browse EU Statistics</a></div></div>
            <div class="navelem"><div class="navele" onMouseOver="this.className='navele_on'" onMouseOut="this.className='navele'"><a href="/poweredby.php">Powered By! Functionality</a></div></div>
            <div class="navelem"><div class="navele" onMouseOver="this.className='navele_on'" onMouseOut="this.className='navele'"><a href="/mirror/">Help Mirror For Us</a></div></div>
            <div class="navelem"><div class="navele" onMouseOver="this.className='navele_on'" onMouseOut="this.className='navele'"><a target="_new" href="http://digg.com/pc_games/armorylite_com_Lite_alternative_to_the_WoW_armory">Help Digg Us</a></div></div>
            <div class="navelem"><div class="navele" onMouseOver="this.className='navele_on'" onMouseOut="this.className='navele'"><a href="javascript:addP();">Browser Search Plug-In</a></div></div>
            <div class="navelem"><div class="navele" onMouseOver="this.className='navele_on'" onMouseOut="this.className='navele'"><a href="javascript:addP();">Browser DirectLink Plug-In</a></div></div>
 
          </div>
        </div>
        <div class="corp_box_side"></div>
      </div>
