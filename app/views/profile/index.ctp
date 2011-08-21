
    <div class="profile_content">

      <? // include_once("navigation.php"); ?>

      <div id="profile">
        <div id="char_left">
          <?= $this->Profile->gearSlot("He", $gear['head']); ?>
          <?= $this->Profile->gearSlot("Ne", $gear['neck']); ?>
          <?= $this->Profile->gearSlot("Sh", $gear['shoulder']); ?>
          <?= $this->Profile->gearSlot("Ba", $gear['back']); ?>
          <?= $this->Profile->gearSlot("Ch", $gear['chest']); ?>
          <?= $this->Profile->gearSlot("St", $gear['shirt']); ?>
          <?= $this->Profile->gearSlot("Ta", $gear['tabard']); ?>
          <?= $this->Profile->gearSlot("Br", $gear['wrist']); ?>
        </div>
      
        <div id="char_mid">
          <div id="char_grid">   
            <? // $this->print_character_info(); ?>
            <? // $this->print_stats_arena(); ?>
            <? // $this->print_stats_base(); ?>
            <? // $this->print_stats_melee(); ?>
            <? // $this->print_stats_ranged(); ?>
            <? // $this->print_stats_spell(); ?>
            <? // $this->print_stats_defense(); ?>
            <? // $this->print_stats_networking(); ?>
          </div>
          <div id="char_bot">
            <?//= //$this->print_gear_info(15, "Mh", "horiz"); ?>
            <?//= //$this->print_gear_info(16, "Oh", "horiz"); ?>
            <?//= //$this->print_gear_info(17, "Ra", "horiz"); ?>
          </div>
        </div>
      
        <div id="char_right">
          <?//= //$this->print_gear_info(9, "Gl"); ?>
          <?//= //$this->print_gear_info(5, "Be"); ?>
          <?//= //$this->print_gear_info(6, "Le"); ?>
          <?//= //$this->print_gear_info(7, "Bo"); ?>
          <?//= //$this->print_gear_info(10, "R1"); ?>
          <?//= //$this->print_gear_info(11, "R2"); ?>
          <?//= //$this->print_gear_info(12, "T1"); ?>
          <?//= //$this->print_gear_info(13, "T2"); ?>
        </div>
        
        <?//= //$this->calculate_gear_score_weapons(); ?>
  
        <div id="char_buffs">  
          <?//= //$this->print_buff_info(); ?>
        </div>
      </div>
  
      <? //include_once("foot.php"); ?>
    </div>
    
    
