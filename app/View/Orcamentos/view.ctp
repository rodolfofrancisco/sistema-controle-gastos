<div>
    <ul class="breadcrumb">
        <li>
            <?php echo $this->Html->link('Início', array('controller' => 'users', 'action' => 'index')); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Orçamentos', array('controller' => 'orcamentos', 'action' => 'index')); ?>
        </li>
        <li>
            <a>Visualizar Orçamento</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-eye-open icon-white"></i> Visualizar Orçamento</h2>
            </div>
            <div class="box-content">
                <div class="form-group">
                    <label>Valor: </label>
                    <?php echo number_format(h($orcamento['Orcamento']['valor']), 2, ',', '.'); ?>
                </div>
                <div class="form-group">
                    <label>Usuario: </label>
                    <?php echo $this->Html->link($orcamento['User']['name'], array('controller' => 'users', 'action' => 'view', $orcamento['User']['id'])); ?>
                </div>
                <div class="form-group">
                    <label>Data da Última Alteração: </label>
                    <?php 
                        $date = new DateTime($orcamento['Orcamento']['modified']);
                        echo h($date->format('d/m/Y H:i:s'));
                    ?>
                </div>
                <div class="form-group">
                    <label>Data de Criação: </label>
                    <?php 
                        $date = new DateTime($orcamento['Orcamento']['created']);
                        echo h($date->format('d/m/Y H:i:s'));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

