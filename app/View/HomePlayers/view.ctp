<?php echo $this->Html->css('Home_Player'); ?>
<div class="homePlayers view">
    <div class="homeTeam">
        <?php echo "所属チーム" ?>
        <?php echo $this->Html->link(__('やったね鈴木 '), array('action' => 'index')); ?>
     </div>
	<div class="background">
<table class="table">
	<tr>
		<td rowspan="6"><img class="player_img" src="/basketball_score/app/webroot/img/player_photo/
		<?php 
			if(!($homePlayer['HomePlayer']['player_photo'] == '')){
				echo h($homePlayer['HomePlayer']['player_photo']);
			}else{
				echo "no_image.png";
			}
		?>"></td>
		<td><?php echo __('選手名'); ?></td>
		<td><?php echo h($homePlayer['HomePlayer']['home_player_name']); ?></td>
	</tr>

	<tr>
		<td><?php echo __('背番号'); ?></td>
		<td><?php echo h($homePlayer['HomePlayer']['number']); ?></td>
	</tr>

	<tr>
		<td><?php echo __('ポジション'); ?></td>
		<td><?php echo $this->Html->link($homePlayer['Position']['position_name'], array('controller' => 'positions', 'action' => 'view', $homePlayer['Position']['id'])); ?></td>
	</tr>

	<tr>
		<td><?php echo __('身長'); ?></td>
		<td><?php echo h($homePlayer['HomePlayer']['height']);?><?php echo "cm"; ?></td>
	</tr>

	<tr>
		<td><?php echo __('体重'); ?></td>
		<td><?php echo h($homePlayer['HomePlayer']['weight']); ?><?php echo "kg"; ?></td>
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
		<li><?php echo $this->Html->link(__('New Home Player'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Edit Home Player'), array('action' => 'edit', $homePlayer['HomePlayer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Home Player'), array('action' => 'delete', $homePlayer['HomePlayer']['id']), array(), __('このレコードを消去しますか？ # %s?', $homePlayer['HomePlayer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches'), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Home Players'), array('controller' => 'home_players','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Away Teams'), array('controller' => 'away_teams', 'action' => 'index')); ?> </li>
	</ul>
</div>
