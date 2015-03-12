    <div id="navigation" class="navigation_multi">

      <div id="main_nav" class="<?=((($set->page=="m")||(!$set->page)) ? "box_on" : "box_off")?>">
        <a href="<?=(($set->is_saved) ? "#" : $urls[$i] . "/");?>">Main</a>
      </div>
      <div id="talents_nav" class="<?=(($set->page=="t") ? "box_on" : "box_off")?>">
        <a href="<?=(($set->is_saved) ? "#" : $urls[$i] . "/t");?>">Talents</a>
      </div>
      <div id="rep_nav" class="<?=(($set->page=="r") ? "box_on" : "box_off")?>">
        <a href="<?=(($set->is_saved) ? "#" : $urls[$i] . "/r");?>">Rep</a>
      </div>
      <? if (!$set->anon) { ?>
      <div id="guild_nav" class="<?=(($set->page=="g") ? "box_on" : "box_off")?>">
        <a href="<?=(($set->is_archive||$set->is_saved) ? "#" : $urls[$i] . "/g" . $set->query_string);?>">Guild</a>
      </div>
      <? } ?>
      <div id="arena_nav" class="<?=(($set->page=="a") ? "box_on" : "box_off")?>">
        <a href="<?=(($set->is_archive||$set->is_saved) ? "#" : $urls[$i] . "/a" . $set->query_string);?>">Arena</a>
      </div>
      <div id="achieve_nav" class="<?=(($set->page=="v") ? "box_on" : "box_off")?>">
        <a href="<?=(($set->is_saved) ? "#" : $urls[$i] . "/v" . $set->query_string);?>">Achieve</a>
      </div>
      <? if (!$set->anon) { ?>
      <div id="notes_nav" class="<?=(($set->page=="n") ? "box_on" : "box_off")?>">
        <a href="<?=(($set->is_archive||$set->is_saved) ? "#" : $urls[$i] . "/n" . $set->query_string);?>">Notes</a>
      </div>
      <? } ?>
    </div>