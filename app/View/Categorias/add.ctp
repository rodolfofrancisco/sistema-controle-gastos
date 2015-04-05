<div class="categorias form">
<?php echo $this->Form->create('Categoria'); ?>
	<fieldset>
		<legend><?php echo __('Add Categoria'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categorias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Despesas'), array('controller' => 'despesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Despesa'), array('controller' => 'despesas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Orcamentos'), array('controller' => 'item_orcamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Orcamento'), array('controller' => 'item_orcamentos', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
