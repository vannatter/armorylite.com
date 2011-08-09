    <div id="navigation">
      <div class="<?=(($nav_page=="my") ? "my_on" : "my_off")?>">
        <? if ($this->aff_dat["Affiliate_URL"]) { ?>
          <div class="alink" id="nav_my">
            <?= $this->affiliate_menu(); ?>
          </div>
        <? } else { ?>        
          <div class="alink" id="nav_my">
          <? if (!$this->anon) { ?>
            <div class="my_ele_head">
              Profile Options
            </div>
            <? if ($this->is_archive||$this->is_saved) { ?>
              <div onMouseover="mnu_on('mnu_1')" onMouseout="mnu_off('mnu_1')" id="mnu_1" class="my_ele">
                <a href="<?=$this->lite_url;?>/">Current Profile</a>
              </div>
            <? } else { ?>
              <div onMouseover="mnu_on('mnu_1')" onMouseout="mnu_off('mnu_1')" id="mnu_1" class="my_ele">
                <a href="<?=$this->lite_url;?>/anonymize">Anonymize This</a>
              </div>
            <? } ?>
            <? if (!$this->is_saved) { ?>            
              <div onMouseover="mnu_on('mnu_2')" onMouseout="mnu_off('mnu_2')" id="mnu_2" class="my_ele">
                <a href="http://<?= $this->z; ?>.battle.net/wow/en/character/<?= $this->r; ?>/<?= $this->n; ?>/simple">Official Armory</a>
              </div>
            <? } ?>  
          <? } ?>
          <div class="my_ele_head">
            General Options
          </div>
          <div onMouseover="mnu_on('mnu_6')" onMouseout="mnu_off('mnu_6')" id="mnu_6" class="my_ele">
            <a href="/forums/">Forums</a>
          </div>
          <div onMouseover="mnu_on('mnu_3')" onMouseout="mnu_off('mnu_3')" id="mnu_3" class="my_ele">
            <a href="mailto:support@armorylite.com">Contact Us</a>
          </div>
          <div onMouseover="mnu_on('mnu_5')" onMouseout="mnu_off('mnu_5')" id="mnu_5" class="my_ele">
            <a href="<?=$this->lite_url;?>/donate">Donate</a>
          </div>
          <div onMouseover="mnu_on('mnu_4')" onMouseout="mnu_off('mnu_4')" id="mnu_4" class="my_ele">
            <a href="/">Homepage</a>
          </div>
        </div>    
      <? } ?>

      <A href="javascript:void(0)"  onClick="return clickreturnvalue()" onMouseover="dropdownmenu(this, event, 'nav_my')">Menu</a>
      </div>

      <div class="box_space">&nbsp;</div>
 
      <div id="main_nav" class="<?=((($nav_page=="main")||(!$nav_page)) ? "box_on" : "box_off")?>">
        <a href="<?=(($this->is_archive||$this->is_saved) ? "#" : $this->lite_url . "/");?>">Main</a>
      </div>
      <div id="talents_nav" class="<?=(($nav_page=="talents") ? "box_on" : "box_off")?>">
        <a href="<?=(($this->is_archive||$this->is_saved) ? "#" : $this->lite_url . "/t");?>">Talents</a>
      </div>
      <div id="rep_nav" class="<?=(($nav_page=="reputation") ? "box_on" : "box_off")?>">
        <a href="<?=(($this->is_archive||$this->is_saved) ? "#" : $this->lite_url . "/r");?>">Rep</a>
      </div>
      <? if (!$this->anon) { ?>
      <div id="guild_nav" class="<?=(($nav_page=="guild") ? "box_on" : "box_off")?>">
        <a href="<?=(($this->is_archive||$this->is_saved) ? "#" : $this->lite_url . "/g" . $this->query_string);?>">Guild</a>
      </div>
      <? } ?>
      <div id="arena_nav" class="<?=(($nav_page=="arena") ? "box_on" : "box_off")?>">
        <a href="<?=(($this->is_archive||$this->is_saved) ? "#" : $this->lite_url . "/a" . $this->query_string);?>">Arena</a>
      </div>
      <div id="achieve_nav" class="<?=(($nav_page=="achieve") ? "box_on" : "box_off")?>">
        <a href="#">Achieve</a>
      </div>
      <? if (!$this->anon) { ?>
      <div id="notes_nav" class="<?=(($nav_page=="notes") ? "box_on" : "box_off")?>">
        <a href="<?=(($this->is_archive||$this->is_saved) ? "#" : $this->lite_url . "/n" . $this->query_string);?>">Notes</a>
      </div>
      <? } ?>
    </div>

    <? if ($this->is_archive) { ?>
      <div class="subw">
        You are viewing an archived profile. <a href="<?=$this->lite_url;?>">Click here for a live version</a>.
      </div>
      <br>
    <? } ?>
     