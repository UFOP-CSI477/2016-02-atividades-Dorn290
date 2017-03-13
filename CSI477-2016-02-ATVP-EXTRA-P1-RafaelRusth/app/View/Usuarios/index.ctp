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
                  <li role="presentation"><a href="<?php echo Router::url(array('controller' => 'atletas', 'action' => 'index_login')); ?>">Área do Paciente</a></li>
                  <li role="presentation" class="active"><a href="<?php echo Router::url(array('controller' => 'usuarios', 'action' => 'index')); ?>">Área Administrativa</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div>

      <div class="col-md-6">
        <br/><p class="lead"><a>Você acessou a<a/> <strong> ÁREA ADMINISTRATIVA. </br></strong> Escolha uma das opções abaixo:</p>
      </div>

      <div class="col-md-5">
        <div class="list-group">
          <a href="<?php echo Router::url(array('controller' => 'registros', 'action' => 'lista_registros')); ?>" class="list-group-item">Visualizar registros solicitados</a>
          <a href="<?php echo Router::url(array('controller' => 'atletas', 'action' => 'lista_atletas')); ?>" class="list-group-item">Visualizar lista de atletas</a>
        </div>
        <strong><a href="<?php echo Router::url('http://localhost/CSI477-2016-02-ATVP-EXTRA-P1-RafaelRusth'); ?>"><u>Voltar</u></a></strong>
      </div>


    </div>

  </div>
</div>
