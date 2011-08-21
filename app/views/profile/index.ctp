<pre style='background:pink;'>
	<? print_r($gear); ?>
</pre>

    <div class="profile_content">

      <? // include_once("navigation.php"); ?>

      <div id="profile">
        <div id="char_left">
          <?= $this->Profile->gearSlot("He", @$gear['head']); ?>
          <?= $this->Profile->gearSlot("Ne", @$gear['neck']); ?>
          <?= $this->Profile->gearSlot("Sh", @$gear['shoulder']); ?>
          <?= $this->Profile->gearSlot("Ba", @$gear['back']); ?>
          <?= $this->Profile->gearSlot("Ch", @$gear['chest']); ?>
          <?= $this->Profile->gearSlot("St", @$gear['shirt']); ?>
          <?= $this->Profile->gearSlot("Ta", @$gear['tabard']); ?>
          <?= $this->Profile->gearSlot("Br", @$gear['wrist']); ?>
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
          <?= $this->Profile->gearSlot("Gl", @$gear['hands']); ?>
          <?= $this->Profile->gearSlot("Be", @$gear['waist']); ?>
          <?= $this->Profile->gearSlot("Le", @$gear['legs']); ?>
          <?= $this->Profile->gearSlot("Bo", @$gear['feet']); ?>
          <?= $this->Profile->gearSlot("R1", @$gear['finger1']); ?>
          <?= $this->Profile->gearSlot("R2", @$gear['finger2']); ?>
          <?= $this->Profile->gearSlot("T1", @$gear['trinket1']); ?>
          <?= $this->Profile->gearSlot("T2", @$gear['trinket2']); ?>
        </div>
        
        <?//= //$this->calculate_gear_score_weapons(); ?>
  
      </div>
  
      <? //include_once("foot.php"); ?>
    </div>
    
    
