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
        <p class="lead"><a><a>Você está na<a/><strong>   ÁREA DO PACIENTE. </strong> <br/>Informe a data e salve a solicitação:</p>
      </div>

      <div class="form-top container top-content form-top row">
        <div class="row">
          <br/>
          <div class="col-md-6 col-sm-offset-1">
            <div class="panel panel-primary">
              <div class="panel-body">
                <?php
                echo $procedimento['Procedimento']['nome'];?>
                &nbsp&nbsp&nbsp&nbsp
                R$<?php echo $procedimento['Procedimento']['preco'];
                echo $this->Form->create('Exame');?>
                &nbsp&nbsp&nbsp&nbsp
                <?php  echo $this->Form->input('data', array('label' => 'Data para pagamento:    ', 'rule' => 'notEmpty', 'required' => true ,'placeholder' => 'dd/mm/aaaa', 'class' => 'form-text'));?>
                <?php
                      $this->Form->hidden('paciente_id');
                      $this->Form->hidden('procedimento_id'); ?>
                <br/><?php echo $this->Form->submit('Salvar',  array('class' => 'btn btn-success')); ?>
              </div>
            </div>
          </div>
        </div>
          <br/><strong><a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'solicita_exame')); ?>"><u>Voltar</u></a></strong>
      </div>


    </div>

  </div>
</div>
