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
		<dt><?php echo __('開催日時'); ?></dt>
		<dd>
			<?php echo h($match['Match']['game_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('結果'); ?></dt>
		<dd>
			<?php echo h($match['Result']['result']); ?>
		</dd>
		<dt><?php echo __('対戦相手'); ?></dt>
		<dd>
			<?php echo $this->Html->link($match['AwayTeam']['away_team_name'], array('controller' => 'away_teams', 'action' => 'view', $match['AwayTeam']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('得点'); ?></dt>
		<dd>
			<?php echo h($match['Match']['get_score']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('失点'); ?></dt>
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
		<li><?php echo $this->Html->link(__('List Away Teams'), array('controller' => 'away_teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Away Team'), array('controller' => 'away_teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
