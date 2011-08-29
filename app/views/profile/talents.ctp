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
            		if (@$talent_tree->name) {
	              		if (@$talent_tree->selected == "1") {
	                		$is_active = "tabactive";
	              		} else {
	                		$is_active = "tabinactive";
	              		}
						?>
						<div id="talenttab_<?= $tree_count; ?>" class="swaptal <?= $is_active; ?>" data-gridid="<?= $tree_count; ?>">
							<?= $talent_tree->name; ?>
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
			<div <?= (($t['info']['active'] == "1") ? "" : " style='display: none;' "); ?> class="content spec" id="grid_<?= $tree_count; ?>">
			
				<? for ($p = 1; $p <= 3; $p++) { ?>
                	<div id="s<?=$t['info']['spec_id'];?>_p<?=$p;?>" class="pane" style="background-image: url(<?= $t['pane_'.$p]['info']['background']; ?>);">
                		<? for ($r = 1; $r <= 7; $r++) { ?>
                			<div id="s<?=$t['info']['spec_id'];?>_p<?=$p;?>_r<?=$r;?>" class="row">
                				<? for ($c = 1; $c <= 4; $c++) { ?>
                					<? 
                						if (@$t['pane_'.$p]['row_'.$r]['col_'.$c]['spent'] == "0") {
											$fill = " empty_img ";
											$fill_color = " empty_clr ";
                						} elseif (@$t['pane_'.$p]['row_'.$r]['col_'.$c]['spent'] == count(@$t['pane_'.$p]['row_'.$r]['col_'.$c]['ranks'])) {
											$fill = " full_img ";
											$fill_color = " full_clr ";
                						} else {
											$fill = " half_img ";
											$fill_color = " half_clr ";
                						}
                					?>
                				
                					<? if (count(@$t['pane_'.$p]['row_'.$r]['col_'.$c]['ranks']) > 0) { ?>
                						<div id="s<?=$t['info']['spec_id'];?>_p<?=$p;?>_r<?=$r;?>_c<?=$c;?>" class="talblock block">
		                					<div id="ico_s<?=$t['info']['spec_id'];?>_p<?=$p;?>_r<?=$r;?>_c<?=$c;?>" class="talico <?= $fill; ?> <?= ((@$t['pane_'.$p]['row_'.$r]['col_'.$c]['spent'] == "0") ? " noton ":""); ?>" style="background-image: url(<?= @$t['pane_'.$p]['row_'.$r]['col_'.$c]['ranks'][0]['Talents']['web_icon']; ?>);" >
		                						<div class="talcnt <?= $fill_color; ?>"><?= @$t['pane_'.$p]['row_'.$r]['col_'.$c]['spent']; ?></div>
		                					</div>
											<div style="display:none;" class="tal_mnu" id="mnu_s<?=$t['info']['spec_id'];?>_p<?=$p;?>_r<?=$r;?>_c<?=$c;?>">
												<div class="tmnu_name"><?= @$t['pane_'.$p]['row_'.$r]['col_'.$c]['ranks'][0]['Talents']['name']; ?></div>											
												<div class="tmnu_rank">Rank <?= @$t['pane_'.$p]['row_'.$r]['col_'.$c]['spent']; ?>/<?= count(@$t['pane_'.$p]['row_'.$r]['col_'.$c]['ranks']); ?></div>
												<div class="tmnu_desc"><?= str_replace("\n\n", "<br />", @$t['pane_'.$p]['row_'.$r]['col_'.$c]['ranks'][(($t['pane_'.$p]['row_'.$r]['col_'.$c]['spent']==0)?0:($t['pane_'.$p]['row_'.$r]['col_'.$c]['spent']-1))]['Talents']['tooltip']); ?></div>	
											</div>	                					
										</div>
	                				<? } else { ?>
	                					<div id="s<?=$t['info']['spec_id'];?>_p<?=$p;?>_r<?=$r;?>_c<?=$c;?>" class="col_img"></div>
	                				<? } ?>
                					
                				<? } ?>
                			</div>
                		<? } ?>
                		
	                  	<br><br><br>
	                  	<div class="row sub3 alignleft tagit">
	                    	<?= $t['pane_'.$p]['info']['name']; ?> (<?= $t['pane_'.$p]['info']['count']; ?>)
	                  	</div>	
                		
                	</div>
				<? } ?>
				
				<div class="glyph_grid">
					<div class="glyphs_box">
						<h3><?= __('Prime Glyphs'); ?></h3>

						<? foreach($t['glyphs']->prime as $glyph) { ?>
							<div class="gl"><a href="http://www.wowhead.com/?item=<?= $glyph->item;?>"><?= $glyph->name;?></a></div>
						<? } ?>
					</div>
					
					<div class="glyphs_box">
						<h3><?= __('Major Glyphs'); ?></h3>

						<? foreach($t['glyphs']->major as $glyph) { ?>
							<div class="gl"><a href="http://www.wowhead.com/?item=<?= $glyph->item;?>"><?= $glyph->name;?></a></div>
						<? } ?>
					</div>					
					
					<div class="glyphs_box">
						<h3><?= __('Minor Glyphs'); ?></h3>

						<? foreach($t['glyphs']->minor as $glyph) { ?>
							<div class="gl"><a href="http://www.wowhead.com/?item=<?= $glyph->item;?>"><?= $glyph->name;?></a></div>
						<? } ?>
					</div>						
				</div>
				
				<div class="export_calc">
	                <a href="http://www.wowhead.com/talent#<?= $this->Profile->getTalentClass($d->class); ?>-<?= $t['info']['build']; ?>" target="_new"> Export to Calculator &gt;&gt;</a>
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
    

    