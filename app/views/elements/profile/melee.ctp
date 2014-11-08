
<div id="stats_melee" class="stats stat_block">
<div id="stats_head_melee" class="stats_head_off stats_toggle" data-statname="melee"><?= __('Melee Statistics'); ?></div>
<div style="display: none;" id="stats_main_melee" class="stats_main"><center>


	<table width="380" border="0" cellpadding="0" cellspacing="0" class="stats_item stat_table">
		<tr class="stats_item">
			<td class="stats_item stats_lbl"><?= __('MH'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->mainHandDmgMin; ?> - <?= $d->stats->mainHandDmgMax; ?> (<?= round($d->stats->mainHandDps); ?> DPS)</td>
			<td class="stats_item stats_lbl"><?= __('MH Speed'); ?>:</td><td class="stats_item stats_val"><?= round($d->stats->mainHandSpeed,2); ?></td>
		</tr>
		
		<? if (@$d->stats->offHandDps > 0) { ?>
			<tr class="stats_item">
				<td class="stats_item stats_lbl"><?= __('OH'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->offHandDmgMin; ?> - <?= $d->stats->offHandDmgMax; ?> (<?= round($d->stats->offHandDps); ?> DPS)</td>
				<td class="stats_item stats_lbl"><?= __('OH Speed'); ?>:</td><td class="stats_item stats_val"><?= round($d->stats->offHandSpeed,2); ?></td>
			</tr>
		<? } ?>
		
		<tr class="stats_item">
			<td class="stats_item stats_lbl"><?= __('AP'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->attackPower; ?></td>
			<td class="stats_item stats_lbl"><?= __('Expertise'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->expertiseRating; ?></td>
		</tr>		
		
		<tr class="stats_item">
			<td class="stats_item stats_lbl"><?= __('Crit Rating'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->critRating; ?></td>
			<td class="stats_item stats_lbl"><?= __('Crit %'); ?>:</td><td class="stats_item stats_val"><?= round($d->stats->crit,2); ?></td>
		</tr>		
				
		<tr class="stats_item">
			<td class="stats_item stats_lbl"><?= __('Dodge Rating'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->dodgeRating; ?></td>
			<td class="stats_item stats_lbl"><?= __('Dodge %'); ?>:</td><td class="stats_item stats_val"><?= round($d->stats->dodge,2); ?></td>
		</tr>						

		<tr class="stats_item">
			<td class="stats_item stats_lbl"><?= __('Parry Rating'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->parryRating; ?></td>
			<td class="stats_item stats_lbl"><?= __('Parry %'); ?>:</td><td class="stats_item stats_val"><?= round($d->stats->parry,2); ?></td>
		</tr>						

		<tr class="stats_item">
			<td class="stats_item stats_lbl"><?= __('Block Rating'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->blockRating; ?></td>
			<td class="stats_item stats_lbl"><?= __('Block %'); ?>:</td><td class="stats_item stats_val"><?= round($d->stats->block,2); ?></td>
		</tr>						
		
	</table>
	<br/>

</center></div></div>

