<div class="categorias view">
<h2><?php echo __('Categoria'); ?></h2>
	<dl>
<!-- 		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['id']); ?>
			&nbsp;
		</dd> -->
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categoria'), array('action' => 'edit', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categoria'), array('action' => 'delete', $categoria['Categoria']['id']), array(), __('Você tem certeza que deseja excluir # %s?', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Despesas'), array('controller' => 'despesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Despesa'), array('controller' => 'despesas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Orcamentos'), array('controller' => 'item_orcamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Orcamento'), array('controller' => 'item_orcamentos', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
<div class="related">
	<h3><?php echo __('Despesas relacionadas'); ?></h3>
	<?php if (!empty($categoria['Despesa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!-- <th><?php echo __('Id'); ?></th> -->
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<!-- <th><?php echo __('Categoria Id'); ?></th> -->
		<th><?php echo __('Receita Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoria['Despesa'] as $despesa): ?>
		<tr>
			<!-- <td><?php echo $despesa['id']; ?></td> -->
			<td><?php echo $despesa['valor']; ?></td>
			<td><?php echo $despesa['descricao']; ?></td>
			<!-- <td><?php echo $despesa['categoria_id']; ?></td> -->
			<td><?php echo $receitas[$despesa['receita_id']]; ?></td>
			<td><?php echo $despesa['created']; ?></td>
			<td><?php echo $despesa['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'despesas', 'action' => 'view', $despesa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'despesas', 'action' => 'edit', $despesa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'despesas', 'action' => 'delete', $despesa['id']), array(), __('Você tem certeza que deseja excluir # %s?', $despesa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

<!-- 	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Despesa'), array('controller' => 'despesas', 'action' => 'add')); ?> </li>
		</ul>
	</div> -->
</div>
<div class="related">
	<h3><?php echo __('Itens de Orçamentos relacionados'); ?></h3>
	<?php if (!empty($categoria['ItemOrcamento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!-- <th><?php echo __('Id'); ?></th> -->
		<th><?php echo __('Valor'); ?></th>
		<!-- <th><?php echo __('Categoria Id'); ?></th> -->
		<th><?php echo __('Orcamento'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoria['ItemOrcamento'] as $itemOrcamento): ?>
		<tr>
			<!-- <td><?php echo $itemOrcamento['id']; ?></td> -->
			<td><?php echo $itemOrcamento['valor']; ?></td>
			<!-- <td><?php echo $itemOrcamento['categoria_id']; ?></td> -->
			<td><?php echo $orcamentos[$itemOrcamento['orcamento_id']]; ?></td>
			<td><?php echo $itemOrcamento['created']; ?></td>
			<td><?php echo $itemOrcamento['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'item_orcamentos', 'action' => 'view', $itemOrcamento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'item_orcamentos', 'action' => 'edit', $itemOrcamento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'item_orcamentos', 'action' => 'delete', $itemOrcamento['id']), array(), __('Você tem certeza que deseja excluir # %s?', $itemOrcamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

<!-- 	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item Orcamento'), array('controller' => 'item_orcamentos', 'action' => 'add')); ?> </li>
		</ul>
	</div> -->
</div>
