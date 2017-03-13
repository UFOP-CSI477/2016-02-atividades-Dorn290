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
        <p class="lead"><a><a>Você está na<a/><strong>   ÁREA DO ATLETA. </strong> <br/>Visualize a lista de Registros solicitados:</p>
      </div>

      <div class="form-top container top-content form-top row">
        <div class="row">
          <div class="col-md-6 col-sm-offset-1">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Evento</th>
                  <th>Atleta</th>
                  <th>Data</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach ($registros as $r): ?>
                    <tr>
                      <td>
                        <?php echo $r['Evento']['nome']; ?>
                      </td>
                      <td>
                        <?php echo $r['Atleta']['nome']; ?>
                      </td>
                      <td>
                        <?php echo $r['Registro']['data']; ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
              </tbody>
              </table>
          </div>
        </div>
      </div>
      <br/><strong><a href="<?php echo Router::url(array('controller' => 'atletas', 'action' => 'geral')); ?>"><u>Voltar</u></a></strong>

    </div>

  </div>
</div>
