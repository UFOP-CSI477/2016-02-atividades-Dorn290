<html>
  <head>
    <meta charset="utf-8">
    <title>Lista</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
  </head>
  <body>
    <form name="lista" class="form-horizontal" action="Menu.php" method="post">

      <div class="form-group">
        <div class="row text-center">
          <div class="col-md-7 col-md-offset-2">
            <ul class="nav nav-tabs">
              <li role="sistema" class="active"><a href="#">Resumo</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-6 col-md-offset-4"><h1>Resumo do Cadastro</h1><br /></div>
        </div>
      </div>

      <div class="form-group">
        <label for="matricula" class="control-label col-sm-4">Matrícula</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="matricula" value="<?php $matricula = $_POST["matricula"]; echo $matricula; ?>" disabled>
        </div>
      </div>

      <div class="form-group">
        <label for="nome" class="control-label col-sm-4">Nome</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="nome" value="<?php $nome = $_POST["nome"]; echo $nome; ?>" disabled>
        </div>
      </div>

      <div class="form-group">
        <label for="email" class="control-label col-sm-4">e-Mail</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="email" value="<?php $email = $_POST["email"]; echo $email; ?>" disabled>
        </div>
      </div>

      <div class="form-group">
        <label for="cpf" class="control-label col-sm-4">CPF</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="cpf" value="<?php $cpf = $_POST["cpf"]; echo $cpf; ?>" disabled>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-8 text-right">
          <input type="submit" name="btnCadastrar" class="btn btn-default" value="OK" />
        </div>
      </div>

    </form>

  </body>
</html>
