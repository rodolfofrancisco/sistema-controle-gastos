<div class="orcamentos form">
<?php echo $this->Form->create('Orcamento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Orcamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('valor');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Orcamento.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Orcamento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Orcamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>