<div class="matches view">
<h2><?php echo __('Match'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($match['Match']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($match['Match']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($match['Match']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Game Day'); ?></dt>
		<dd>
			<?php echo h($match['Match']['game_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Result'); ?></dt>
		<dd>
			<?php echo $this->Html->link($match['Result']['result'], array('controller' => 'results', 'action' => 'view', $match['Result']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Away Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($match['AwayTeam']['away_team_name'], array('controller' => 'away_teams', 'action' => 'view', $match['AwayTeam']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Get Score'); ?></dt>
		<dd>
			<?php echo h($match['Match']['get_score']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Loss Score'); ?></dt>
		<dd>
			<?php echo h($match['Match']['loss_score']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Match'), array('action' => 'edit', $match['Match']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Match'), array('action' => 'delete', $match['Match']['id']), array(), __('Are you sure you want to delete # %s?', $match['Match']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Results'), array('controller' => 'results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Result'), array('controller' => 'results', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Away Teams'), array('controller' => 'away_teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Away Team'), array('controller' => 'away_teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
