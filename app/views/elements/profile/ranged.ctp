
<div id="stats_ranged" class="stats stat_block">
<div id="stats_head_ranged" class="stats_head_off stats_toggle" data-statname="ranged"><?= __('Ranged Statistics'); ?></div>
<div style="display: none;" id="stats_main_ranged" class="stats_main"><center>

	<table width="380" border="0" cellpadding="0" cellspacing="0" class="stats_item stat_table">
		<tr class="stats_item">
			<td class="stats_item stats_lbl"><?= __('Damage'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->rangedDmgMin; ?> - <?= $d->stats->rangedDmgMax; ?> (<?= round($d->stats->rangedDps); ?> DPS)</td>
			<td class="stats_item stats_lbl"><?= __('Speed'); ?>:</td><td class="stats_item stats_val"><?= round($d->stats->rangedSpeed,2); ?></td>
		</tr>
		
		<tr class="stats_item">
			<td class="stats_item stats_lbl"><?= __('Crit Rating'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->rangedCritRating; ?></td>
			<td class="stats_item stats_lbl"><?= __('Crit %'); ?>:</td><td class="stats_item stats_val"><?= round($d->stats->rangedCrit,2); ?></td>
		</tr>		
		
		<tr class="stats_item">
			<td class="stats_item stats_lbl"><?= __('Hit Rating'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->rangedHitRating; ?></td>
			<td class="stats_item stats_lbl"><?= __('Hit %'); ?>:</td><td class="stats_item stats_val"><?= round($d->stats->rangedHitPercent,2); ?></td>
		</tr>		
	</table>
	<br/>

</center></div></div>