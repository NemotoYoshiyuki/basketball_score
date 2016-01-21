<div class="positions view">
<h2><?php echo __('Position'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($position['Position']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($position['Position']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($position['Position']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position Name'); ?></dt>
		<dd>
			<?php echo h($position['Position']['position_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($position['Position']['text']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Position'), array('action' => 'edit', $position['Position']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Position'), array('action' => 'delete', $position['Position']['id']), array(), __('Are you sure you want to delete # %s?', $position['Position']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Home Players'), array('controller' => 'home_players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Home Player'), array('controller' => 'home_players', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Home Players'); ?></h3>
	<?php if (!empty($position['HomePlayer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Home Player Name'); ?></th>
		<th><?php echo __('Position Id'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Player Photo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($position['HomePlayer'] as $homePlayer): ?>
		<tr>
			<td><?php echo $homePlayer['id']; ?></td>
			<td><?php echo $homePlayer['created']; ?></td>
			<td><?php echo $homePlayer['modified']; ?></td>
			<td><?php echo $homePlayer['home_player_name']; ?></td>
			<td><?php echo $homePlayer['position_id']; ?></td>
			<td><?php echo $homePlayer['height']; ?></td>
			<td><?php echo $homePlayer['weight']; ?></td>
			<td><?php echo $homePlayer['number']; ?></td>
			<td><?php echo $homePlayer['comment']; ?></td>
			<td><?php echo $homePlayer['player_photo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'home_players', 'action' => 'view', $homePlayer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'home_players', 'action' => 'edit', $homePlayer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'home_players', 'action' => 'delete', $homePlayer['id']), array(), __('Are you sure you want to delete # %s?', $homePlayer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Home Player'), array('controller' => 'home_players', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
