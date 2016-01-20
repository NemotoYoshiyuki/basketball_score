<div class="matches index">
	<h2><?php echo __('Matches'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('game_day'); ?></th>
			<th><?php echo $this->Paginator->sort('result_id'); ?></th>
			<th><?php echo $this->Paginator->sort('away_team_id'); ?></th>
			<th><?php echo $this->Paginator->sort('get_score'); ?></th>
			<th><?php echo $this->Paginator->sort('loss_score'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($matches as $match): ?>
	<tr>
		<td><?php echo h($match['Match']['id']); ?>&nbsp;</td>
		<td><?php echo h($match['Match']['created']); ?>&nbsp;</td>
		<td><?php echo h($match['Match']['modified']); ?>&nbsp;</td>
		<td><?php echo h($match['Match']['game_day']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($match['Result']['id'], array('controller' => 'results', 'action' => 'view', $match['Result']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($match['AwayTeam']['id'], array('controller' => 'away_teams', 'action' => 'view', $match['AwayTeam']['id'])); ?>
		</td>
		<td><?php echo h($match['Match']['get_score']); ?>&nbsp;</td>
		<td><?php echo h($match['Match']['loss_score']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $match['Match']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $match['Match']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $match['Match']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $match['Match']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Match'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Results'), array('controller' => 'results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Result'), array('controller' => 'results', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Away Teams'), array('controller' => 'away_teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Away Team'), array('controller' => 'away_teams', 'action' => 'add')); ?> </li>
	</ul>
</div>