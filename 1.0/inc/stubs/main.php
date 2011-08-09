<?
  switch (strtolower($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['CLASS'])) {

    case "mage":
      $this->melee_on = false;
      $this->spell_on = true;
      $this->range_on = false;
      break;

    case "priest":
      $this->melee_on = false;
      $this->spell_on = true;
      $this->range_on = false;
      break;

    case "warlock":
      $this->melee_on = false;
      $this->spell_on = true;
      $this->range_on = false;
      break;

    case "warrior":
      $this->melee_on = true;
      $this->spell_on = false;
      $this->range_on = false;
      break;

   case "hunter":
      $this->melee_on = false;
      $this->spell_on = false;
      $this->range_on = true;
      break;

   case "death knight":
      $this->melee_on = true;
      $this->spell_on = false;
      $this->range_on = false;
      break;

   case "paladin":
      $this->melee_on = false;
      $this->spell_on = true;
      $this->range_on = false;
      break;

   case "druid":
      $this->melee_on = false;
      $this->spell_on = true;
      $this->range_on = false;
      break;

   case "shaman":
      $this->melee_on = false;
      $this->spell_on = true;
      $this->range_on = false;
      break;

   case "rogue":
      $this->melee_on = true;
      $this->spell_on = false;
      $this->range_on = false;
      break;
  }
?>

    <div class="profile_content">

      <? $nav_page = "main"; ?>
      <? include_once("navigation.php"); ?>

      <div id="profile">
        <div id="char_left">
          <?= $this->print_gear_info(0, "He"); ?>
          <?= $this->print_gear_info(1, "Ne"); ?>
          <?= $this->print_gear_info(2, "Sh"); ?>
          <?= $this->print_gear_info(14, "Cl"); ?>
          <?= $this->print_gear_info(4, "Ch"); ?>
          <?= $this->print_gear_info(3, "St"); ?>
          <?= $this->print_gear_info(18, "Ta"); ?>
          <?= $this->print_gear_info(8, "Br"); ?>
        </div>
      
        <div id="char_mid">
          <div id="char_grid">   
            <? $this->print_character_info(); ?>
            <?
              if ($this->is_saved) {
                $this->print_saved_info();
              }
            ?>
            <? $this->print_stats_arena(); ?>
            <? $this->print_stats_base(); ?>
            <? $this->print_stats_melee(); ?>
            <? $this->print_stats_ranged(); ?>
            <? $this->print_stats_spell(); ?>
            <? $this->print_stats_defense(); ?>
            <? $this->print_stats_networking(); ?>
          </div>
          <div id="char_bot">
            <?= $this->print_gear_info(15, "Mh", "horiz"); ?>
            <?= $this->print_gear_info(16, "Oh", "horiz"); ?>
            <?= $this->print_gear_info(17, "Ra", "horiz"); ?>
          </div>
        </div>
      
        <div id="char_right">
          <?= $this->print_gear_info(9, "Gl"); ?>
          <?= $this->print_gear_info(5, "Be"); ?>
          <?= $this->print_gear_info(6, "Le"); ?>
          <?= $this->print_gear_info(7, "Bo"); ?>
          <?= $this->print_gear_info(10, "R1"); ?>
          <?= $this->print_gear_info(11, "R2"); ?>
          <?= $this->print_gear_info(12, "T1"); ?>
          <?= $this->print_gear_info(13, "T2"); ?>
        </div>
        
        <?= $this->calculate_gear_score_weapons(); ?>
  
        <div id="char_buffs">  
          <?= $this->print_buff_info(); ?>
        </div>
      </div>
  
      <? include_once("foot.php"); ?>
    </div>

    <div class="page_ad">
    <? if ($this->aff_dat["Show_Ads"] != "0") { ?>
      <?=$this->show_ad("homepage","tall");?>      
    <? } ?>
    </div>
    
    <script language="javascript">
      function gearscore_init() {
        <? if ($this->anon) { ?>
          return "/inc/ajax_gearscore.php?chid=<?=urlencode($this->crypt($this->chid,SALT));?>&t=m&anon=y&arc=<?=(($this->is_archive) ? "y" : "n");?>";
        <? } else { ?>
          return "/inc/ajax_gearscore.php?chid=<?=$this->chid;?>&t=m&anon=n&arc=<?=(($this->is_archive) ? "y" : "n");?>";
        <? } ?>
      }
      function gearscore_ajax(res) {
        var tDiv = document.getElementById('gscore');
        var resultHTML = res;
        tDiv.innerHTML = resultHTML;
      }
      function ajaxkick() {
        ajaxHelper('gearscore');
      }
      window.onload = ajaxkick;
    </script>
