<?php
session_start();
  include "conexao.inc";
  
$id= $_GET['id'];
 $result_tarefa="DELETE FROM tarefas WHERE id='$id'";
 $resultado_taref=mysqli_query($con, $result_tarefa);
?>

<script>
    location.href='index.php'
   </script>