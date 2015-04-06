<div>
    <ul class="breadcrumb">
        <li>
            <?php echo $this->Html->link('Início', array('controller' => 'users', 'action' => 'index')); ?>
        </li>
        <li>
            <a>Categorias</a>
        </li>
    </ul>
</div>
<?php 
    $message = $this->Session->flash();
    if ($message): 
?>
        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $message; ?>
        </div>
<?php endif; ?>
<div class="row">
    <div class="box col-md-12">
        <?php echo $this->Html->link('<i class="glyphicon glyphicon-plus-sign"></i> Criar Categoria', array('controller' => 'categorias', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-primary')); ?>
        <br><br>
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-tags"></i> Categorias</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Data da Última Alteração</th>
                            <th>Data de Criação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categorias as $categoria): ?>
                            <tr>
                                <td><?php echo h($categoria['Categoria']['descricao']); ?>&nbsp;</td>
                                <td>
                                    <?php 
                                        $date = new DateTime($categoria['Categoria']['modified']);
                                        echo h($date->format('d/m/Y H:i:s'));
                                    ?>&nbsp;
                                </td>
                                <td>
                                    <?php 
                                        $date = new DateTime($categoria['Categoria']['created']);
                                        echo h($date->format('d/m/Y H:i:s'));
                                    ?>&nbsp;
                                </td>
                                <td class="actions">
                                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-eye-open"></i> Visualizar', array('controller' => 'categorias', 'action' => 'view', $categoria['Categoria']['id']), array('escape' => false, 'class' => 'btn btn-success')); ?>
                                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-edit icon-white"></i> Editar', array('controller' => 'categorias', 'action' => 'edit', $categoria['Categoria']['id']), array('escape' => false, 'class' => 'btn btn-info')); ?>
                                    <?php echo $this->Form->postLink('<i class="glyphicon glyphicon-trash icon-white"></i> Excluir', array('controller' => 'categorias', 'action' => 'delete', $categoria['Categoria']['id']), array('confirm' => 'Você deseja realmente deletar este item?', 'escape' => false, 'class' => 'btn btn-danger')); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
 