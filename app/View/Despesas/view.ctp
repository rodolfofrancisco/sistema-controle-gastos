<div class="despesas view">
<h2><?php echo __('Despesa'); ?></h2>
	<dl>
<!-- 		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['id']); ?>
			&nbsp;
		</dd> -->
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categorias[$despesa['Categoria']['id']], array('controller' => 'categorias', 'action' => 'view', $despesa['Categoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Receita'); ?></dt>
		<dd>
			<?php echo $this->Html->link($receitas[$despesa['Receita']['id']], array('controller' => 'receitas', 'action' => 'view', $despesa['Receita']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Despesa'), array('action' => 'edit', $despesa['Despesa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Despesa'), array('action' => 'delete', $despesa['Despesa']['id']), array(), __('Você tem certeza que deseja excluir # %s?', $despesa['Despesa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Despesas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Despesa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Receitas'), array('controller' => 'receitas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receita'), array('controller' => 'receitas', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->