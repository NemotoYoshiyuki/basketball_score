<div class="homePlayers form">
<?php echo $this->Form->create('HomePlayer'); ?>
	<fieldset>
		<legend><?php echo __('Edit Home Player'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('home_player_name');
		echo $this->Form->input('position_id');
		echo $this->Form->input('height');
		echo $this->Form->input('weight');
		echo $this->Form->input('number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HomePlayer.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('HomePlayer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Home Players'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div>
