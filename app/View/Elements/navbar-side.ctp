<div class="col-sm-2 col-lg-2">
    <div class="sidebar-nav">
        <div class="nav-canvas">
            <div class="nav-sm nav nav-stacked"></div>
            <ul class="nav nav-pills nav-stacked main-menu">
                <li>
                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-home"></i> Início', array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-arrow-up"></i> Receitas', array('controller' => 'receitas', 'action' => 'index'), array('escape' => false)); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-arrow-down"></i> Despesas', array('controller' => 'despesas', 'action' => 'index'), array('escape' => false)); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-tags"></i>  Categorias', array('controller' => 'categorias', 'action' => 'index'), array('escape' => false)); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-usd"></i> Orçamentos', array('controller' => 'orcamentos', 'action' => 'index'), array('escape' => false)); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-align-justify"></i> Itens de Orçamentos', array('controller' => 'ItemOrcamentos', 'action' => 'index'), array('escape' => false)); ?>
                </li>
            </ul>
        </div>
    </div>
</div>