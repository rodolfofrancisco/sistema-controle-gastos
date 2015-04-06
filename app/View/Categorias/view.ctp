<div>
    <ul class="breadcrumb">
        <li>
            <?php echo $this->Html->link('Início', array('controller' => 'users', 'action' => 'index')); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Categorias', array('controller' => 'categorias', 'action' => 'index')); ?>
        </li>
        <li>
            <a>Visualizar Categoria</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-eye-open icon-white"></i> Visualizar Categoria</h2>
            </div>
            <div class="box-content">
                <div class="form-group">
                    <label>Descrição: </label>
                    <?php echo h($categoria['Categoria']['descricao']); ?>
                </div>
                <div class="form-group">
                    <label>Data da Última Alteração: </label>
                    <?php 
                        $date = new DateTime($categoria['Categoria']['modified']);
                        echo h($date->format('d/m/Y H:i:s'));
                    ?>
                </div>
                <div class="form-group">
                    <label>Data de Criação: </label>
                    <?php 
                        $date = new DateTime($categoria['Categoria']['created']);
                        echo h($date->format('d/m/Y H:i:s'));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
        
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-arrow-down"></i> Despesas Relacionadas</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>Valor (R$)</th>
                            <th>Descrição</th>
                            <th>Receita</th>
                            <th>Data da Última Alteração</th>
                            <th>Data de Criação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categoria['Despesa'] as $despesa): ?>
                            <tr>
                                <td><?php echo number_format(h($despesa['valor']), 2, ',', '.'); ?>&nbsp;</td>
                                <td><?php echo h($despesa['descricao']); ?>&nbsp;</td>
                                <td><?php echo $receitas[$despesa['receita_id']];; ?></td>
                                <td>
                                    <?php 
                                        $date = new DateTime($despesa['modified']);
                                        echo h($date->format('d/m/Y H:i:s'));
                                    ?>&nbsp;
                                </td>
                                <td>
                                    <?php 
                                        $date = new DateTime($despesa['created']);
                                        echo h($date->format('d/m/Y H:i:s'));
                                    ?>&nbsp;
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-align-justify"></i> Itens de Orçamentos Relacionados</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>Valor (R$)</th>
                            <th>Orçamento</th>
                            <th>Data da Última Alteração</th>
                            <th>Data de Criação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categoria['ItemOrcamento'] as $itemOrcamento): ?>
                            <tr>
                                <td><?php echo number_format(h($itemOrcamento['valor']), 2, ',', '.'); ?>&nbsp;</td>
                                <td><?php echo number_format($orcamentos[$itemOrcamento['orcamento_id']], 2, ',', '.'); ?></td>
                                <td>
                                    <?php 
                                        $date = new DateTime($itemOrcamento['modified']);
                                        echo h($date->format('d/m/Y H:i:s'));
                                    ?>&nbsp;
                                </td>
                                <td>
                                    <?php 
                                        $date = new DateTime($itemOrcamento['created']);
                                        echo h($date->format('d/m/Y H:i:s'));
                                    ?>&nbsp;
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>