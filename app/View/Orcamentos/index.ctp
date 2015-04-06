 <div>
    <ul class="breadcrumb">
        <li>
            <?php echo $this->Html->link('Início', array('controller' => 'users', 'action' => 'index')); ?>
        </li>
        <li>
            <a>Orçamentos</a>
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
        <?php echo $this->Html->link('<i class="glyphicon glyphicon-plus-sign"></i> Criar Orçamento', array('controller' => 'orcamentos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-primary')); ?>
        <?php echo $this->Html->link('<i class="glyphicon glyphicon-share-alt"></i> Saldo', array('controller' => 'orcamentos', 'action' => 'Saldo'), array('escape' => false, 'class' => 'btn btn-warning')); ?>
        <br><br>
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-usd"></i> Orçamentos</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>Valor (R$)</th>
                            <th>Usuário</th>
                            <th>Data da Última Alteração</th>
                            <th>Data de Criação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orcamentos as $orcamento): ?>
                            <tr>
                                <td><?php echo number_format(h($orcamento['Orcamento']['valor']), 2, ',', '.'); ?>&nbsp;</td>
                                <td>
                                    <?php echo $this->Html->link($orcamento['User']['name'], array('controller' => 'users', 'action' => 'view', $orcamento['User']['id'])); ?>
                                </td>
                                <td>
                                    <?php 
                                        $date = new DateTime($orcamento['Orcamento']['modified']);
                                        echo h($date->format('d/m/Y H:i:s'));
                                    ?>&nbsp;
                                </td>
                                <td>
                                    <?php 
                                        $date = new DateTime($orcamento['Orcamento']['created']);
                                        echo h($date->format('d/m/Y H:i:s'));
                                    ?>&nbsp;
                                </td>
                                <td class="actions">
                                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-eye-open"></i> Visualizar', array('controller' => 'orcamentos', 'action' => 'view', $orcamento['Orcamento']['id']), array('escape' => false, 'class' => 'btn btn-success')); ?>
                                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-edit icon-white"></i> Editar', array('controller' => 'orcamentos', 'action' => 'edit', $orcamento['Orcamento']['id']), array('escape' => false, 'class' => 'btn btn-info')); ?>
                                    <?php echo $this->Form->postLink('<i class="glyphicon glyphicon-trash icon-white"></i> Excluir', array('controller' => 'orcamentos', 'action' => 'delete', $orcamento['Orcamento']['id']), array('confirm' => 'Você deseja realmente deletar este item?', 'escape' => false, 'class' => 'btn btn-danger')); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
