<div class="despesas form">
<?php echo $this->Form->create('Despesa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Despesa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('valor');
		echo $this->Form->input('descricao');
		echo $this->Form->input('categoria_id');
		echo $this->Form->input('receita_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Despesa.id')), array(), __('Você tem certeza que deseja excluir # %s?', $this->Form->value('Despesa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Despesas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Receitas'), array('controller' => 'receitas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receita'), array('controller' => 'receitas', 'action' => 'add')); ?> </li>
	</ul>
</div>
