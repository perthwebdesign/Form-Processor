<div class="submissions form">
	
	<p>
		Creating a new submission for
		<?php echo $Form['Form']['name'] ?>
	</p>
	
<?php //echo $this->Form->create('Submission', array( 'action' => "/add/$FormID/$UserID/$SubmissionID" ) ); ?>
<?php echo $this->Form->create('Results', array( 'action' => "/add/$SubmissionID" ) ); ?>
	<fieldset>
		<legend><?php echo __('Add Submission'); ?></legend>
	
		<?php echo $this->Form->input( "Result.Account_Number", array( 'type' => 'text' ) ) ?>
		<?php echo $this->Form->input( "Result.Equities_Advisor_Code", array( 'type' => 'text' ) ) ?>
		<?php echo $this->Form->input( "Result.Options_Advisor", array( 'type' => 'text' ) ) ?>
	
		<?php echo $this->Form->input( "Result.HIN", array( 'type' => 'text' ) ) ?>
		<?php echo $this->Form->input( "Result.Equities_Brokerage", array( 'type' => 'text' ) ) ?>
		<?php echo $this->Form->input( "Result.Options_Brokerage", array( 'type' => 'text' ) ) ?>
	
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Submissions'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forms'), array('controller' => 'forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form'), array('controller' => 'forms', 'action' => 'add')); ?> </li>
	</ul>
</div>
