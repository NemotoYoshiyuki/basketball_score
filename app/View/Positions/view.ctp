<div class="positions view">
<h2><?php echo __('Position'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($position['Position']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ポジション'); ?></dt>
		<dd>
			<?php echo h($position['Position']['position_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('説明'); ?></dt>
		<dd>
			<?php echo h($position['Position']['text']); ?>
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
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Position'), array('action' => 'edit', $position['Position']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches'), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Home Players'), array('controller' => 'home_players','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Away Teams'), array('controller' => 'away_teams', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<?php if (!empty($position['HomePlayer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('選手名'); ?></th>
		<th><?php echo __('背番号'); ?></th>
		<th><?php echo __('ポジション'); ?></th>
		<th><?php echo __('身長'); ?></th>
		<th><?php echo __('体重'); ?></th>
		<th><?php echo __('コメント'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($position['HomePlayer'] as $homePlayer): ?>
		<tr>
			<td><?php echo $homePlayer['id']; ?></td>
			<td><?php echo $homePlayer['home_player_name']; ?></td>
			<td><?php echo $homePlayer['number']; ?></td>
			<td><?php echo $homePlayer['Position']['position_name']; ?></td>
			<td><?php echo $homePlayer['height']; ?>cm</td>
			<td><?php echo $homePlayer['weight']; ?>kg</td>
			<td><?php echo $homePlayer['comment']; ?></td>
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
