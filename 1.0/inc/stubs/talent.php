  <div class="profile_content">

    <? $nav_page = "talents"; ?>
    <? include_once("navigation.php"); ?>

    <div id="profile">

      <div id="talents">
        <div id="header">
          <? include("bit_char_name.php"); ?>
          <? include("bit_char_guild.php"); ?>
          <? include("bit_char_demographics.php"); ?>
        </div>

        <?
          $panes  = 3;
          $rows   = 11;
          $cols   = 4;
          $cnt    = 0;

          list ($_cname, $_cid) = $this->get_class_info($this->xml['PAGE'][0]['CHARACTERINFO'][0]['CHARACTER'][0]['ATTRIBUTES']['CLASS']);
          list ($_tSID, $_talentname, $_maxpoints, $_spellurls) = $this->get_talentgrid($_cid);

          echo "<div class=\"talent_tabs\">";
          if (is_array($this->xml['PAGE'][0]['CHARACTERINFO'][0]['TALENTS'][0]['TALENTGROUP'])) {
            foreach ( $this->xml['PAGE'][0]['CHARACTERINFO'][0]['TALENTS'][0]['TALENTGROUP'] as $pk => $pv ) {
              if ($pv['ATTRIBUTES']['ACTIVE']=="1") {
                $is_active = "tabactive";
              } else {
                $is_active = "tabinactive";
              }
              ?>
              <div id="talenttab_<?=$pv['ATTRIBUTES']['GROUP'];?>" class="<?=$is_active;?>">
                <a href="javascript:void(0)" onClick="talent_toggle(<?=$pv['ATTRIBUTES']['GROUP'];?>)"><?=$pv['ATTRIBUTES']['PRIM'];?></a>
              </div>
              <?
            }
          }            
          echo "</div>";


          if (is_array($this->xml['PAGE'][0]['CHARACTERINFO'][0]['TALENTS'][0]['TALENTGROUP'])) {
            foreach ( $this->xml['PAGE'][0]['CHARACTERINFO'][0]['TALENTS'][0]['TALENTGROUP'] as $pk => $pv ) {

              if ($pv['ATTRIBUTES']['ACTIVE']=="1") {
                $active_flag = "";
              } else {
                $active_flag = " style='display: none;' ";
              }

              $tal_str = $pv['TALENTSPEC'][0]['ATTRIBUTES']['VALUE'];
              $spot = 0; 
              $_cname = str_replace(" ", "", $_cname);
    
              ####################################################################################          
              $tabs["Priest"][1] = "Discipline";
              $tabs["Priest"][2] = "Holy";
              $tabs["Priest"][3] = "Shadow";
    
              $tabs["Mage"][1] = "Arcane";
              $tabs["Mage"][2] = "Fire";
              $tabs["Mage"][3] = "Frost";
    
              $tabs["Warrior"][1] = "Arms";
              $tabs["Warrior"][2] = "Fury";
              $tabs["Warrior"][3] = "Protection";
    
              $tabs["Hunter"][1] = "Beast Mastery";
              $tabs["Hunter"][2] = "Marksmanship";
              $tabs["Hunter"][3] = "Survival";
    
              $tabs["Shaman"][1] = "Elemental";
              $tabs["Shaman"][2] = "Enhancement";
              $tabs["Shaman"][3] = "Restoration";
    
              $tabs["Druid"][1] = "Balance";
              $tabs["Druid"][2] = "Feral Combat";
              $tabs["Druid"][3] = "Restoration";
    
              $tabs["Rogue"][1] = "Assassination";
              $tabs["Rogue"][2] = "Combat";
              $tabs["Rogue"][3] = "Subtlety";
    
              $tabs["Warlock"][1] = "Affliction";
              $tabs["Warlock"][2] = "Demonology";
              $tabs["Warlock"][3] = "Destruction";
    
              $tabs["Paladin"][1] = "Holy";
              $tabs["Paladin"][2] = "Protection";
              $tabs["Paladin"][3] = "Retribution";
    
              $tabs["DeathKnight"][1] = "Blood";
              $tabs["DeathKnight"][2] = "Frost";
              $tabs["DeathKnight"][3] = "Unholy";
              ####################################################################################          
            ?>

              <div <?=$active_flag;?> class="content" id="grid_<?=$pv['ATTRIBUTES']['GROUP'];?>">
                <?
                  for ($p = 1; $p <= $panes; $p++) {
                    $cnt = 0;
                ?>
                <? if ($_COOKIE["armorylite_img"] == "n") { ?>
                <div id="p_<?=$p;?>" class="pane">
                <? } else { ?>
                <div id="p_<?=$p;?>" class="pane" style="background-image: url(/images/<?=strtolower($_cname);?>_<?=$p;?>.jpg);">
                <? } ?>
                  <? for ($r = 1; $r <= $rows; $r++) { ?>
                  <div id="p_<?=$p;?>_r_<?=$r;?>" class="row">
                    <?
                      for ($c = 1; $c <= $cols; $c++) { 
                        if ($_tSID[$p][$r][$c]) {
                          $_this_pt = substr($tal_str,$spot,1);
                          $spot++;
                          
                          $_tsid = $_tSID[$p][$r][$c];
                          $_talent_name = $_talentname[$p][$r][$c];
                          $_max_points = $_maxpoints[$p][$r][$c];
                          $_spent_pts = $_this_pt . "/" . $_max_points;
                          $_slot_id = "tal_p_" . $pv['ATTRIBUTES']['GROUP'] . "_" . $p . "_r_" . $r . "_c_" . $c;
                          $cnt += $_spent_pts;
                          
                          $tt = "";
                          $tt .= "<div class=\"tlink\" id=\"" . $_slot_id . "\">";
            
                          for ($_ranks = 1; $_ranks <= 5; $_ranks++) {
                            if ($_spellurls[$p][$r][$c][$_ranks]) {
                              $tt .= "<div " . (($_ranks==$_this_pt) ? "id=\"rank_on\"" : "id=\"rank_off\"") . "><a href=\"" . $_spellurls[$p][$r][$c][$_ranks] . "\">" . $_talent_name . " (" . $_ranks . "/" . $_max_points . ") &gt;&nbsp;&nbsp;</a></div>";
                            }
                          }
                          $tt .= "</div><a href=\"#\" onMouseover=\"dropdownmenu(this, event, '" . $_slot_id . "')\">"  . $_spent_pts . "</a>" . r . r;
    
                          if ($_COOKIE["armorylite_img"] == "n") {
                            if ($_this_pt == 0) {
                              $_ourclass = "block empty";
                            } else if ($_this_pt == $_max_points) {
                              $_ourclass = "block full";
                            } else {
                              $_ourclass = "block half";
                            }
                          } else {
                            if ($_this_pt == 0) {
                              $_ourclass = "block empty_img";
                            } else if ($_this_pt == $_max_points) {
                              $_ourclass = "block full_img";
                            } else {
                              $_ourclass = "block half_img";
                            }
                          }
    
                          ?>
                          <div id="p_<?=$p;?>_r_<?=$r;?>_c_<?=$c;?>" class="<?=$_ourclass;?>">
                            <?=$tt;?>
                          </div>
                          <?
                        } else {
                          if ($_COOKIE["armorylite_img"] == "n") {
                          ?>
                          <div id="p_<?=$p;?>_r_<?=$r;?>_c_<?=$c;?>" class="col"></div>
                          <?
                          } else {
                          ?>
                          <div id="p_<?=$p;?>_r_<?=$r;?>_c_<?=$c;?>" class="col_img"></div>
                          <?
                          }
                        }        
                      } 
                    ?>
                  </div>
                  <? } ?>
                  <br><br><br>
                  <div class="row sub3 alignleft tagit">
                    <?=$tabs[$_cname][$p];?> (<?=$cnt;?>)
                  </div>
                </div>
                <?      
                  }
                ?>
              <?
                if (is_array($pv['GLYPHS'][0]['GLYPH'])) {
                  echo "<div class='glyphs'>";
                  foreach ( $pv['GLYPHS'][0]['GLYPH'] as $gk => $gv ) {
                    
                    echo "<div class='gl'>";
                    echo "<b>" . $gv['ATTRIBUTES']['NAME'] . "</b><span class='tx'> - ";            
                    echo $gv['ATTRIBUTES']['EFFECT'] . " (" . ucwords($gv['ATTRIBUTES']['TYPE']) . ")</span>";             
                    echo "</div>";
                  }
                  echo "</div>";
                }
                
                $_talentlink = $this->b2w($_cname, $tal_str);
              ?>

              <div class="export">
                <a href="<?=$_talentlink;?>" target="_new"> >> Export to Calculator</a>
              </div>
                
            </div>
                    
        <?
            }
          }
        ?>

      </div>
     </div>

    <? include_once("foot.php"); ?>
    </div>

    <div class="page_ad">
    <? if ($this->aff_dat["Show_Ads"] != "0") { ?>
      <?=$this->show_ad("homepage","tall");?>      
    <? } ?>
    </div>