<div class="reves form">
<?php echo $this->Form->create('Ref'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Ref'); ?></legend>
	<?php
		echo $this->Form->input('Code');
		echo $this->Form->input('Desc');
		echo $this->Form->input('Value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ref.Code')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Ref.Code'))); ?></li>
		<li><?php echo $this->Html->link(__('List Reves'), array('action' => 'index')); ?></li>
	</ul>
</div>
