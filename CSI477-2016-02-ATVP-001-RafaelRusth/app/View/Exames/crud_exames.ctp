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
                  <li role="presentation"><a href="<?php echo Router::url(array('controller' => 'procedimentos', 'action' => 'index')); ?>">Área Geral</a></li>
                  <li role="presentation" class="active"><a href="<?php echo Router::url(array('controller' => 'pacientes', 'action' => 'index_login')); ?>">Área do Paciente</a></li>
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
        <p class="lead"><a><a>Você está na<a/><strong>   ÁREA DO PACIENTE. </strong> <br/>Você pode editar ou excluir o exame:</p>
      </div>

      <div class="form-top container top-content form-top row">
        <div class="row">
          <br/>
            <div class="col-md-6 col-sm-offset-1">
              <h4><strong><center>Exames Solicitados</center></strong></h4><br/>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th></th>
                    <th>Procedimento</th>
                    <th>Paciente</th>
                    <th>Data</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($exames as $e): ?>
                      <tr>
                        <td>
                          <center><a href=" <?php echo Router::url(array('controller' => 'exames', 'action' => 'altera_exames', $e['Exame']['id'])); ?>" ><button class='btn btn-primary'>Editar</button></a></center>
                        </td>
                        <td>
                          <?php echo $e['Procedimento']['nome']; ?>
                        </td>
                        <td>
                          <?php echo $e['Paciente']['nome']; ?>
                        </td>
                        <td>
                          <?php echo $e['Exame']['data']; ?>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
          </div>
        </div>
        <br/><strong><a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'exames_solicitados')); ?>"><u>Voltar</u></a></strong>


    </div>

  </div>
</div>
