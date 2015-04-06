<div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php echo $this->Html->link('<span>Sistema de Controle de Gastos</span>', array('controller' => 'users', 'action' => 'index'), array('escape' => false, 'class' => 'navbar-brand', 'style' => 'width: auto;')); ?>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <?php 
                        $name = $this->Session->read('Auth.User.name');
                        $array = explode(' ', $name);
                        $name = array_shift($array);
                    ?>
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php echo $name; ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <?php
                            echo $this->Html->link('Perfil', array('controller' => 'users', 'action' => 'edit', $this->Session->read('Auth.User.id'))); 
                        ?>
                    </li>
                    <li class="divider"></li>
                    <li><a href="<?php echo $this->Html->url('/users/logout'); ?>">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

                     

        </div>
    </div>