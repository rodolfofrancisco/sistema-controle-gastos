<div>
    <ul class="breadcrumb">
        <li>
            <?php echo $this->Html->link('Início', array('action' => 'index')); ?>
        </li>
        <li>
            <a>Despesas</a>
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
        <?php echo $this->Html->link('<i class="glyphicon glyphicon-plus-sign"></i> Criar Despesa', array('controller' => 'despesas', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-primary')); ?>
        <?php echo $this->Html->link('<i class="glyphicon glyphicon-share-alt"></i> Extrato', array('controller' => 'Despesas', 'action' => 'Extrato'), array('escape' => false, 'class' => 'btn btn-warning')); ?>
        <br><br>
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-arrow-down"></i> Despesas</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>Valor (R$)</th>
                            <th>Descrição</th>
                            <th>Categoria</th>
                            <th>Receita</th>
                            <th>Data da Última Alteração</th>
                            <th>Data de Criação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($despesas as $despesa): ?>
                            <tr>
                                <td><?php echo number_format(h($despesa['Despesa']['valor']), 2, ',', '.'); ?>&nbsp;</td>
                                <td><?php echo h($despesa['Despesa']['descricao']); ?>&nbsp;</td>
                                <td>
                                    <?php echo $this->Html->link($despesa['Categoria']['descricao'], array('controller' => 'categorias', 'action' => 'view', $despesa['Categoria']['id'])); ?>
                                </td>
                                <td>
                                    <?php echo $this->Html->link($despesa['Receita']['descricao'], array('controller' => 'receitas', 'action' => 'view', $despesa['Receita']['id'])); ?>
                                </td>
                                <td>
                                    <?php 
                                        $date = new DateTime($despesa['Despesa']['modified']);
                                        echo h($date->format('d/m/Y H:i:s'));
                                    ?>&nbsp;
                                </td>
                                <td>
                                    <?php 
                                        $date = new DateTime($despesa['Despesa']['created']);
                                        echo h($date->format('d/m/Y H:i:s'));
                                    ?>&nbsp;
                                </td>
                                <td class="actions">
                                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-eye-open"></i> Visualizar', array('controller' => 'despesas', 'action' => 'view', $despesa['Despesa']['id']), array('escape' => false, 'class' => 'btn btn-success')); ?>
                                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-edit icon-white"></i> Editar', array('controller' => 'despesas', 'action' => 'edit', $despesa['Despesa']['id']), array('escape' => false, 'class' => 'btn btn-info')); ?>
                                    <?php echo $this->Form->postLink('<i class="glyphicon glyphicon-trash icon-white"></i> Excluir', array('controller' => 'despesas', 'action' => 'delete', $despesa['Despesa']['id']), array('confirm' => 'Você deseja realmente deletar este item?', 'escape' => false, 'class' => 'btn btn-danger')); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>