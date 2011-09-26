<div class="results view">
<h2><?php  echo __('Result');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($result['Result']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Submission'); ?></dt>
		<dd>
			<?php echo $this->Html->link($result['Submission']['id'], array('controller' => 'submissions', 'action' => 'view', $result['Submission']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Key'); ?></dt>
		<dd>
			<?php echo h($result['Result']['key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($result['Result']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($result['Result']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($result['Result']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Result'), array('action' => 'edit', $result['Result']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Result'), array('action' => 'delete', $result['Result']['id']), null, __('Are you sure you want to delete # %s?', $result['Result']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Results'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Result'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
