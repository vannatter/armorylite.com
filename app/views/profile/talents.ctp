  <div class="profile_content">

    <?= $this->element('navigation/profile_top', array($d)); ?>

    <div id="profile">

      <div id="talents">
        <div id="header">
			<? if (!$set->anon) { ?>
				<div class="sub">
					<?= $this->Profile->activeTitle($d->titles, $d->name); ?>
				</div>
			<? } else { ?>
				<div class="sub">
				  <?= __('Anonymous Profile'); ?>
				</div>
			<? } ?>
				
			<? if (!$set->anon) { ?>
			  	<? if (@$d->guild->name) { ?>
			    	<div class="sub2"> 
			    		&lt;<a href="<?= $set->lite_url . "/g"; ?>"><?= $d->guild->name; ?></a>&gt;
			    	</div>
				<? } ?>
			<? } else { ?>
				<div class="sub2">
			    	&lt;Anonymous&gt;
			  	</div>
			<? } ?>

			<div class="sub3">
				<?= $d->level; ?> <?= $this->Profile->getGender($d->gender); ?> <?= $this->Profile->getRace($d->race); ?> <?= $this->Profile->getClass($d->class); ?>
			</div>
        </div>

		<div class="talent_tabs">
		<?
			if (is_array($d->talents)) {
			
				$tree_count = 0;
            	foreach ($d->talents as $talent_tree) {
            	
            		if (@$talent_tree->spec->name) {
	              		if (@$talent_tree->selected == "1") {
	                		$is_active = "tabactive";
	              		} else {
	                		$is_active = "tabinactive";
	              		}
						?>
						<div id="talenttab_<?= $tree_count; ?>" class="swaptal <?= $is_active; ?>" data-gridid="<?= $tree_count; ?>">
							<?= $talent_tree->spec->name; ?> (<?= $talent_tree->spec->role; ?>)
						</div>
						<?
						$tree_count++;
            		}
				}
          	}
		?>
		</div>

		<? 
			$tree_count = 0;		
		?>
		
		<? foreach ($grid as $t) { ?>
			<? $row_count = 0; ?>
			<div <?= (($t['info']['selected'] == "1") ? "" : " style='display: none;' "); ?> class="content spec" id="grid_<?= $tree_count; ?>">
			
				<div class="pane_new">
					<? foreach ($t as $row) { ?>
						<? if (key($row) == "col_0") { ?>
							<div class="row_new">
								<? foreach ($row as $col) { ?>
									<div class="col_new <?= (($col['selected'] == "1") ? " tal_on" : ""); ?>">
										<div class="tal_icon"><a target="_new" href="http://www.wowhead.com/spell=<?= $col['spell_id']; ?>"><img src="<?= $col['spell_icon_img']; ?>" border="0" width="36" height="36" /></a></div>
										<div class="tal_info">
											<div class="tal_name"><a target="_new" href="http://www.wowhead.com/spell=<?= $col['spell_id']; ?>"><?= $col['spell_name']; ?></a></div>
											<div class="tal_castinfo"><?= $col['spell_cast_time']; ?><?= (($col['spell_cooldown']) ? ", " . $col['spell_cooldown'] : ""); ?></div>
											<div class="tal_desc"><?= $col['spell_description']; ?></div>
										</div>
									</div>
								<? } ?>
							</div>
						<? } ?>
						<? $row_count++; ?>
					<? } ?>										
				</div>
			
				<div class="glyph_grid">
					<div class="glyphs_box">
						<h3><?= __('Major Glyphs'); ?></h3>

						<? foreach($t['glyphs']['major'] as $glyph) { ?>
							<div class="gl_row"><div class="gl_img"><img src="<?= $glyph['icon_img'];?>" width="18" height="18" /></div><div class="gl"><a href="http://www.wowhead.com/?item=<?= $glyph['item_id'];?>"><?= $glyph['name'];?></a></div></div>
						<? } ?>
					</div>					
					
					<div class="glyphs_box">
						<h3><?= __('Minor Glyphs'); ?></h3>

						<? foreach($t['glyphs']['minor'] as $glyph) { ?>
							<div class="gl_row"><div class="gl_img"><img src="<?= $glyph['icon_img'];?>" width="18" height="18" /></div><div class="gl"><a href="http://www.wowhead.com/?item=<?= $glyph['item_id'];?>"><?= $glyph['name'];?></a></div></div>
						<? } ?>
					</div>						
				</div>
			</div>
			
			<? 
				$tree_count++;
			?>					
		<? } ?>
		
      </div>
     </div>

    	<?= $this->element('navigation/profile_bot', array($d)); ?>
    </div>

    <div class="page_ad">
      <?= $this->Common->show_ad("homepage","tall"); ?>      
    </div>
    
	<div style='clear:both;'>
	
	</div>
    