<div class="itemOrcamentos index">
	<h2><?php echo __('Item Orcamentos'); ?></h2>

	<div class="actions">
		<?php echo $this->Html->link(__('Criar Item Orcamento'), array('action' => 'add')); ?>
	</div>

	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<!-- <th><?php echo $this->Paginator->sort('id'); ?></th> -->
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('orcamento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($itemOrcamentos as $itemOrcamento): ?>
	<tr>
		<!-- <td><?php echo h($itemOrcamento['ItemOrcamento']['id']); ?>&nbsp;</td> -->
		<td><?php echo h($itemOrcamento['ItemOrcamento']['valor']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($itemOrcamento['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $itemOrcamento['Categoria']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($itemOrcamento['Orcamento']['id'], array('controller' => 'orcamentos', 'action' => 'view', $itemOrcamento['Orcamento']['id'])); ?>
		</td>
		<td><?php echo h($itemOrcamento['ItemOrcamento']['created']); ?>&nbsp;</td>
		<td><?php echo h($itemOrcamento['ItemOrcamento']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itemOrcamento['ItemOrcamento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itemOrcamento['ItemOrcamento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itemOrcamento['ItemOrcamento']['id']), array('confirm' => __('Você tem certeza que deseja excluir # %s?', $itemOrcamento['ItemOrcamento']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Item Orcamento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orcamentos'), array('controller' => 'orcamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orcamento'), array('controller' => 'orcamentos', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
