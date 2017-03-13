<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 ">
      <div class="form-top">
        <div class="form-top-left">
          <div class="col-md-7">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <center><h3 class= "panel-title"> Acesse o menu abaixo:</h3></center>
              </div>
              <div class="panel-body">
                <ul class="nav nav-pills nav-stacked">
                  <li role="presentation"><a href="<?php echo Router::url(array('controller' => 'eventos', 'action' => 'index')); ?>">Área Geral</a></li>
                  <li role="presentation" class="active"><a href="<?php echo Router::url(array('controller' => 'atletas', 'action' => 'index_login')); ?>">Área do Atleta</a></li>
                  <li role="presentation"><a href="<?php echo Router::url(array('controller' => 'usuarios', 'action' => 'index')); ?>">Área Administrativa</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div>

      <div class="col-md-6">
        <br/><p class="lead"><strong> Acesso restrito! <br/>Efetue o login para prosseguir ou <a href="<?php echo Router::url('/atletas/index_cadastro'); ?>"><u>Cadastre-se aqui.</u></a></strong>
      </div>

      <div class="form-top container top-content form-top row">
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->create('Atleta', array('url' => 'login' ));?>
            <div class="form-group">
              <br/><h4><strong>Login:</strong></h4>
              <?php echo $this->Form->username('login', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true , 'class' => 'form-text form-control', 'label' => 'login')); ?>
            </div>
            <div class="form-group">
              <br/><p><h4><strong>Senha:</strong></h4></p>
              <?php echo $this->Form->password('senha', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true , 'class' => 'form-password form-control', 'label' => 'senha'));?>
            </div>
            <br/><?php  echo $this->Form->submit('Continuar', array('class' => 'btn btn-success') );  ?>
            <br/>
            <strong><a href="<?php echo Router::url('http://localhost/CSI477-2016-02-ATVP-EXTRA-P1-RafaelRusth/'); ?>"><u>Voltar</u></a></strong>
          </div>
        </div>
      </div>


    </div>

  </div>
</div>
