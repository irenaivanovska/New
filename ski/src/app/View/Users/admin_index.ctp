<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="ski_table">
	<tr class="ski_tr">
			<th><?php echo $this->Paginator->sort('UserID', 'Code'); ?></th>
			<th><?php echo $this->Paginator->sort('name', 'Name'); ?></th>
			<th><?php echo $this->Paginator->sort('super', 'Is super user'); ?></th>
			<th><?php echo $this->Paginator->sort('enabled', 'Is enabled'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr class="ski_tr_sub">
		<td><?php echo h($user['User']['UserID']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo $this->Ace->toYesStr($user['User']['super']); ?>&nbsp;</td>
		<td><?php echo $this->Ace->toYesStr($user['User']['enabled']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['UserID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['UserID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['UserID']), null, __('Are you sure you want to delete # %s?', $user['User']['UserID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
	<h2><?php echo __('Actions'); ?></h2>
    <nav id="main-menu">
        <ul class="nav-bar">
			<li class="nav-button-add"><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
   	    </ul>
    </nav>
</div>
