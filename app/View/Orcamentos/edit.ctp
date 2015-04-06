<div>
    <ul class="breadcrumb">
        <li>
            <?php echo $this->Html->link('Início', array('controller' => 'users', 'action' => 'index')); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Orçamentos', array('controller' => 'orcamentos', 'action' => 'index')); ?>
        </li>
        <li>
            <a>Editar Orçamento</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Editar Orçamento</h2>
            </div>
            <div class="box-content">
                <?php 
                    echo $this->Form->create('Orcamento', array('role' => 'form'));
                    echo $this->Form->input('id');
                    echo $this->Form->input('valor', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => 'Valor (R$)'));
                    echo $this->Form->input('user_id', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => 'Usuário'));
                    echo $this->Form->submit('Salvar', array('class' => 'btn btn-default', 'div' => false));
                    echo $this->Form->end(); 
                ?>
            </div>
        </div>
    </div>
</div>