<div>
    <ul class="breadcrumb">
        <li>
            <?php echo $this->Html->link('Início', array('controller' => 'users', 'action' => 'index')); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Despesas', array('controller' => 'despesas', 'action' => 'index')); ?>
        </li>
        <li>
            <a>Extrato</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-share-alt"></i> Extrato</h2>
            </div>
            <div class="box-content">
                <?php 
                    echo $this->Form->create(array('controller' => 'Despesas', 'action' => 'extrato', 'type' => 'GET'));
                    echo $this->Form->input('id');
                    echo $this->Form->input('', array('type' => 'textbox', 'name' => 'ini', 'class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => 'Data Inicial'));
                    echo $this->Form->input('', array('type' => 'textbox', 'name' => 'fim', 'class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => 'Data Final'));
                    echo $this->Form->submit('Pesquisar', array('class' => 'btn btn-default', 'div' => false));
                    echo $this->Form->end();
                ?>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>Mês</th>
                            <th>Total (R$)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($queries as $query): ?>
                        <tr>
                            <td><?php echo $query['0']['Mes']; ?></td>
                            <td><?php echo number_format($query['0']['Total'], 2, ',', '.'); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('[name=ini]').mask('0000-00-00');
        $('[name=fim]').mask('0000-00-00');
    });
</script>