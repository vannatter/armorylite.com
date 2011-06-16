
  <div class="profile_content">

    <? $nav_page = "skills"; ?>
    <? include_once("navigation.php"); ?>

    <div id="profile">
      <div id="skills">
        <div id="header">
          <? include("bit_char_name.php"); ?>
          <? include("bit_char_guild.php"); ?>
          <? include("bit_char_demographics.php"); ?>
        </div>

        <div id="content">
          <?
          $x = 0;
          if (is_array($this->xml['PAGE'][0]['CHARACTERINFO'][0]['SKILLTAB'][0]['SKILLCATEGORY'])) {
            foreach ( $this->xml['PAGE'][0]['CHARACTERINFO'][0]['SKILLTAB'][0]['SKILLCATEGORY'] as $pk => $pv ) {
              ?>
              <div id="skill_head_<?=$x;?>" class="skill_header" onClick="skill_swap('skill_main_<?=$x;?>','skill_head_<?=$x;?>')"><?=$pv['ATTRIBUTES']['NAME'];?></div>
              <div id="skill_main_<?=$x;?>" class="skill_main">
              <?
              if (is_array($pv['SKILL'])) {
                foreach ( $pv['SKILL'] as $xk => $xv ) {
                  echo $this->get_skills($xv['ATTRIBUTES']['NAME'], $xv['ATTRIBUTES']['VALUE'], $xv['ATTRIBUTES']['MAX']);
                }        
              } 
              echo "<br /></div>" . r;
              $x++;
            }        
          }
          ?>        

        <br><br>
        <?=$this->show_ad("overall","banner");?>
        </div>

      </div>
    </div>

    <? include_once("foot.php"); ?>
      
    </div>

    <div class="page_ad">
    <?=$this->show_ad("homepage","tall");?>      
    </div>
