<?php echo $this->Html->css('Home_Player'); ?>
<div class="homePlayers view">
	<?php echo "所属チーム<br>" ?>
	<?php echo $this->Html->link(__('やったね鈴木 '), array('action' => 'index')); ?>
	<div class="background">
<table class="table">
	<tr>
		<td rowspan="6"><img class="player_img" src=<?php echo h($homePlayer['HomePlayer']['player_photo']); ?>></td>
		<td><?php echo __('選手名'); ?></td>
		<td><?php echo h($homePlayer['HomePlayer']['home_player_name']); ?></td>
	</tr>

	<tr>
		<td><?php echo __('背番号'); ?></td>
		<td><?php echo h($homePlayer['HomePlayer']['number']); ?></td>
	</tr>

	<tr>
		<td><?php echo __('ポジション'); ?></td>
		<td><?php echo $this->Html->link($homePlayer['Position']['id'], array('controller' => 'positions', 'action' => 'view', $homePlayer['Position']['id'])); ?></td>
	</tr>

	<tr>
		<td><?php echo __('身長'); ?></td>
		<td><?php echo h($homePlayer['HomePlayer']['height']); ?></td>
	</tr>

	<tr>
		<td><?php echo __('体重'); ?></td>
		<td><?php echo h($homePlayer['HomePlayer']['weight']); ?></td>
	</tr>



	<tr>
		<td><?php echo __('コメント'); ?></td>
		<td><?php echo h($homePlayer['HomePlayer']['comment']); ?></td>
	</tr>
</table>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('選手リスト'), array('action' => 'index')); ?> </li>
		<br><li><?php echo $this->Html->link(__('選手情報の編集'), array('action' => 'edit', $homePlayer['HomePlayer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('選手情報を消去'), array('action' => 'delete', $homePlayer['HomePlayer']['id']), array(), __('この選手情報を消去しますか？ # %s?', $homePlayer['HomePlayer']['id'])); ?> </li>

		<li><?php echo $this->Html->link(__('New Home Player'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div>
