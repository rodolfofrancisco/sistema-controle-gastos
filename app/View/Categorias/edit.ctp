 <div>
    <ul class="breadcrumb">
        <li>
            <?php echo $this->Html->link('Início', array('controller' => 'users', 'action' => 'index')); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Categorias', array('controller' => 'categorias', 'action' => 'index')); ?>
        </li>
        <li>
            <a>Editar Categoria</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Editar Categoria</h2>
            </div>
            <div class="box-content">
                <?php 
                    echo $this->Form->create('Categoria', array('role' => 'form'));
                    echo $this->Form->input('id');
                    echo $this->Form->input('descricao', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => 'Descrição'));
                    echo $this->Form->submit('Salvar', array('class' => 'btn btn-default', 'div' => false));
                    echo $this->Form->end(); 
                ?>
            </div>
        </div>
    </div>
</div>