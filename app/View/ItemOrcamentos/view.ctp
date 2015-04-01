<div class="itemOrcamentos view">
<h2><?php echo __('Item Orcamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itemOrcamento['ItemOrcamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($itemOrcamento['ItemOrcamento']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemOrcamento['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $itemOrcamento['Categoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orcamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemOrcamento['Orcamento']['id'], array('controller' => 'orcamentos', 'action' => 'view', $itemOrcamento['Orcamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($itemOrcamento['ItemOrcamento']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($itemOrcamento['ItemOrcamento']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item Orcamento'), array('action' => 'edit', $itemOrcamento['ItemOrcamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item Orcamento'), array('action' => 'delete', $itemOrcamento['ItemOrcamento']['id']), array(), __('Você tem certeza que deseja excluir # %s?', $itemOrcamento['ItemOrcamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Orcamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Orcamento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orcamentos'), array('controller' => 'orcamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orcamento'), array('controller' => 'orcamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
