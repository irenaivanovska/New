<div class="events form">
<?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Add Event'); ?></legend>
	<?php
		echo $this->Form->input('EventID');
		echo $this->Form->input('SeasonID');
		echo $this->Form->input('EventName');
		echo $this->Form->input('DateBegin');
		echo $this->Form->input('DateEnd');
		echo $this->Form->input('AddressID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
	</ul>
</div>
