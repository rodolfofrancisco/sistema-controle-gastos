<div class="categorias index">
	<h2><?php echo __('Categorias'); ?></h2>

	<div class="actions">
		<?php echo $this->Html->link(__('Nova Categoria'), array('action' => 'add')); ?>
	</div>

	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<!-- <th><?php echo $this->Paginator->sort('id'); ?></th> -->
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($categorias as $categoria): ?>
	<tr>
		<!-- <td><?php echo h($categoria['Categoria']['id']); ?>&nbsp;</td> -->
		<td><?php echo h($categoria['Categoria']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($categoria['Categoria']['created']); ?>&nbsp;</td>
		<td><?php echo h($categoria['Categoria']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $categoria['Categoria']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $categoria['Categoria']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $categoria['Categoria']['id']), array('confirm' => __('Você tem certeza que deseja excluir # %s?', $categoria['Categoria']['id']))); ?>
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
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('próximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Categoria'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Despesas'), array('controller' => 'despesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Despesa'), array('controller' => 'despesas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Orcamentos'), array('controller' => 'item_orcamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Orcamento'), array('controller' => 'item_orcamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->