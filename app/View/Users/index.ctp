<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Tables</a>
        </li>
    </ul>
</div>

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
                                <td class="actions">
                                        <?php echo $this->Html->link('<i class="glyphicon glyphicon-zoom-in icon-white"></i> Visualizar', array('action' => 'view', $user['User']['id']), array('escape' => false, 'class' => 'btn btn-success')); ?>
                                        <?php echo $this->Html->link('<i class="glyphicon glyphicon-edit icon-white"></i> Editar', array('action' => 'edit', $user['User']['id']), array('escape' => false, 'class' => 'btn btn-info')); ?>
                                        <?php echo $this->Form->postLink('<i class="glyphicon glyphicon-trash icon-white"></i> Excluir', array('action' => 'delete', $user['User']['id']), array('confirm' => 'Você deseja realmente deletar este item?', 'escape' => false, 'class' => 'btn btn-danger')); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

