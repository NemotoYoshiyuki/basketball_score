<div class="positions form">
<?php echo $this->Form->create('Position'); ?>
	<fieldset>
		<legend><?php echo __('Edit Position'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('position_name',array(
			'label' => array(
				'text' => 'ポジション'
			)
		));
		echo $this->Form->input('text',array(
			'label' => array(
				'text' => '説明'
			)
		));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Position.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Position.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Positions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Home Players'), array('controller' => 'home_players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Home Player'), array('controller' => 'home_players', 'action' => 'add')); ?> </li>
	</ul>
</div>
