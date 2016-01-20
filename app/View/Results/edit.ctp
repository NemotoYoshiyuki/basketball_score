<div class="results form">
<?php echo $this->Form->create('Result'); ?>
	<fieldset>
		<legend><?php echo __('Edit Result'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('result');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Result.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Result.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Results'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Matches'), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match'), array('controller' => 'matches', 'action' => 'add')); ?> </li>
	</ul>
</div>
