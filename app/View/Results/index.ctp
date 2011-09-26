<div class="results index">
	<h2><?php echo __('Results');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('submission_id');?></th>
			<th><?php echo $this->Paginator->sort('key');?></th>
			<th><?php echo $this->Paginator->sort('value');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($results as $result): ?>
	<tr>
		<td><?php echo h($result['Result']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($result['Submission']['id'], array('controller' => 'submissions', 'action' => 'view', $result['Submission']['id'])); ?>
		</td>
		<td><?php echo h($result['Result']['key']); ?>&nbsp;</td>
		<td><?php echo h($result['Result']['value']); ?>&nbsp;</td>
		<td><?php echo h($result['Result']['created']); ?>&nbsp;</td>
		<td><?php echo h($result['Result']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $result['Result']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $result['Result']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $result['Result']['id']), null, __('Are you sure you want to delete # %s?', $result['Result']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous'), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next') . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Result'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
