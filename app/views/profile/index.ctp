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
          
			<div id="stats_char">
			  <div id="stats_char_left">
			  
				<? if (!$is_anon) { ?>
					<div class="sub">
						<?= $this->Profile->activeTitle($d->titles, $d->name); ?>
					</div>
				<? } else { ?>
					<div class="sub">
					  <?= __('Anonymous Profile'); ?>
					</div>
				<? } ?>
				
				<? if (!$is_anon) { ?>
				  	<? if (@$d->guild->name) { ?>
				    	<div class="sub2"> 
				    		&lt;<a href="<?= $root_url . "/g"; ?>"><?= $d->guild->name; ?></a>&gt;
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

				<? if (!$is_anon) { ?>
					<div class="sub3">
						<?= $this->Profile->getFaction($d->race); ?> - <?= $d->realm; ?> - <?= $this->Profile->getRegion($region); ?>
					</div>
				<? } ?>
				
				<? if ( (@$d->pvp->totalHonorableKills) || (@$d->pvp->ratedBattlegrounds->personalRating) ) { ?>
					<div class="sub3">
						<? if (@$d->pvp->totalHonorableKills) { ?>
							Honor Kills: <?= number_format($d->pvp->totalHonorableKills); ?>
						<? } ?>
						
						<? if ( (@$d->pvp->totalHonorableKills) && (@$d->pvp->ratedBattlegrounds->personalRating) ) { ?> - <? } ?>
				
						<? if (@$d->pvp->ratedBattlegrounds->personalRating) { ?>
							BG Rating: <?= $d->pvp->ratedBattlegrounds->personalRating; ?>
						<? } ?>
					</div>
				<? } ?>
				
				<? if (@$d->achievementPoints) { ?>
					<div class="sub3">
						Achievement Points: <?= $d->achievementPoints; ?> (<?= count($d->achievements->achievementsCompleted); ?> complete)
					</div>
				<? } ?>		
				
				<? if ( (count(@$d->companions)>0) || (count(@$d->mounts)>0) ) { ?>
					<div class="sub3">
						<? if (count(@$d->companions)>0) { ?>
							Companions: <?= count(@$d->companions); ?>
						<? } ?>
						<? if ( (count(@$d->companions)>0) && (count(@$d->mounts)>0) ) { ?> - <? } ?>
						<? if (count(@$d->mounts)>0) { ?>
							Mounts: <?= count(@$d->mounts); ?>
						<? } ?>
					</div>
				<? } ?>		
				
			  </div>
			  <div id="stats_char_right">

				<div id="gscore" class="sub6"><?= $d->items->averageItemLevelEquipped; ?></div>

				<div class="sub_talent">
					<?= $this->Profile->getActiveTalent($d->talents); ?>
				</div>

				<div class="hpx">  
					<div class="hp">
						<?= $d->stats->health; ?>
					</div>
					<?= $this->Profile->getPower($d->stats->powerType, $d->stats->power); ?>
				</div>

				<?= $this->Profile->getProfessions($d->professions); ?>
			  </div>
			</div>
          
			<?= $this->element('profile/arena', array($d)); ?>
			<?= $this->element('profile/base', array($d)); ?>
			<?= $this->element('profile/melee', array($d)); ?>
			<?= $this->element('profile/ranged', array($d)); ?>
          
            <? // $this->print_stats_ranged(); ?>
            <? // $this->print_stats_spell(); ?>
            <? // $this->print_stats_networking(); ?>
          </div>
          <div id="char_bot">
          	<?= $this->Profile->gearSlot("Mh", @$gear['mainHand'], "horiz"); ?>
          	<?= $this->Profile->gearSlot("Oh", @$gear['offHand'], "horiz"); ?>
          	<?= $this->Profile->gearSlot("Ra", @$gear['ranged'], "horiz"); ?>
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
    
<!-- 
    <pre style="background-color: teal;">
    	<? print_r($d); ?>
    </pre>
 -->    
