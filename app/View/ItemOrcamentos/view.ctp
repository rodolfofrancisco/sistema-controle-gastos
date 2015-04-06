<div>
    <ul class="breadcrumb">
        <li>
            <?php echo $this->Html->link('Início', array('controller' => 'users', 'action' => 'index')); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Itens de Orçamentos', array('controller' => 'ItemOrcamentos', 'action' => 'index')); ?>
        </li>
        <li>
            <a>Visualizar Item</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-eye-open icon-white"></i> Visualizar Item</h2>
            </div>
            <div class="box-content">
                <div class="form-group">
                    <label>Valor: </label>
                    <?php echo number_format(h($itemOrcamento['ItemOrcamento']['valor']), 2, ',', '.'); ?>
                </div>
                <div class="form-group">
                    <label>Categoria: </label>
                    <?php echo $this->Html->link($itemOrcamento['Categoria']['descricao'], array('controller' => 'categorias', 'action' => 'view', $itemOrcamento['Categoria']['id'])); ?>
                </div>
                <div class="form-group">
                    <label>Orçamento: </label>
                    <?php echo $this->Html->link($itemOrcamento['Orcamento']['valor'], array('controller' => 'orcamentos', 'action' => 'view', $itemOrcamento['Orcamento']['id'])); ?>
                </div>
                <div class="form-group">
                    <label>Data da Última Alteração: </label>
                    <?php 
                        $date = new DateTime($itemOrcamento['ItemOrcamento']['modified']);
                        echo h($date->format('d/m/Y H:i:s'));
                    ?>
                </div>
                <div class="form-group">
                    <label>Data de Criação: </label>
                    <?php 
                        $date = new DateTime($itemOrcamento['ItemOrcamento']['created']);
                        echo h($date->format('d/m/Y H:i:s'));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

