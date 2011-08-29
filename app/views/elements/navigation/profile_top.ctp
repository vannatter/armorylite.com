    <div id="navigation">
      <div data-showmnu="main" class="top_root_mnu <?=(($set->page=="my") ? "my_on" : "my_off")?>">
      	Menu
     
			<div class="mnu_list" id="mnu_main" style="display:none;">
          		<? if (!$set->anon) { ?>
            		<div class="my_ele_head">
              			Profile Options
           			 </div>
            		<? if ($set->is_archive||$set->is_saved) { ?>
              			<div id="mnu_1" class="my_ele">
                			<a href="<?=$set->lite_url;?>/">Current Profile</a>
              			</div>
            		<? } else { ?>
              			<div id="mnu_1" class="my_ele">
                			<a href="<?=$set->lite_url;?>/anonymize">Anonymize This</a>
              			</div>
            		<? } ?>
            		<? if (!$set->is_saved) { ?>            
              			<div id="mnu_2" class="my_ele">
                			<a href="http://<?= $set->z; ?>.battle.net/wow/en/character/<?= $set->r; ?>/<?= $set->n; ?>/simple">Official Armory</a>
              			</div>
            		<? } ?>  
          		<? } ?>
          		<div class="my_ele_head">
            		General Options
          		</div>
          		<div id="mnu_6" class="my_ele">
            		<a href="/forums/">Forums</a>
          		</div>
          		<div id="mnu_3" class="my_ele">
            		<a href="mailto:support@armorylite.com">Contact Us</a>
          		</div>
          		<div id="mnu_5" class="my_ele">
            		<a href="/donate">Donate</a>
          		</div>
          		<div id="mnu_4" class="my_ele">
            		<a href="/">Homepage</a>
          		</div>
        	</div>   
               	
      	
      </div>

      <div class="box_space">&nbsp;</div>
 
      <div id="main_nav" class="<?=((($set->page=="m")||(!$set->page)) ? "box_on" : "box_off")?>">
        <a href="<?=(($set->is_archive||$set->is_saved) ? "#" : $set->lite_url . "/");?>">Main</a>
      </div>
      <div id="talents_nav" class="<?=(($set->page=="t") ? "box_on" : "box_off")?>">
        <a href="<?=(($set->is_archive||$set->is_saved) ? "#" : $set->lite_url . "/t");?>">Talents</a>
      </div>
      <div id="rep_nav" class="<?=(($set->page=="r") ? "box_on" : "box_off")?>">
        <a href="<?=(($set->is_archive||$set->is_saved) ? "#" : $set->lite_url . "/r");?>">Rep</a>
      </div>
      <? if (!$set->anon) { ?>
      <div id="guild_nav" class="<?=(($set->page=="g") ? "box_on" : "box_off")?>">
        <a href="<?=(($set->is_archive||$set->is_saved) ? "#" : $set->lite_url . "/g" . $set->query_string);?>">Guild</a>
      </div>
      <? } ?>
      <div id="arena_nav" class="<?=(($set->page=="a") ? "box_on" : "box_off")?>">
        <a href="<?=(($set->is_archive||$set->is_saved) ? "#" : $set->lite_url . "/a" . $set->query_string);?>">Arena</a>
      </div>
      <div id="achieve_nav" class="<?=(($set->page=="h") ? "box_on" : "box_off")?>">
        <a href="#">Achieve</a>
      </div>
      <? if (!$set->anon) { ?>
      <div id="notes_nav" class="<?=(($set->page=="n") ? "box_on" : "box_off")?>">
        <a href="<?=(($set->is_archive||$set->is_saved) ? "#" : $set->lite_url . "/n" . $set->query_string);?>">Notes</a>
      </div>
      <? } ?>
    </div>

    <? if ($set->is_archive) { ?>
      <div class="subw">
        You are viewing an archived profile. <a href="<?=$set->lite_url;?>">Click here for a live version</a>.
      </div>
      <br>
    <? } ?>