<div class="matches form">
<?php echo $this->Form->create('Match'); ?>
	<fieldset>
		<legend><?php echo __('Add Match'); ?></legend>
	<?php
		echo $this->Form->input('game_day',array(
			'label' => array(
				'text' => '開催日時')
			)
		);
		echo $this->Form->input('result_id',array(
			'label' => array(
				'text' => '結果')
			)
		);
		echo $this->Form->input('away_team_id',array(
			'label' => array(
				'text' => '対戦相手')
			)
		);
		echo $this->Form->input('get_score',array(
			'label' => array(
				'text' => '得点')
			)
		);
		echo $this->Form->input('loss_score',array(
			'label' => array(
				'text' => '失点')
			)
		);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Matches'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Results'), array('controller' => 'results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Result'), array('controller' => 'results', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Away Teams'), array('controller' => 'away_teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Away Team'), array('controller' => 'away_teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
