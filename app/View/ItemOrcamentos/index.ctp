<div>
    <ul class="breadcrumb">
        <li>
            <?php echo $this->Html->link('Início', array('controller' => 'users', 'action' => 'index')); ?>
        </li>
        <li>
            <a>Itens de Orçamentos</a>
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
        <?php echo $this->Html->link('<i class="glyphicon glyphicon-plus-sign"></i> Criar Item', array('controller' => 'ItemOrcamentos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-primary')); ?>
        <br><br>
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-align-justify"></i> Itens de Orçamentos</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>Valor (R$)</th>
                            <th>Categoria</th>
                            <th>Orçamento</th>
                            <th>Data da Última Alteração</th>
                            <th>Data de Criação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($itemOrcamentos as $itemOrcamento): ?>
                            <tr>
                                <td><?php echo number_format(h($itemOrcamento['ItemOrcamento']['valor']), 2, ',', '.'); ?>&nbsp;</td>
                                <td>
                                    <?php echo $this->Html->link($itemOrcamento['Categoria']['descricao'], array('controller' => 'categorias', 'action' => 'view', $itemOrcamento['Categoria']['id'])); ?>
                                </td>
                                <td>
                                    <?php 
                                        echo $this->Html->link(number_format($itemOrcamento['Orcamento']['valor'], 2, ',', '.'), array('controller' => 'orcamentos', 'action' => 'view', $itemOrcamento['Orcamento']['id'])); 
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        $date = new DateTime($itemOrcamento['ItemOrcamento']['modified']);
                                        echo h($date->format('d/m/Y H:i:s'));
                                    ?>&nbsp;
                                </td>
                                <td>
                                    <?php 
                                        $date = new DateTime($itemOrcamento['ItemOrcamento']['created']);
                                        echo h($date->format('d/m/Y H:i:s'));
                                    ?>&nbsp;
                                </td>
                                <td class="actions">
                                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-eye-open"></i> Visualizar', array('controller' => 'ItemOrcamentos', 'action' => 'view', $itemOrcamento['ItemOrcamento']['id']), array('escape' => false, 'class' => 'btn btn-success')); ?>
                                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-edit icon-white"></i> Editar', array('controller' => 'ItemOrcamentos', 'action' => 'edit', $itemOrcamento['ItemOrcamento']['id']), array('escape' => false, 'class' => 'btn btn-info')); ?>
                                    <?php echo $this->Form->postLink('<i class="glyphicon glyphicon-trash icon-white"></i> Excluir', array('controller' => 'ItemOrcamentos', 'action' => 'delete', $itemOrcamento['ItemOrcamento']['id']), array('confirm' => 'Você deseja realmente deletar este item?', 'escape' => false, 'class' => 'btn btn-danger')); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>