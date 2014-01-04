<div class="rolePermissions view">
<h2><?php echo __('Role Permission'); ?></h2>
	<dl>
		<dt><?php echo __('RolePermissionID'); ?></dt>
		<dd>
			<?php echo h($rolePermission['RolePermission']['RolePermissionID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PermissionID'); ?></dt>
		<dd>
			<?php echo h($rolePermission['RolePermission']['PermissionID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Action'); ?></dt>
		<dd>
			<?php echo h($rolePermission['RolePermission']['Action']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enabled'); ?></dt>
		<dd>
			<?php echo h($rolePermission['RolePermission']['enabled']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Role Permission'), array('action' => 'edit', $rolePermission['RolePermission']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Role Permission'), array('action' => 'delete', $rolePermission['RolePermission']['id']), null, __('Are you sure you want to delete # %s?', $rolePermission['RolePermission']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Role Permissions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role Permission'), array('action' => 'add')); ?> </li>
	</ul>
</div>