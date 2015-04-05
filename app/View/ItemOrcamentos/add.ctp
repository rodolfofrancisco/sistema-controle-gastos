<div class="itemOrcamentos form">
<?php echo $this->Form->create('ItemOrcamento'); ?>
	<fieldset>
		<legend><?php echo __('Add Item Orcamento'); ?></legend>
	<?php
		echo $this->Form->input('valor');
		echo $this->Form->input('categoria_id');
		echo $this->Form->input('orcamento_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Item Orcamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orcamentos'), array('controller' => 'orcamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orcamento'), array('controller' => 'orcamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->