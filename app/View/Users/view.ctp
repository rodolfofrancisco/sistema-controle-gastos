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
                <h2><i class="glyphicon glyphicon-eye-open icon-white"></i> Usuário</h2>
            </div>
            <div class="box-content">
                <div class="form-group">
                    <label>Nome: </label>
                    <?php echo h($user['User']['name']); ?>
                </div>
                <div class="form-group">
                    <label>E-mail: </label>
                    <?php echo h($user['User']['email']); ?>
                </div>
                <div class="form-group">
                    <label>Endereço: </label>
                    <?php echo h($user['User']['address']); ?>
                </div>
                <div class="form-group">
                    <label>Telefone: </label>
                    <?php echo h($user['User']['phone']); ?>
                </div>
            </div>
        </div>
    </div>
</div>
