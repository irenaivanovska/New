<div class="rolePermissions form">
<?php echo $this->Form->create('RolePermission'); ?>
	<fieldset>
		<legend><?php echo __('Add Role Permission'); ?></legend>
	<?php
		echo $this->Form->input('RolePermissionID');
		echo $this->Form->input('PermissionID');
		echo $this->Form->input('Action');
		echo $this->Form->input('enabled');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Role Permissions'), array('action' => 'index')); ?></li>
	</ul>
</div>
