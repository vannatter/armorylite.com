
<div id="stats_base" class="stats stat_block">
<div id="stats_head_base" class="stats_head_off stats_toggle" data-statname="base"><?= __('Base Statistics'); ?></div>
<div style="display: none;" id="stats_main_base" class="stats_main"><center>

	<table border="0" cellpadding="0" cellspacing="0" class="stat_table">
		<tr class="stats_item">
			<td class="stats_item stats_lbl"><?= __('Health'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->health;?></td>
          	<td width=20></td>
          	<td class="stats_item stats_lbl"><?= ucwords((($d->stats->powerType == "runic-power") ? "runic" : $d->stats->powerType)); ?>:</td><td class="stats_item stats_val"><?= $d->stats->power;?></td>
          	<td width=20></td>
          	<td class="stats_item stats_lbl"><?= __('Resilience'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->resil;?></td>
        </tr>
		<tr class="stats_item">
			<td class="stats_item stats_lbl"><?= __('Strength'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->str;?></td>
          	<td width=20></td>
          	<td class="stats_item stats_lbl"><?= __('Agility'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->agi;?></td>
          	<td width=20></td>
          	<td class="stats_item stats_lbl"><?= __('Stamina'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->sta;?></td>
        </tr>
        <tr class="stats_item">
          	<td class="stats_item stats_lbl"><?= __('Intellect'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->int;?></td>
          	<td width=20></td>
          	<td class="stats_item stats_lbl"><?= __('Spirit'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->spr;?></td>
          	<td width=20></td>
          	<td class="stats_item stats_lbl"><?= __('Armor'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->armor;?></td>
        </tr>
        <tr class="stats_item">
          	<td class="stats_item stats_lbl"><?= __('Mastery'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->masteryRating; ?></td>
          	<td width=20></td>
          	<td class="stats_item stats_lbl"><?= __('Mastery %'); ?>:</td><td class="stats_item stats_val"><?= round($d->stats->mastery,2); ?></td>
          	<td width=20></td>
          	<td class="stats_item stats_lbl"><?= __('Haste'); ?>:</td><td class="stats_item stats_val"><?= $d->stats->hasteRating; ?></td>
        </tr>
	</table>
	<br/>

</center></div></div>