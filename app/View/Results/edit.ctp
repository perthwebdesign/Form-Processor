<div class="results form">
<?php echo $this->Form->create('Result');?>
	<fieldset>
		<legend><?php echo __('Edit Result'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('submission_id');
		echo $this->Form->input('key');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Result.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Result.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Results'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
