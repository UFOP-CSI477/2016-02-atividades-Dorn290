<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Menu</title>

    <!-- Começar um bloco "input" do documento .html para as configurações .css
    Cada bloco representa uma configuração exclusiva de uma classe. Pode haver configurações de classes de classes.-->
    <style type="text/css">
    </style>

    <!-- para utilizar em "output" deve-se colocar esta linha de comando abaixo = "link" -->
    <link rel="stylesheet" type="text/css" href="estilo.css" />

    <link rel="stylesheet" href="css/bootstrap.css" media="screen">

  </head>
  <body>

    <!-- Estrutura para títulos-->
    <form name="menu" class="form-horizontal" action="Cadastro.php" method="post">


      <div class="form-group">
        <div class="row text-center">
          <div class="col-md-7 col-md-offset-2">
            <ul class="nav nav-tabs">
              <li role="sistema" class="active"><a href="#">Menu</a></li>
              <li role="sistema"><a href="Cadastro.php">Cadastro</a></li>
            </ul>
          </div>
        </div>
      </div>


      <div class="form-group">
        <div class="row text-center">
          <div class="col-md-6 col-md-offset-3"><h1>Bem-Vindo ao sistema Teste-1</h1><br /></div>
        </div>
      </div>

      <div class="form-group">
        <label for="matricula" class="control-label col-sm-5 col-md-offset-3">Para se cadastrar, basta clicar no botão cadastrar, ou clicar na aba à cima.</label>
        <div class="col-sm-4">
          <input type="submit" name="btnCadastrar" class="btn btn-default" value="Cadastro" />
        </div>
      </div>

    </form>

  </body>
</html>
