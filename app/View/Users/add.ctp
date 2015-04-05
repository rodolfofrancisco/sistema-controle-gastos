<div class="row">
    <div class="col-md-12 center login-header">
        <h2>Sistema de Controle de Gastos</h2>
    </div>
</div>
<div class="row">
    <div class="well col-md-5 center login-box">
        <div class="alert alert-info">
            Cadastre-se
        </div>
        <?php 
            $message = $this->Session->flash();
            if ($message): 
        ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo $message; ?>
                </div>
        <?php endif; ?>
        <?php echo $this->Form->create('User', array('class' => 'form-horizontal')); ?>
            <fieldset>
                <?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Nome', 'label' => false, 'div' => array('class' => 'input-group input-group-lg col-md-12'))); ?>
                <div class="clearfix"></div><br>
                <?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'E-mail', 'label' => false, 'div' => array('class' => 'input-group input-group-lg col-md-12'))); ?>
                <div class="clearfix"></div><br>
                <?php echo $this->Form->input('address', array('class' => 'form-control', 'placeholder' => 'Endereço', 'label' => false, 'div' => array('class' => 'input-group input-group-lg col-md-12'))); ?>
                <div class="clearfix"></div><br>
                <?php echo $this->Form->input('phone', array('class' => 'form-control', 'placeholder' => 'Telefone', 'label' => false, 'div' => array('class' => 'input-group input-group-lg col-md-12'))); ?>
                <div class="clearfix"></div><br>
                <?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Senha', 'label' => false, 'div' => array('class' => 'input-group input-group-lg col-md-12'))); ?>
                <div class="clearfix"></div>
                <p class="center col-md-5">
                    <?php echo $this->Form->submit('Salvar', array('class' => 'btn btn-primary', 'div' => false)); ?>
                </p>
            </fieldset>
        <?php echo $this->Form->end(); ?>
        <div id="possui-conta">
            Já possui uma conta? 
            <?php echo $this->Html->link('Faça seu login.', array('controller' => 'users', 'action' => 'login')); ?>
        </div>
    </div>
</div>