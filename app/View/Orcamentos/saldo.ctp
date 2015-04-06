<div>
    <ul class="breadcrumb">
        <li>
            <?php echo $this->Html->link('Início', array('controller' => 'users', 'action' => 'index')); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Orçamentos', array('controller' => 'orcamentos', 'action' => 'index')); ?>
        </li>
        <li>
            <a>Saldo</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-share-alt"></i> Saldo</h2>
            </div>
            <div class="box-content">
                <?php 
                    echo $this->Form->create(array('controller' => 'Orcamentos', 'action' => 'saldo', 'type' => 'GET'));
                    echo $this->Form->input('id');
                    echo $this->Form->input('', array('type' => 'textbox', 'name' => 'mes', 'class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => 'Data'));
                    echo $this->Form->submit('Pesquisar', array('class' => 'btn btn-default', 'div' => false));
                    echo $this->Form->end(); 
                ?>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>Orçamento (R$)</th>
                            <th>Despesa (R$)</th>
                            <th>Saldo (R$)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orcamentos as $query): ?>
                        <tr>        
                            <td>
                                <?php 
                                    echo number_format($query['0']['Total'], 2, ',', '.'); 
                                    $v1 = $query['0']['Total']; 
                                ?>
                            </td>   
                        <?php endforeach; ?>
                        <?php foreach ($despesas as $query): ?>          
                            <td>
                                <?php 
                                    echo number_format($query['0']['Total'], 2, ',', '.'); 
                                    $v2 = $query['0']['Total']; 
                                ?>
                            </td>
                            <td><?php echo number_format($v1 - $v2, 2, ',', '.'); ?></td>
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
        $('[name=mes]').mask('0000-00-00');
    });
</script>