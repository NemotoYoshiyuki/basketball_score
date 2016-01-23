<div class="awayTeams form">
<?php echo $this->Form->create('AwayTeam'); ?>
	<fieldset>
		<legend><?php echo __('Edit Away Team'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('away_team_name',array(
			'label' => array(
				'text' => '対戦相手'
			)
		));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Away Team'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Form->postLink(__('Delete Away Team'), array('action' => 'delete', $this->Form->value('AwayTeam.id')), array(), __('このレコードを消去しますか？ # %s?', $this->Form->value('AwayTeam.id'))); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches'), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Home Players'), array('controller' => 'home_players','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Away Teams'), array('controller' => 'away_teams', 'action' => 'index')); ?> </li>
	</ul>
</div>
