  <div class="profile_content">

    <? $nav_page = "reputation"; ?>
    <? include_once("navigation.php"); ?>

    <div id="profile">
      <div id="reputation">
        <div id="header">
          <? include("bit_char_name.php"); ?>
          <? include("bit_char_guild.php"); ?>
          <? include("bit_char_demographics.php"); ?>
        </div>

        <div id="content">
          <?
          $x  = 0;
          $yy = 0;
          if (is_array($this->xml['PAGE'][0]['CHARACTERINFO'][0]['REPUTATIONTAB'][0]['FACTION'])) {
            foreach ( $this->xml['PAGE'][0]['CHARACTERINFO'][0]['REPUTATIONTAB'][0]['FACTION'] as $pk => $pv ) {
              ?>
              <div id="rep_head_<?=$x;?>" class="rep_header" onClick="rep_swap('rep_main_<?=$x;?>','rep_head_<?=$x;?>')"><?=$pv['ATTRIBUTES']['NAME'];?></div>
              <div id="rep_main_<?=$x;?>" class="rep_main">
              <?
              if (is_array($pv['FACTION'])) {
                foreach ( $pv['FACTION'] as $xk => $xv ) {
                  if (is_array($xv['FACTION'])) {
                    ?>

                    <div id="rep_subhead_<?=$yy;?>" class="rep_subheader" onClick="repsub_swap('rep_submain_<?=$yy;?>','rep_subhead_<?=$yy;?>')">
                      <?=$this->get_reputation($xv['ATTRIBUTES']['NAME'], $xv['ATTRIBUTES']['REPUTATION'], 1); ?>
                    </div>
                    <div id="rep_submain_<?=$yy;?>" class="rep_submain">
  
                    <?
                    foreach ( $xv['FACTION'] as $sk => $sv ) {
                      echo $this->get_reputation($sv['ATTRIBUTES']['NAME'], $sv['ATTRIBUTES']['REPUTATION'], 2);
                    }
                    ?>
                    
                    </div>
                    
                    <?
                  } else {
                    echo $this->get_reputation($xv['ATTRIBUTES']['NAME'], $xv['ATTRIBUTES']['REPUTATION'], 0);
                  }
                  
                  $yy++;
                }        
              } 
              echo "<br /></div>" . r;
              $x++;
            }        
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
      <br /><br />
      <?=$this->show_ad("homepage","tallhouse");?>      
    <? } ?>
    </div>
