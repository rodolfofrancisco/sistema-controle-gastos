<div class="receitas form">
<?php echo $this->Form->create('Receita'); ?>
	<fieldset>
		<legend><?php echo __('Add Receita'); ?></legend>
	<?php
		echo $this->Form->input('valor');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Receitas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Despesas'), array('controller' => 'despesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Despesa'), array('controller' => 'despesas', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
