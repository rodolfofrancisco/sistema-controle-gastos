<div>
    <ul class="breadcrumb">
        <li>
            <?php echo $this->Html->link('Início', array('controller' => 'users', 'action' => 'index')); ?>
        </li>
        <li>
            <a>Receitas</a>
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
        <?php echo $this->Html->link('<i class="glyphicon glyphicon-plus-sign"></i> Criar Receita', array('controller' => 'receitas', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-primary')); ?>
        <br><br>
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-arrow-up"></i> Receitas</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>Valor (R$)</th>
                            <th>Descrição</th>
                            <th>Data da Última Alteração</th>
                            <th>Data de Criação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($receitas as $receita): ?>
                            <tr>
                                <td><?php echo number_format(h($receita['Receita']['valor']), 2, ',', '.'); ?>&nbsp;</td>
                                <td><?php echo h($receita['Receita']['descricao']); ?>&nbsp;</td>
                                <td>
                                    <?php 
                                        $date = new DateTime($receita['Receita']['modified']);
                                        echo h($date->format('d/m/Y H:i:s'));
                                    ?>&nbsp;
                                </td>
                                <td>
                                    <?php 
                                        $date = new DateTime($receita['Receita']['created']);
                                        echo h($date->format('d/m/Y H:i:s'));
                                    ?>&nbsp;
                                </td>
                                <td class="actions">
                                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-eye-open"></i> Visualizar', array('controller' => 'receitas', 'action' => 'view', $receita['Receita']['id']), array('escape' => false, 'class' => 'btn btn-success')); ?>
                                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-edit icon-white"></i> Editar', array('controller' => 'receitas', 'action' => 'edit', $receita['Receita']['id']), array('escape' => false, 'class' => 'btn btn-info')); ?>
                                    <?php echo $this->Form->postLink('<i class="glyphicon glyphicon-trash icon-white"></i> Excluir', array('controller' => 'receitas', 'action' => 'delete', $receita['Receita']['id']), array('confirm' => 'Você deseja realmente deletar este item?', 'escape' => false, 'class' => 'btn btn-danger')); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>