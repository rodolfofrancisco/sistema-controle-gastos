<div class="orcamentos index">
	<h2><?php echo __('Orcamentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($orcamentos as $orcamento): ?>
	<tr>
		<td><?php echo h($orcamento['Orcamento']['id']); ?>&nbsp;</td>
		<td><?php echo h($orcamento['Orcamento']['valor']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($orcamento['User']['id'], array('controller' => 'users', 'action' => 'view', $orcamento['User']['id'])); ?>
		</td>
		<td><?php echo h($orcamento['Orcamento']['created']); ?>&nbsp;</td>
		<td><?php echo h($orcamento['Orcamento']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $orcamento['Orcamento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $orcamento['Orcamento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $orcamento['Orcamento']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $orcamento['Orcamento']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Orcamento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
