<div class="receitas index">
	<h2><?php echo __('Receitas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($receitas as $receita): ?>
	<tr>
		<td><?php echo h($receita['Receita']['id']); ?>&nbsp;</td>
		<td><?php echo h($receita['Receita']['valor']); ?>&nbsp;</td>
		<td><?php echo h($receita['Receita']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($receita['Receita']['created']); ?>&nbsp;</td>
		<td><?php echo h($receita['Receita']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $receita['Receita']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $receita['Receita']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $receita['Receita']['id']), array('confirm' => __('Você tem certeza que deseja excluir # %s?', $receita['Receita']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Receita'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Despesas'), array('controller' => 'despesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Despesa'), array('controller' => 'despesas', 'action' => 'add')); ?> </li>
	</ul>
</div>
