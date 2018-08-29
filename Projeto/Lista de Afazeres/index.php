<?php
include "conexao.inc";
$result_tarefas="SELECT * FROM tarefas";
$resultado_tarefas= mysqli_query($con, $result_tarefas);

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Lista de Afazeres</title>

    <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

    <script type="text/javascript" src="js/main.js"></script>

    <link rel="stylesheet" type="text/css" href="css/estilo.css">


  </head>
  <body>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Lista de Afazeres</h1>
        <p class="lead">Agende suas tarefas!</p>
      </div>
    </div>

<div id="conteudo">
   <div class="container">
    <div class="row">

     <div class="col-md-6" style="border-right: 1px solid #000000;">

      <div id="new-message">
        <h3><i class="fa fa-plus-circle"></i>&nbsp;Nova Tarefa</h3>

      </div>
      <br>
      <div class="form-group text-center"> 
         <form name="cadastro" method="post" action="starefa.php">
        <input class="form-control" type="text" placeholder="Insira uma tarefa.." name="texto-form" required id="texto">
        
         <div id="espaco" style="height:10px;"></div>
         
        <label for="exampleFormControlInput1">Para:</label>
        <input class="form-control form-control-sm" type="text" placeholder="Informe a data.."  name="data" required>

        <br>
        <br>
        <button type="submit" class="btn-btn-success form-control" id="buttomSave">Salvar</button>

      </form>
        
      </div>
      <div id="success">

      </div>
      <div id="error"></div>
    </div>
     <div class="col-md-6">
       <div id="messages">
        <h3><i class="fa fa-exclamation-circle"></i>&nbsp;Pendentes</h3>

      <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">Tarefa</th>
      <th scope="col">Data</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
   <tbody> 
   <?php while($rows_tarefas = mysqli_fetch_assoc($resultado_tarefas)) { ?>
    <tr>
      <td><?php echo $rows_tarefas['tarefa']; ?> </td>
      <td><?php echo $rows_tarefas['data']; ?></td>
      <td><?php $rows_tarefas['id']; ?> </td>
      <td><i class="fas fa-trash-alt"> </i>
<?php echo "<a class='badge badge-light'  href='apagar.php?id=" . $rows_tarefas['id'] . "'>Apagar</a>"; ?>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>

      </div>
     </div>

</div>
</div>




</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>