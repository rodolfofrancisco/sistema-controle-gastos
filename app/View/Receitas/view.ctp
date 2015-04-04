<div class="receitas view">
<h2><?php echo __('Receita'); ?></h2>
	<dl>
<!-- 		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($receita['Receita']['id']); ?>
			&nbsp;
		</dd> -->
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($receita['Receita']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($receita['Receita']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($receita['Receita']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($receita['Receita']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Receita'), array('action' => 'edit', $receita['Receita']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Receita'), array('action' => 'delete', $receita['Receita']['id']), array(), __('Você tem certeza que deseja excluir # %s?', $receita['Receita']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Receitas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receita'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Despesas'), array('controller' => 'despesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Despesa'), array('controller' => 'despesas', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
<div class="related">
	<h3><?php echo __('Despesas relacionadas'); ?></h3>
	<?php if (!empty($receita['Despesa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!-- <th><?php echo __('Id'); ?></th> -->
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Categoria'); ?></th>
		<!-- <th><?php echo __('Receita Id'); ?></th> -->
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($receita['Despesa'] as $despesa): ?>
		<tr>
			<!-- <td><?php echo $despesa['id']; ?></td> -->
			<td><?php echo $despesa['valor']; ?></td>
			<td><?php echo $despesa['descricao']; ?></td>
			<td><?php echo $categorias[$despesa['categoria_id']]; ?></td>
			<!-- <td><?php echo $despesa['receita_id']; ?></td> -->
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
