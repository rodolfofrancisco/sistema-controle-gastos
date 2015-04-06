<div>
    <ul class="breadcrumb">
        <li>
            <?php echo $this->Html->link('Início', array('controller' => 'users', 'action' => 'index')); ?>
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
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Usuários</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Endereço</th>
                            <th>Data da Última Alteração</th>
                            <th>Data de Criação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?php echo h($user['User']['name']); ?>&nbsp;</td>
                                <td><?php echo h($user['User']['email']); ?>&nbsp;</td>
                                <td><?php echo h($user['User']['phone']); ?>&nbsp;</td>
                                <td><?php echo h($user['User']['address']); ?>&nbsp;</td>
                                <td>
                                    <?php 
                                        $date = new DateTime($receita['User']['modified']);
                                        echo h($date->format('d/m/Y H:i:s'));
                                    ?>&nbsp;
                                </td>
                                <td>
                                    <?php 
                                        $date = new DateTime($receita['User']['created']);
                                        echo h($date->format('d/m/Y H:i:s'));
                                    ?>&nbsp;
                                </td>
                                <td class="actions">
                                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-eye-open"></i> Visualizar', array('action' => 'view', $user['User']['id']), array('escape' => false, 'class' => 'btn btn-success')); ?>
                                    <?php // echo $this->Form->postLink('<i class="glyphicon glyphicon-trash icon-white"></i> Excluir', array('action' => 'delete', $user['User']['id']), array('confirm' => 'Você deseja realmente deletar este item?', 'escape' => false, 'class' => 'btn btn-danger')); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>