
  <div class="profile_content">

    <? $nav_page = "arena"; ?>
    <? include_once("navigation.php"); ?>

    <div id="profile">
      <div id="arenateam">
        <div id="header">
          <? include("bit_char_name.php"); ?>
          <? include("bit_char_guild.php"); ?>
          <? include("bit_char_demographics.php"); ?>
        </div>

        <div id="content">
          <?
          $x = 0;
          if (is_array($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ARENATEAMS'][0]['ARENATEAM'])) {
            foreach ( $this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ARENATEAMS'][0]['ARENATEAM'] as $pk => $pv ) {
              if (abs($pv['ATTRIBUTES']['GAMESPLAYED']) > 0) {
                $w_pct = (abs($pv['ATTRIBUTES']['GAMESWON']) / abs($pv['ATTRIBUTES']['GAMESPLAYED']));
                $w_pct = floor($w_pct * 100);
                if ($w_pct > 100) { $w_pct = 100; }
              } else {
                $w_pct = 0;
              }

              if (abs($pv['ATTRIBUTES']['SEASONGAMESPLAYED']) > 0) {
                $s_pct = (abs($pv['ATTRIBUTES']['SEASONGAMESWON']) / abs($pv['ATTRIBUTES']['SEASONGAMESPLAYED']));
                $s_pct = floor($s_pct * 100);
                if ($s_pct > 100) { $s_pct = 100; }
              } else {
                $s_pct = 0;
              }
              ?>
              <? if ($this->anon) { ?>
              <div id="arenateam_head_<?=$x;?>" class="arenateam_header" onClick="arenateam_swap('arenateam_main_<?=$x;?>','arenateam_head_<?=$x;?>')">Anonymous</div>
              <? } else { ?>
              <div id="arenateam_head_<?=$x;?>" class="arenateam_header" onClick="arenateam_swap('arenateam_main_<?=$x;?>','arenateam_head_<?=$x;?>')"><?=$pv['ATTRIBUTES']['NAME'];?></div>
              <? } ?>
              <div id="arenateam_main_<?=$x;?>" class="arenateam_main">

                <div class="arenateam_member_header">
                  <div class="arenateam_ele w4">
                    Size: <b><?=$pv['ATTRIBUTES']['SIZE'];?>v<?=$pv['ATTRIBUTES']['SIZE'];?></b>
                  </div>                

                  <div class="arenateam_ele w6">
                    Rating: <b><?=$pv['ATTRIBUTES']['RATING'];?></b>
                  </div>                

                  <div class="arenateam_ele w6">
                    Ranking: <b><?=$pv['ATTRIBUTES']['RANKING'];?></b>
                  </div>                

                  <div class="arenateam_ele w11">
                    <? if ($this->anon) { ?>
                    Battlegroup: <b>Anonymous</b>
                    <? } else { ?>
                    Battlegroup: <b><?=$pv['ATTRIBUTES']['BATTLEGROUP'];?></b>
                    <? } ?>
                  </div>                

                </div>

                <div class="arenateam_member_header">
                  <div class="arenateam_ele w5">
                    This Week:
                  </div>                
                  <div class="arenateam_ele w5">
                    <div class="arenateam_box"><span class="arenateam_bar <?=(($w_pct==100) ? "Exalted" : "Honored");?>" style="width:<?=$w_pct;?>%;">&nbsp;</span></div>
                  </div>
                  <div class="arenateam_ele w6">
                   &nbsp;<?=$w_pct;?>% (<?=$pv['ATTRIBUTES']['GAMESWON'];?> of <?=$pv['ATTRIBUTES']['GAMESPLAYED'];?>)
                  </div>

                  <div class="arenateam_ele w0">
                    This Season:
                  </div>                
                  <div class="arenateam_ele w5">
                    <div class="arenateam_box"><span class="arenateam_bar <?=(($s_pct==100) ? "Exalted" : "Honored");?>" style="width:<?=$s_pct;?>%;">&nbsp;</span></div>
                  </div>
                  <div class="arenateam_ele w6">
                   &nbsp;<?=$s_pct;?>% (<?=$pv['ATTRIBUTES']['SEASONGAMESWON'];?> of <?=$pv['ATTRIBUTES']['SEASONGAMESPLAYED'];?>)
                  </div>
                </div>

                <?
                if (is_array($pv['MEMBERS'][0]['CHARACTER'])) {
                  foreach ( $pv['MEMBERS'][0]['CHARACTER'] as $xk => $xv ) {

                    if (abs($xv['ATTRIBUTES']['SEASONGAMESPLAYED']) > 0) {
                      $pct = (abs($xv['ATTRIBUTES']['SEASONGAMESWON']) / abs($xv['ATTRIBUTES']['SEASONGAMESPLAYED']));
                      $pct = floor($pct * 100);
                      if ($pct > 100) { $pct = 100; }
                    } else {
                      $pct = 0;
                    }
                    ?>
                    <div class="arenateam_member_row">
                      <div class="arenateam_member w9">
                        <? if ($this->anon) { ?>
                          Anonymous
                        <? } else { ?>
                          <a href="/<?=strtolower(urlencode(stripslashes($this->z)));?>/<?=strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['REALM'])));?>/<?=strtolower(urlencode(stripslashes($xv['ATTRIBUTES']['NAME'])));?>/"><?=(($xv['ATTRIBUTES']['TEAMRANK']=="0") ? "[C] " : "");?><?=$xv['ATTRIBUTES']['NAME'];?></a>
                        <? } ?>
                      </div>
                      <div class="arenateam_member w7">
                        <?=$xv['ATTRIBUTES']['CLASS'];?>
                      </div>
                      <div class="arenateam_member w6">
                        <? if ($this->anon) { ?>
                          &lt;Anonymous&gt;
                        <? } else { ?>
                          <? if ($xv['ATTRIBUTES']['GUILD'] != "") { ?>
                            <a href="/<?=strtolower(urlencode(stripslashes($this->z)));?>/<?=strtolower(urlencode(stripslashes($pv['ATTRIBUTES']['REALM'])));?>/<?=strtolower(urlencode(stripslashes($xv['ATTRIBUTES']['NAME'])));?>/g/">&lt;<?=$xv['ATTRIBUTES']['GUILD'];?>&gt;</a>
                          <? } else { ?>
                            &lt;Unguilded&gt;
                          <? } ?>                          
                        <? } ?>                          
                      </div>
                      <div class="arenateam_member w4">
                        Personal: <?=$xv['ATTRIBUTES']['CONTRIBUTION'];?>
                      </div>
                      <div class="arenateam_member w8">
                        Wins:
                      </div>
                      <div class="arenateam_member w6">
                       <?=$pct;?>% (<?=$xv['ATTRIBUTES']['SEASONGAMESWON'];?> of <?=$xv['ATTRIBUTES']['SEASONGAMESPLAYED'];?>)
                      </div>
                     </div>
                    <?
                  }        
                } 
                ?>

                <br /><br />
              </div>
              <?
              $x++;
            }        
          } else {
            ?>
            <br />
            <div class="arenateam_header">
              No teams found.
            </div>
            <?          
          }
          ?>        
        </div>

      </div>
    </div>

    <? include_once("foot.php"); ?>
    </div>

    <div class="page_ad">
    <? if ($this->aff_dat["Show_Ads"] != "0") { ?>
      <?=$this->show_ad("homepage","tall");?>
    <? } ?>      
    </div>

  
