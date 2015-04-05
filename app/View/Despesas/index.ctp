<div class="despesas index">
	<h2><?php echo __('Despesas'); ?></h2>

	<div class="actions">
		<?php echo $this->Html->link(__('Criar Despesa'), array('action' => 'add')); ?>
		<br />
		<?php echo $this->Html->link(__('Extrato'), array('controller' => 'Despesas', 'action' => 'Extrato')); ?>
	</div>

	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<!-- <th><?php echo $this->Paginator->sort('id'); ?></th> -->
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('receita_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($despesas as $despesa): ?>
	<tr>
		<!-- <td><?php echo h($despesa['Despesa']['id']); ?>&nbsp;</td> -->
		<td><?php echo h($despesa['Despesa']['valor']); ?>&nbsp;</td>
		<td><?php echo h($despesa['Despesa']['descricao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($despesa['Categoria']['descricao'], array('controller' => 'categorias', 'action' => 'view', $despesa['Categoria']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($despesa['Receita']['descricao'], array('controller' => 'receitas', 'action' => 'view', $despesa['Receita']['id'])); ?>
		</td>
		<td><?php echo h($despesa['Despesa']['created']); ?>&nbsp;</td>
		<td><?php echo h($despesa['Despesa']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $despesa['Despesa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $despesa['Despesa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $despesa['Despesa']['id']), array('confirm' => __('Você tem certeza que deseja excluir # %s?', $despesa['Despesa']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Despesa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Receitas'), array('controller' => 'receitas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receita'), array('controller' => 'receitas', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->