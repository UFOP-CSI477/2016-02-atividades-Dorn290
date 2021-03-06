<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Validação</title>

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

    <div class="form-group">
      <div class="row text-center">
        <div class="col-md-8 col-md-offset-2">
          <ul class="nav nav-tabs">
            <li role="sistema" class="active"><a href="#">Validacao</a></li>
          </ul>
        </div>
      </div>
    </div>

      <table align="center">
        <tr>
          <th colspan="2" align="center">
            <h1>Certeza que deseja confirmar os dados inseridos?</h1><br />
          </th>
        </tr>

        <tr>
          <td align="right">
            <form name="confirma" class="form-horizontal" method="post" action="Lista.php">
                <div class="form-group">
                  <div class="col-sm-10 text-right">
                    <input type="submit" name="btnConfirma" class="btn btn-default" value="Confirma" />
                  </div>
                </div>
            </form>
          </td>

          <td align="left">
            <form name="desiste" class="form-horizontal" method="post" action="Cadastro.php">
                <div class="form-group">
                  <div class="col-sm-1 text-right">
                    <input type="submit" name="btnVoltar" class="btn btn-default" value="Voltar" />
                  </div>
                </div>
            </form>
          </td>
        </tr>

      </table>




  </body>
</html>
