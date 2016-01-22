<div class="awayTeams index">
	<h2><?php echo __('Away Teams'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('away_team_name','対戦相手'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($awayTeams as $awayTeam): ?>
	<tr>
		<td><?php echo h($awayTeam['AwayTeam']['id']); ?>&nbsp;</td>
		<td><?php echo h($awayTeam['AwayTeam']['away_team_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $awayTeam['AwayTeam']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $awayTeam['AwayTeam']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $awayTeam['AwayTeam']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $awayTeam['AwayTeam']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Away Team'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Matches'), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Home Players'), array('controller' => 'home_players','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Away Teams'), array('controller' => 'away_teams', 'action' => 'index')); ?> </li>
	</ul>
</div>
