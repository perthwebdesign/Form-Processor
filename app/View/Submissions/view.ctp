<div class="submissions view">
<h2><?php  echo __('Submission');?></h2>

	<dl>
	<?php foreach ($SubmissionResults as $SubmissionResult): ?>
		<dt><?php echo $this->Text->humanize($SubmissionResult['Result']['key']) ?></dt>
		<dd><?php echo $this->Text->humanize($SubmissionResult['Result']['value']) ?></dd>
	<?php endforeach; ?>
	</dl>

	<?php return ?>

	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submission['Form']['name'], array('controller' => 'forms', 'action' => 'view', $submission['Form']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submission['User']['id'], array('controller' => 'users', 'action' => 'view', $submission['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Submission'), array('action' => 'edit', $submission['Submission']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Submission'), array('action' => 'delete', $submission['Submission']['id']), null, __('Are you sure you want to delete # %s?', $submission['Submission']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forms'), array('controller' => 'forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form'), array('controller' => 'forms', 'action' => 'add')); ?> </li>
	</ul>
</div>
