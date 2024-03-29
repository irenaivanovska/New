<div class="states form">
<?php echo $this->Form->create('State'); ?>
	<fieldset>
		<h2><?php echo __('Edit State'); ?></h2>
	<?php
		echo $this->Form->hidden('StateID');
		
		$combo = $this->Combo->getLocationCombos('mLocations', array('country' => 'CountryID'), array('country' => $this->Form->value('State.CountryID')));
		echo $combo->addCountryCombo('CountryID', array('label' => 'Country'));
		echo $this->Form->input('StateCode', array('label' => 'Code'));
		echo $this->Form->input('StateName', array('label' => 'Name'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));
$combo->printClientScript(); ?>
</div>
<div class="actions">
    <h2><?php echo __('Actions'); ?></h2>
    <nav id="main-menu">
        <ul class="nav-bar">
		<li class="nav-button-delete"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('State.StateID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('State.StateID'))); ?></li>
		<li class="nav-button-list"><?php echo $this->Html->link(__('List States'), array('action' => 'index')); ?></li>
	</ul></nav>
</div>
