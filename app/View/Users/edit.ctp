<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Perfil</h2>
            </div>
            <div class="box-content">
                <?php 
                    echo $this->Form->create('User', array('role' => 'form'));
                    echo $this->Form->input('name', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => 'Nome'));
                    echo $this->Form->input('email', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => 'E-mail'));
                    echo $this->Form->input('phone', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => 'Telefone'));
                    echo $this->Form->input('address', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => 'Endereço'));
                    echo $this->Form->input('password', array('class' => 'form-control', 'div' => array('class' => 'form-group'), 'label' => 'Senha'));
                    echo $this->Form->submit('Salvar', array('class' => 'btn btn-default', 'div' => false));
                    echo $this->Form->end(); 
                ?>
            </div>
        </div>
    </div>
</div>
