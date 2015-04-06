<div>
    <ul class="breadcrumb">
        <li>
            <?php echo $this->Html->link('Início', array('controller' => 'users', 'action' => 'index')); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Despesas', array('controller' => 'despesas', 'action' => 'index')); ?>
        </li>
        <li>
            <a>Visualizar Despesa</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-eye-open icon-white"></i> Visualizar Despesa</h2>
            </div>
            <div class="box-content">
                <div class="form-group">
                    <label>Valor: </label>
                    <?php echo number_format(h($despesa['Despesa']['valor']), 2, ',', '.'); ?>
                </div>
                <div class="form-group">
                    <label>Descrição: </label>
                    <?php echo h($despesa['Despesa']['descricao']); ?>
                </div>
                <div class="form-group">
                    <label>Categoria: </label>
                    <?php echo $this->Html->link($categorias[$despesa['Categoria']['id']], array('controller' => 'categorias', 'action' => 'view', $despesa['Categoria']['id'])); ?>
                </div>
                <div class="form-group">
                    <label>Receita: </label>
                    <?php echo $this->Html->link($receitas[$despesa['Receita']['id']], array('controller' => 'receitas', 'action' => 'view', $despesa['Receita']['id'])); ?>
                </div>
                <div class="form-group">
                    <label>Data da Última Alteração: </label>
                    <?php 
                        $date = new DateTime($despesa['Despesa']['modified']);
                        echo h($date->format('d/m/Y H:i:s'));
                    ?>
                </div>
                <div class="form-group">
                    <label>Data de Criação: </label>
                    <?php 
                        $date = new DateTime($despesa['Despesa']['created']);
                        echo h($date->format('d/m/Y H:i:s'));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
