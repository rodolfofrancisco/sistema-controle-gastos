<div>
    <ul class="breadcrumb">
        <li>
            <?php echo $this->Html->link('Início', array('controller' => 'users', 'action' => 'index')); ?>
        </li>
        <li>
            <a>Visualizar Usuário</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-eye-open icon-white"></i> Visualizar Usuário</h2>
            </div>
            <div class="box-content">
                <div class="form-group">
                    <label>Nome: </label>
                    <?php echo h($user['User']['name']); ?>
                </div>
                <div class="form-group">
                    <label>E-mail: </label>
                    <?php echo h($user['User']['email']); ?>
                </div>
                <div class="form-group">
                    <label>Endereço: </label>
                    <?php echo h($user['User']['address']); ?>
                </div>
                <div class="form-group">
                    <label>Telefone: </label>
                    <?php echo h($user['User']['phone']); ?>
                </div>
                <div class="form-group">
                    <label>Data da Última Alteração: </label>
                    <?php 
                        $date = new DateTime($user['User']['modified']);
                        echo h($date->format('d/m/Y H:i:s'));
                    ?>
                </div>
                <div class="form-group">
                    <label>Data de Criação: </label>
                    <?php 
                        $date = new DateTime($user['User']['created']);
                        echo h($date->format('d/m/Y H:i:s'));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
