<div class="domains form">
<?php echo $this->Form->create('Domain'); ?>
	<fieldset>
		<legend><?php echo __('Add Domain'); ?></legend>
	<?php
		echo $this->Form->input('DomainID');
		echo $this->Form->input('DomainName');
		echo $this->Form->input('DomainDesc');
		echo $this->Form->input('enabled');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Domains'), array('action' => 'index')); ?></li>
	</ul>
</div>
