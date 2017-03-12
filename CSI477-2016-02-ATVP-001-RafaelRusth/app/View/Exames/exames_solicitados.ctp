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
        <p class="lead"><a><a>Você está na<a/><strong>   ÁREA DO PACIENTE. </strong> <br/>Visualize os Exames que você solicitou:</p>
      </div>

      <div class="form-top container top-content form-top row">
        <div class="row">
          <div class="col-md-6 col-sm-offset-1">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>EXAME</th>
                    <th>VALOR</th>
                    <th>DATA</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                   $qtdexam = 0;
                   $qtdvalor = 0;

                  foreach ($exames as $e):
                    $qtdexam = $qtdexam + 1;
                    $qtdvalor += $e['Procedimento']['preco']; ?>
                    <tr>
                      <td>
                        <?php echo $e['Procedimento']['nome']; ?>
                      </td>
                      <td>
                        <?php echo $e['Procedimento']['preco']; ?>
                      </td>
                      <td>
                        <?php echo $e['Exame']['data']; ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  <tr><td colspan="3"></td></tr>
                    <tr class="success">
                    <td><strong>QUANTIDADE DE EXAMES:</strong></td><td><?php echo $qtdexam; ?></td><td></td>
                    </tr>
                  <tr class="success">
                    <td><strong>VALOR TOTAL:</strong></td><td> R$ <?php echo $qtdvalor; ?></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <strong><a href=" <?php echo Router::url(array('controller' => 'exames', 'action' => 'crud_exames')); ?>" ><button class='btn btn-primary'>Editar algum registro</button></a></strong>
              <!--<br/><strong><a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'crud_exames')); ?>"><u>Editar</u></a></strong>-->
            </div>
          </div>
        <br/><strong><a href="<?php echo Router::url(array('controller' => 'pacientes', 'action' => 'geral')); ?>"><u>Voltar</u></a></strong>
      </div>


    </div>

  </div>
</div>
