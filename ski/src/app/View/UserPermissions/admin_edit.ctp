<div class="userPermissions form">
<?php echo $this->Form->create('UserPermission'); ?>
	<fieldset>
		<h2><?php echo __('Edit User Permission'); ?></h2>
	<?php
		echo $this->Form->hidden('UserPermissionID');
		echo $this->Form->input('UserID', array('label' => 'User', 'options' => $users, 'empty' => 'Please choose user'));
		echo $this->Form->input('PermissionID', array('label' => 'Permission', 'options' => $permissions, 'empty' => 'Please choose permission'));
		echo $this->Form->input('Action');
		echo $this->Form->input('enabled', array('label' => 'Is enabled', 'type' => 'checkbox'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h2><?php echo __('Actions'); ?></2>
    <nav id="main-menu">
    <ul class="nav-bar">
		<li class="nav-button-delete"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserPermission.UserPermissionID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('UserPermission.UserPermissionID'))); ?></li>
		<li class="nav-button-list"><?php echo $this->Html->link(__('List User Permissions'), array('action' => 'index')); ?></li>
	</ul></nav>
</div>
