
	<div class="profile_content">

		<?php for ($i=0; $i < count($d); $i++) { ?>

			<?= $this->element('navigation/profile_top_multi', array($d[$i], "i" => $i)); ?>
			<div id="profile" class="profile_multi">
				<div id="char_left">
					<?= $this->Profile->gearSlot("He_".$i, @$gear[$i]['head'], null, "He"); ?>
					<?= $this->Profile->gearSlot("Ne_".$i, @$gear[$i]['neck'], null, "Ne"); ?>
					<?= $this->Profile->gearSlot("Sh_".$i, @$gear[$i]['shoulder'], null, "Sh"); ?>
					<?= $this->Profile->gearSlot("Ba_".$i, @$gear[$i]['back'], null, "Ba"); ?>
					<?= $this->Profile->gearSlot("Ch_".$i, @$gear[$i]['chest'], null, "Ch"); ?>
					<?= $this->Profile->gearSlot("St_".$i, @$gear[$i]['shirt'], null, "St"); ?>
					<?= $this->Profile->gearSlot("Ta_".$i, @$gear[$i]['tabard'], null, "Ta"); ?>
					<?= $this->Profile->gearSlot("Br_".$i, @$gear[$i]['wrist'], null, "Br"); ?>
				</div>

				<div id="char_mid">
					<div id="char_grid">
						<div id="stats_char">
							<div id="stats_char_left">
								<div class="sub">
									<?= $this->Profile->activeTitle($d[$i]->titles, $d[$i]->name); ?>
								</div>
								<? if (@$d[$i]->guild->name) { ?>
									<div class="sub2"> 
										&lt;<a href="<?= $set->lite_url . "/g"; ?>"><?= $d[$i]->guild->name; ?></a>&gt;
									</div>
								<? } ?>
				
								<div class="sub3">
									<?= $d[$i]->level; ?> <?= $this->Profile->getGender($d[$i]->gender); ?> <?= $this->Profile->getRace($d[$i]->race); ?> <?= $this->Profile->getClass($d[$i]->class); ?>
								</div>

								<div class="sub3">
									<?= $this->Profile->getFaction($d[$i]->race); ?> - <?= $d[$i]->realm; ?> - <?= $this->Profile->getRegion($set->z); ?>
								</div>
				
								<? if ( (@$d[$i]->pvp->totalHonorableKills) || (@$d[$i]->pvp->ratedBattlegrounds->personalRating) ) { ?>
									<div class="sub3">
										<? if (@$d[$i]->pvp->totalHonorableKills) { ?>
											Honor Kills: <?= number_format($d[$i]->pvp->totalHonorableKills); ?>
										<? } ?>
										
										<? if ( (@$d[$i]->pvp->totalHonorableKills) && (@$d[$i]->pvp->ratedBattlegrounds->personalRating) ) { ?> - <? } ?>
								
										<? if (@$d[$i]->pvp->ratedBattlegrounds->personalRating) { ?>
											BG Rating: <?= $d[$i]->pvp->ratedBattlegrounds->personalRating; ?>
										<? } ?>
									</div>
								<? } ?>
				
								<? if (@$d[$i]->achievementPoints) { ?>
									<div class="sub3">
										Achievement Points: <?= $d[$i]->achievementPoints; ?> (<?= count($d[$i]->achievements->achievementsCompleted); ?> complete)
									</div>
								<? } ?>		
				
								<? if ( (count(@$d[$i]->pets->numCollected)>0) || (count(@$d[$i]->mounts->numCollected)>0) ) { ?>
									<div class="sub3">
										<? if (count(@$d[$i]->pets->numCollected)>0) { ?>
											Companions: <?= @$d[$i]->pets->numCollected; ?>
										<? } ?>
										<? if ( (count(@$d[$i]->pets->numCollected)>0) && (count(@$d[$i]->mounts->numCollected)>0) ) { ?> - <? } ?>
										<? if (count(@$d[$i]->mounts)>0) { ?>
											Mounts: <?= @$d[$i]->mounts->numCollected; ?>
										<? } ?>
									</div>
								<? } ?>
				
							</div>
							<div id="stats_char_right">
								<div id="gscore" class="sub6"><?= $d[$i]->items->averageItemLevelEquipped; ?></div>

								<div class="sub_talent">
									<?= $this->Profile->getActiveSpec($d[$i]->talents); ?>
								</div>

								<div class="hpx">  
									<div class="hp">
										<?= $d[$i]->stats->health; ?>
									</div>
									<?= $this->Profile->getPower($d[$i]->stats->powerType, $d[$i]->stats->power); ?>
								</div>

								<?= $this->Profile->getProfessions($d[$i]->professions); ?>
							</div>
						</div>

						<?= $this->element('profile/arena', array("d" => $d[$i], "i" => $i+1)); ?>
						<?= $this->element('profile/base', array("d" => $d[$i], "i" => $i+1)); ?>
						<?= $this->element('profile/melee', array("d" => $d[$i], "i" => $i+1)); ?>
						<?= $this->element('profile/ranged', array("d" => $d[$i], "i" => $i+1)); ?>
						<?= $this->element('profile/spell', array("d" => $d[$i], "i" => $i+1)); ?>
					</div>

					<div id="char_bot">
						<?= $this->Profile->gearSlot("Mh_".$i, @$gear[$i]['mainHand'], "horiz", "Mh"); ?>
						<?= $this->Profile->gearSlot("Oh_".$i, @$gear[$i]['offHand'], "horiz", "Oh"); ?>
						<?= $this->Profile->gearSlot("Ra_".$i, @$gear[$i]['ranged'], "horiz", "Ra"); ?>
					</div>
				</div>

				<div id="char_right">
					<?= $this->Profile->gearSlot("Gl_".$i, @$gear[$i]['hands'], null, "Gl"); ?>
					<?= $this->Profile->gearSlot("Be_".$i, @$gear[$i]['waist'], null, "Be"); ?>
					<?= $this->Profile->gearSlot("Le_".$i, @$gear[$i]['legs'], null, "Le"); ?>
					<?= $this->Profile->gearSlot("Bo_".$i, @$gear[$i]['feet'], null, "Bo"); ?>
					<?= $this->Profile->gearSlot("R1_".$i, @$gear[$i]['finger1'], null, "R1"); ?>
					<?= $this->Profile->gearSlot("R2_".$i, @$gear[$i]['finger2'], null, "R2"); ?>
					<?= $this->Profile->gearSlot("T1_".$i, @$gear[$i]['trinket1'], null, "T1"); ?>
					<?= $this->Profile->gearSlot("T2_".$i, @$gear[$i]['trinket2'], null, "T2"); ?>
				</div>
			</div>

			<script language="javascript">
				$(document).ready(function() {
					expandem(<?= $this->Profile->getExpander($d[$i]->class, $i+1); ?>);
				});
			</script>
			
		<?php } ?>
		<?= $this->element('navigation/profile_bot_blank'); ?>
		
	</div>

	<div class="page_ad">
		<?= $this->Common->show_ad("homepage","tall"); ?>      
	</div>

	
