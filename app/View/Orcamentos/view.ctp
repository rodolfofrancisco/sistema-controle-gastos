<div class="orcamentos view">
<h2><?php echo __('Orcamento'); ?></h2>
	<dl>
<!-- 		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($orcamento['Orcamento']['id']); ?>
			&nbsp;
		</dd> -->
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($orcamento['Orcamento']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($orcamento['User']['name'], array('controller' => 'users', 'action' => 'view', $orcamento['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($orcamento['Orcamento']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($orcamento['Orcamento']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Orcamento'), array('action' => 'edit', $orcamento['Orcamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Orcamento'), array('action' => 'delete', $orcamento['Orcamento']['id']), array(), __('Você tem certeza que deseja excluir # %s?', $orcamento['Orcamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orcamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orcamento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
