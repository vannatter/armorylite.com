
    <div id="footer"> 

      <div id="cnt_left" class="foot_txt">

        <table border="0" cellpadding="0" cellspacing="0">
          <tr valign="top">
            <td>
            	<a href="/"><img width="93" height="28" src="/img/logo_small_dark.gif" border="0" alt="Armory Lite"></a>
            </td>
            <td width="10"></td>
            <td>
              <table border="0" cellpadding="0" cellspacing="0">
                <tr height="3"><td></td></tr>
                <tr height="20">
                  <td class="foot_txt">
                    <? if (!$set->anon) { ?>
                      Images: <a href="<?=$set->lite_url;?>/style/img-y">On</a> | <a href="<?=$set->lite_url;?>/style/img-n">Off</a>
                      &nbsp;&nbsp;&nbsp;
                      Hits: <?=$counter;?>
                    <? } ?>
                  </td>
                </tr>
      
                <tr height="20">
                  <td class="foot_txt">
                      Last Modified: <?= date("F j, Y h:i", $modified); ?>
                  </td>
                </tr>
                
              </table>            
            </td>          
          </tr>
        </table>

        <br><br>
        
      </div>
    </div>
