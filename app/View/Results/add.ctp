<div class="results form">
<?php echo $this->Form->create('Result');?>
	<fieldset>
		<legend><?php echo __('Add Result'); ?></legend>
	<?php
		echo $this->Form->input('submission_id');
	?>
	
		<?php echo $this->Form->input( "Account_Number", array( 'type' => 'text' ) ) ?>
		<?php echo $this->Form->input( "Equities_Advisor_Code", array( 'type' => 'text' ) ) ?>
		<?php echo $this->Form->input( "Options_Advisor", array( 'type' => 'text' ) ) ?>
			
		<?php echo $this->Form->input( "HIN", array( 'type' => 'text' ) ) ?>
		<?php echo $this->Form->input( "Equities_Brokerage", array( 'type' => 'text' ) ) ?>
		<?php echo $this->Form->input( "Options_Brokerage", array( 'type' => 'text' ) ) ?>
	
	
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Results'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
