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
        <p class="lead"><a><a>Você está na<a/><strong>   ÁREA DO ATLETA. </strong> <br/>Altere o Registro:</p>
      </div>

      <div class="form-top container top-content form-top row">
        <div class="row">
          <div class="col-md-7 col-sm-offset-1">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <center><h3 class="panel-title">Registro: <?php echo $registros[0]['Registro']['id'] ?></h3></center>
              </div>
              <div class="panel-body">
                <h4><strong><center>Dados:</center></strong></h4><br/>
                <table class="table table-hover table-condensed">
                  <thead>
                    <tr>
                      <th width= "10%"></th>
                      <th width= "10%">id</th>
                      <th>Atleta</th>
                      <th>Nome</th>
                      <th width= "19%">Data</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php echo $this->Form->create('Registros');?>
                    <tr>
                      <td>
                        &nbsp<center><?php echo $this->Form->submit('Salvar', array('class' => 'btn btn-success') );?></center>
                      </td>
                      <td>
                        <center><br/><?php echo $registros[0]['Registro']['id'] ?></center>
                      </td>
                      <td>
                        <br/><?php echo $registros[0]['Atleta']['nome'] ?>
                      </td>
                      <td>
                        <br/><?php echo $registros[0]['Evento']['nome'] ?>
                      </td>
                      <td>
                        <?php echo $this->Form->input('data', array('placeholder' => 'Digite o valor..', 'rule' => 'notEmpty', 'required' => true ,
                        'value' => $registros[0]['Registro']['data'], 'class' => 'form-password form-control', 'label' => '')); ?><br/>
                      </td>
                  </tbody>
                </table>
                <br/><center><a href="<?php echo Router::url(array('controller' => 'registros', 'action' => 'crud_registros')); ?>">Voltar</a></center>
                <br/>
                <br/><center><?php echo $this->Html->link('Deletar Registro',
                                            array('controller' => 'registros', 'action' => 'exclui_registros', $registros[0]['Registro']['id'] ),
                                            array('confirm' => 'Deseja mesmo deletar esse Registro?'));?>
                 </center>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>

  </div>
</div>
