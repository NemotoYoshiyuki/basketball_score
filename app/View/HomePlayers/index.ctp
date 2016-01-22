<div class="homePlayers index">
	<h2><?php echo __('Home Players'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('home_player_name','選手名'); ?></th>
			<th><?php echo $this->Paginator->sort('number','背番号'); ?></th>
			<th><?php echo $this->Paginator->sort('position_id','ポジション'); ?></th>
			<th><?php echo $this->Paginator->sort('height','身長'); ?></th>
			<th><?php echo $this->Paginator->sort('weight','体重'); ?></th>
			<th><?php echo $this->Paginator->sort('comment','コメント'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($homePlayers as $homePlayer): ?>
	<tr>
		<td><?php echo h($homePlayer['HomePlayer']['id']); ?>&nbsp;</td>
		<td><?php echo h($homePlayer['HomePlayer']['home_player_name']); ?>&nbsp;</td>
		<td><?php echo h($homePlayer['HomePlayer']['number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($homePlayer['Position']['position_name'], array('controller' => 'positions', 'action' => 'view', $homePlayer['Position']['id'])); ?>
		</td>
		<td><?php echo h($homePlayer['HomePlayer']['height']); ?>cm&nbsp;</td>
		<td><?php echo h($homePlayer['HomePlayer']['weight']); ?>kg&nbsp;</td>
		<td><?php echo h($homePlayer['HomePlayer']['comment']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('詳細'), array('action' => 'view', $homePlayer['HomePlayer']['id'])); ?>
			<?php echo $this->Html->link(__('編集'), array('action' => 'edit', $homePlayer['HomePlayer']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $homePlayer['HomePlayer']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $homePlayer['HomePlayer']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Home Player'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches'), array('controller' => 'matches', 'action' => 'index')); ?> </li>
	</ul>
</div>
