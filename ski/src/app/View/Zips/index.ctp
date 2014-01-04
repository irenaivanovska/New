<div class="zips index">
	<h2><?php echo __('Zips'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ZipID'); ?></th>
			<th><?php echo $this->Paginator->sort('CountryID'); ?></th>
			<th><?php echo $this->Paginator->sort('CityID'); ?></th>
			<th><?php echo $this->Paginator->sort('StateID'); ?></th>
			<th><?php echo $this->Paginator->sort('ZipCode'); ?></th>
			<th><?php echo $this->Paginator->sort('latitude'); ?></th>
			<th><?php echo $this->Paginator->sort('longitude'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($zips as $zip): ?>
	<tr>
		<td><?php echo h($zip['Zip']['ZipID']); ?>&nbsp;</td>
		<td><?php echo h($zip['Zip']['CountryID']); ?>&nbsp;</td>
		<td><?php echo h($zip['Zip']['CityID']); ?>&nbsp;</td>
		<td><?php echo h($zip['Zip']['StateID']); ?>&nbsp;</td>
		<td><?php echo h($zip['Zip']['ZipCode']); ?>&nbsp;</td>
		<td><?php echo h($zip['Zip']['latitude']); ?>&nbsp;</td>
		<td><?php echo h($zip['Zip']['longitude']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $zip['Zip']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $zip['Zip']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $zip['Zip']['id']), null, __('Are you sure you want to delete # %s?', $zip['Zip']['id'])); ?>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Zip'), array('action' => 'add')); ?></li>
	</ul>
</div>