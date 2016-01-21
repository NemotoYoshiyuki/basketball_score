<div class="positions form">
<?php echo $this->Form->create('Position'); ?>
	<fieldset>
		<legend><?php echo __('Add Position'); ?></legend>
	<?php
		echo $this->Form->input('position_name');
		echo $this->Form->input('text');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Positions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Home Players'), array('controller' => 'home_players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Home Player'), array('controller' => 'home_players', 'action' => 'add')); ?> </li>
	</ul>
</div>
