<div class="row">
    <div class="col-md-12 center login-header">
        <h2>Sistema de Controle de Gastos</h2>
    </div>
</div>
<div class="row">
    <div class="well col-md-5 center login-box">
        <div class="alert alert-info">
            Acesse sua Conta
        </div>
        <?php 
            $message = $this->Session->flash();
            $msgAuth = $this->Session->flash('auth');
            if ($message || $msgAuth): 
        ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo $message; ?>
                    <?php echo $msgAuth; ?>
                </div>
        <?php endif; ?>
        <?php echo $this->Form->create('User', array('class' => 'form-horizontal')); ?>
            <fieldset>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                    <?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'E-mail', 'label' => false, 'div' => false)); ?>
                </div>
                <div class="clearfix"></div><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                    <?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Senha', 'label' => false, 'div' => false)); ?>
                </div>
                <div class="clearfix"></div>
                <p class="center col-md-5">
                    <?php echo $this->Form->submit('Login', array('class' => 'btn btn-primary', 'div' => false)); ?>
                </p>
            </fieldset>
        <?php echo $this->Form->end(); ?>
        <div id="nao-possui-conta">
            Não possui uma conta? 
            <?php echo $this->Html->link('Cadastre-se!', array('controller' => 'users', 'action' => 'add')); ?>
        </div>
</div>