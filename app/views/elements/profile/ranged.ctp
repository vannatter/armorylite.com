
<div id="stats_ranged" class="stats stat_block">
<div id="stats_head_ranged" class="stats_head_ranged stats_head_off stats_toggle" data-statname="ranged" <?= ((@$i) ? " data-multi_id='" . $i . "' " : ''); ?>><?= __('Ranged Statistics'); ?></div>
<div style="display: none;" id="stats_main_ranged" class="stats_main_ranged stats_main" <?= ((@$i) ? " data-multi_id='" . $i . "' " : ''); ?>><center>

	<table width="380" border="0" cellpadding="0" cellspacing="0" class="stats_item stat_table">
		<? if ($d->stats->rangedDmgMin >= 0) { ?>
			<tr class="stats_item">
				<td class="stats_item stats_lbl"><?= __('Damage'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->rangedDmgMin; ?> - <?= $d->stats->rangedDmgMax; ?> (<?= round($d->stats->rangedDps); ?> DPS)</td>
				<td class="stats_item stats_lbl"><?= __('Speed'); ?>:</td><td class="stats_item stats_val"><?= round($d->stats->rangedSpeed,2); ?></td>
			</tr>
		<? } ?>
		
		<tr class="stats_item">
			<td class="stats_item stats_lbl"><?= __('Ranged AP'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->rangedAttackPower; ?></td>
		</tr>		
		
	</table>
	<br/>

</center></div></div>