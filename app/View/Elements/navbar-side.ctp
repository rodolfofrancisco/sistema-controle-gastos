<div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li>
                            <?php echo $this->Html->link('<i class="glyphicon glyphicon-home"></i> Início', array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('Recursos', array('controller' => 'receitas', 'action' => 'index')); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('Despesas', array('controller' => 'despesas', 'action' => 'index')); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('Categorias', array('controller' => 'categorias', 'action' => 'index')); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('Orçamentos', array('controller' => 'orcamentos', 'action' => 'index')); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('Itens de orçamentos', array('controller' => 'ItemOrcamentos', 'action' => 'index')); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>