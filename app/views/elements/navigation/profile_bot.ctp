
    <div id="footer"> 

      <div id="cnt_left" class="foot_txt">

        <table border="0" cellpadding="0" cellspacing="0">
          <tr valign="top">
            <td>
            	<a href="/"><img width="93" height="28" src="/images/logo_small_<?= (($_COOKIE["armorylite_style"] == "l") ? "light" : "dark"); ?>.gif" border="0" alt="Armory Lite"></a>
            </td>
            <td width="10"></td>
            <td>
              <table border="0" cellpadding="0" cellspacing="0">
                <tr height="3"><td></td></tr>
                <tr height="20">
                  <td class="foot_txt">
                    <? if (!$this->anon) { ?>
                      Style: <a href="<?=$this->lite_url;?>/style/d">Dark</a> | <a href="<?=$this->lite_url;?>/style/l">Light</a>
                      &nbsp;&nbsp;&nbsp;
                      Images: <a href="<?=$this->lite_url;?>/style/img-y">On</a> | <a href="<?=$this->lite_url;?>/style/img-n">Off</a>
                      &nbsp;&nbsp;&nbsp;
                      Hits: <?=$this->counter_show($this->chid);?>
                    <? } ?>
                  </td>
                </tr>
      
                <? if (!$this->anon) { ?>
                  <?
                  $_fl = $this->claim_links();
                  if ($_fl) {
                    ?>
                    <tr height="20">
                      <td class="foot_txt">
                        <div class="claim_footer"><?=$_fl;?></div>
                      </td>
                    </tr>
                  <? } ?>
                  
                  <?
                  $_dl = $this->data_saved_links();
                  if ($_dl) {
                    ?>
                    <tr height="20">
                      <td class="foot_txt">
                        <div class="claim_footer"><?=$_dl;?></div>
                      </td>
                    </tr>
                  <? } ?>                  
                <? } ?>
      
                <? if (($GLOBALS["is_cached"])||($cache_id)) { ?>
      
                <tr height="20">
                  <td class="foot_txt">
                    <? if ($GLOBALS["is_cached"] == true) { ?>
                      <? if ($this->anon) { ?>
                        Cache Updated: <?=date("F j, Y h:i",$GLOBALS["cache_date"]);?> (#<?=$GLOBALS["cache_id"];?>) 
                      <? } else { ?>
                        Cache Updated: <?=date("F j, Y h:i",$GLOBALS["cache_date"]);?> (#<?=$GLOBALS["cache_id"];?>) (<a href="<?=$this->lite_url;?>/force/<?=$this->page;?>">Force Reload</a>)
                      <? } ?>
                    <? } else { ?>
                      <? if ($cache_id) { ?>
                        Minty Fresh Cache #<?=$cache_id;?>!
                      <? } ?>
                    <? } ?>
                  </td>
                </tr>

                <? } ?>

                <tr height="20">
                  <td class="foot_txt">
                    <? if ($this->is_archive) { ?>
                      Cached: <?=$this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['LASTMODIFIED'];?> 
                    <? } else { ?>
                      Armory Updated: <?=$this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['LASTMODIFIED'];?> 
                    <? } ?>
                  </td>
                </tr>
                
              </table>            
            </td>          
          </tr>
        </table>

        <br><br>
        
      </div>
    </div>
