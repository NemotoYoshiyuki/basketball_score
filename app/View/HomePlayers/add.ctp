<div class="homePlayers form">
<?php echo $this->Form->create('HomePlayer'); ?>
	<fieldset>
		<legend><?php echo __('Add Home Player'); ?></legend>
	<?php
		echo $this->Form->input('home_player_name',array(
			'label' => array(
				'text' => '選手名'
			)
		));
		echo $this->Form->input('number',array(
			'label' => array(
				'text' => '背番号'
			)
		));
		echo $this->Form->input('position_id',array(
			'label' => array(
				'text' => 'ポジション'
			)
		));
		echo $this->Form->input('height',array(
			'label' => array(
				'text' => '身長'
			)
		));
		echo $this->Form->input('weight',array(
			'label' => array(
				'text' => '体重'
			)
		));
		echo $this->Form->input('comment',array(
			'label' => array(
				'text' => 'コメント'
			)
		));
		echo $this->Form->input('player_photo',array(
			'label' => array(
				'text' => 'ピクチャー'
			)
		));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Matches'), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Home Players'), array('controller' => 'home_players','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Away Teams'), array('controller' => 'away_teams', 'action' => 'index')); ?> </li>
	</ul>
</div>
