
<div id="stats_spell" class="stats stat_block">
<div id="stats_head_spell" class="stats_head_off stats_toggle" data-statname="spell"><?= __('Spell Statistics'); ?></div>
<div style="display: none;" id="stats_main_spell" class="stats_main"><center>

	<table width="380" border="0" cellpadding="0" cellspacing="0" class="stats_item stat_table">
		<tr class="stats_item">
			<td class="stats_item stats_lbl"><?= __('Spell Power'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->spellPower; ?></td>
			<td class="stats_item stats_lbl"><?= __('Penetration'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->spellPen; ?></td>
		</tr>

		<tr class="stats_item">
			<td class="stats_item stats_lbl"><?= __('Mana / 5'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->mana5; ?></td>
			<td class="stats_item stats_lbl"><?= __('Mana / 5 Combat'); ?>:</td><td class="stats_item stats_val"><?= round($d->stats->mana5Combat,2); ?></td>
		</tr>		
		
		<tr class="stats_item">
			<td class="stats_item stats_lbl"><?= __('Crit Rating'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->spellCritRating; ?></td>
			<td class="stats_item stats_lbl"><?= __('Crit %'); ?>:</td><td class="stats_item stats_val"><?= round($d->stats->spellCrit,2); ?></td>
		</tr>		
	</table>
	<br/>

</center></div></div>
