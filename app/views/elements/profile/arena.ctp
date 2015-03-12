
<div id="stats_arena" class="stats stat_block">
<div id="stats_head_arena" class="stats_head_arena stats_head_off stats_toggle" data-statname="arena" <?= ((@$i) ? " data-multi_id='" . $i . "' " : ''); ?>><?= __('Arena and Battleground Statistics'); ?></div>
<div style="display: none;" id="stats_main_arena" class="stats_main_arena stats_main" <?= ((@$i) ? " data-multi_id='" . $i . "' " : ''); ?>><center>

		<? if (count(@$d->pvp->ratedBattlegrounds->battlegrounds)>0) { ?>
			<table width="380" border="0" cellpadding="0" cellspacing="0" class="stat_table">
				<tr>
					<td colspan="3" class="stat_table_hdr">
						<?= __('Rated Battlegrounds'); ?>
					</td>
				</tr>
				
				<tr>
					<th><?= __('Battleground'); ?></th>
					<th><?= __('Played'); ?></th>
					<th><?= __('Won (%)'); ?></th>
				</tr>	
				
				<? foreach ($d->pvp->ratedBattlegrounds->battlegrounds as $bg) { ?>		
					<tr>
						<td><?= $bg->name; ?></td>
						<td><?= $bg->played; ?></td>
						<td><?= $bg->won; ?> (<?= round(@($bg->won / $bg->played)*100); ?>%)</td>
					</tr>
				<? } ?>
			</table>
		<? } ?>
	
		<? if (count(@$d->pvp->arenaTeams)>0) { ?>
			<table width="380" border="0" cellpadding="0" cellspacing="0" class="stat_table">
				<tr>
					<td colspan="4" class="stat_table_hdr">
						<?= __('Arena Teams'); ?>
					</td>
				</tr>
				
				<tr>
					<th><?= __('Team Name'); ?></th>
					<th><?= __('Size'); ?></th>
					<th><?= __('Personal'); ?></th>
					<th><?= __('Team'); ?></th>
				</tr>	
				
				<? foreach ($d->pvp->arenaTeams as $team) { ?>		
					<tr>
						<td>
							<? if ($set->anon) { ?>
								Anonymous
							<? } else { ?>
								<?= $team->name; ?>
							<? } ?>
						</td>
						<td><?= $team->size; ?></td>
						<td><?= $team->personalRating; ?></td>
						<td><?= $team->teamRating; ?></td>
					</tr>
				<? } ?>
			</table>
		<? } ?>

	<br/>
</center></div></div>