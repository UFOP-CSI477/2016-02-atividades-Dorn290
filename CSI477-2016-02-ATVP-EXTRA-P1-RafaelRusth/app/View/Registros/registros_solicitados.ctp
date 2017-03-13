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
        <p class="lead"><a><a>Você está na<a/><strong>   ÁREA DO ATLETA. </strong> <br/>Visualize os Registros que você solicitou:</p>
      </div>

      <div class="form-top container top-content form-top row">
        <div class="row">
          <div class="col-md-6 col-sm-offset-1">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>EVENTO</th>
                    <th>VALOR</th>
                    <th>DATA</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                   $qtdregi = 0;
                   $qtdvalor = 0;

                  foreach ($registros as $r):
                    $qtdregi = $qtdregi + 1;
                    $qtdvalor += $r['Evento']['preco']; ?>
                    <tr>
                      <td>
                        <?php echo $r['Evento']['nome']; ?>
                      </td>
                      <td>
                        <?php echo $r['Evento']['preco']; ?>
                      </td>
                      <td>
                        <?php echo $r['Evento']['data']; ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  <tr><td colspan="3"></td></tr>
                    <tr class="success">
                    <td><strong>QUANTIDADE DE REGISTROS:</strong></td><td><?php echo $qtdregi; ?></td><td></td>
                    </tr>
                  <tr class="success">
                    <td><strong>VALOR TOTAL:</strong></td><td> R$ <?php echo $qtdvalor; ?></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <strong><a href=" <?php echo Router::url(array('controller' => 'registros', 'action' => 'crud_registros')); ?>" ><button class='btn btn-primary'>Editar algum registro</button></a></strong>
            </div>
          </div>
        <br/><strong><a href="<?php echo Router::url(array('controller' => 'atletas', 'action' => 'geral')); ?>"><u>Voltar</u></a></strong>
      </div>


    </div>

  </div>
</div>
