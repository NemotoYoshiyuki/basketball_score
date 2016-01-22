<div class="awayTeams view">
<h2><?php echo __('Away Team'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($awayTeam['AwayTeam']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('対戦相手'); ?></dt>
		<dd>
			<?php echo h($awayTeam['AwayTeam']['away_team_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($awayTeam['AwayTeam']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($awayTeam['AwayTeam']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Away Team'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Edit Away Team'), array('action' => 'edit', $awayTeam['AwayTeam']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Away Team'), array('action' => 'delete', $awayTeam['AwayTeam']['id']), array(), __('Are you sure you want to delete # %s?', $awayTeam['AwayTeam']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches'), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Home Players'), array('controller' => 'home_players','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Away Teams'), array('controller' => 'away_teams', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h4><?php //echo __('Related Matches'); ?></h4>
	<?php if (!empty($awayTeam['Match'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('開催日時'); ?></th>
		<th><?php echo __('得点'); ?></th>
		<th><?php echo __('結果'); ?></th>
		<th><?php echo __('失点'); ?></th>
		<th><?php echo __('対戦相手'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($awayTeam['Match'] as $match): ?>
		<tr>
			<td><?php echo $match['id']; ?></td>
			<td><?php echo $match['game_day']; ?></td>
			<td><?php echo $match['get_score']; ?></td>
			<td><?php echo $match['Result']['result']; ?></td>
			<td><?php echo $match['loss_score']; ?></td>
			<td><?php echo $match['AwayTeam']['away_team_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'matches', 'action' => 'view', $match['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'matches', 'action' => 'edit', $match['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'matches', 'action' => 'delete', $match['id']), array(), __('Are you sure you want to delete # %s?', $match['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Match'), array('controller' => 'matches', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
