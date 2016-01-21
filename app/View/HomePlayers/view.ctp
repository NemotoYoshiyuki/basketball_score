<div class="homePlayers view">
<h2><?php echo __('Home Player'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($homePlayer['HomePlayer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($homePlayer['HomePlayer']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($homePlayer['HomePlayer']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home Player Name'); ?></dt>
		<dd>
			<?php echo h($homePlayer['HomePlayer']['home_player_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo $this->Html->link($homePlayer['Position']['id'], array('controller' => 'positions', 'action' => 'view', $homePlayer['Position']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($homePlayer['HomePlayer']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($homePlayer['HomePlayer']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($homePlayer['HomePlayer']['number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($homePlayer['HomePlayer']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Player Photo'); ?></dt>
		<dd>
			<?php echo h($homePlayer['HomePlayer']['player_photo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Home Player'), array('action' => 'edit', $homePlayer['HomePlayer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Home Player'), array('action' => 'delete', $homePlayer['HomePlayer']['id']), array(), __('Are you sure you want to delete # %s?', $homePlayer['HomePlayer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Home Players'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Home Player'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div>
