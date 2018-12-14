<?php
session_start();
session_destroy();


include 'conecta.php';

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="estilo.css" rel="stylesheet">

</head>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.html">INFOPOA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    </nav>
</header>

<body id="fundo">
   <!-- https://drive.google.com/open?id=19bzqc8B5PHvR0gGDdrDM9Vi9VMA-v5Ed&usp=sharing -->
<div class = "container">
    <br>  <br><br>
    <table class="table table-dark">
      <thead>
      <tr>
        <th class="bg-danger">Assalto</th>    
        </tr>
        <tr>
        <th scope="col">Cadastro</th>
      <th scope="col">Endereço</th>     
        </tr>
      </thead>
      <tbody>
          <?php
            $rs = $conn->query("select * from enderecoassalto");
            while($row = $rs->fetch(PDO::FETCH_OBJ)){
                echo "<tr><td>".$row->id."</td><td>".$row->endereco."</td><td></tr>";
            }
             ?>
      </tbody>
    </table>
        </div>
        <div class = "container">
    <br>  <br><br>
    <table class="table table-dark">
      <thead>
      <tr>
        <th class="bg-success">Alagamento</th>    
        </tr>
        <tr>
        <th scope="col">Cadastro</th>
      <th scope="col">Endereço</th>     
        </tr>
      </thead>
      <tbody>
          <?php
            $rs = $conn->query("select * from enderecoalagamento");
            while($row = $rs->fetch(PDO::FETCH_OBJ)){
                echo "<tr><td>".$row->id."</td><td>".$row->endereco."</td><td></tr>";
            }
             ?>
      </tbody>
    </table>
        </div>

            <div class = "container">
    <br>  <br><br>
    <table class="table table-dark">
      <thead>
      <tr>
        <th class="bg-warning">Buraco</th>    
        </tr>
        <tr>
        <th scope="col">Cadastro</th>
      <th scope="col">Endereço</th>     
        </tr>
      </thead>
      <tbody>
          <?php
            $rs = $conn->query("select * from buraco");
            while($row = $rs->fetch(PDO::FETCH_OBJ)){
                echo "<tr><td>".$row->id."</td><td>".$row->endereco."</td><td></tr>";
            }
             ?>
      </tbody>
    </table>
        </div>

        
        <div class = "container">
    <br>  <br><br>
    <table class="table table-dark">
      <thead>
      <tr>
        <th class="bg-info">Acidente</th>    
        </tr>
        <tr>
        <th scope="col">Cadastro</th>
      <th scope="col">Endereço</th>     
        </tr>
      </thead>
      <tbody>
          <?php
            $rs = $conn->query("select * from acidente");
            while($row = $rs->fetch(PDO::FETCH_OBJ)){
                echo "<tr><td>".$row->id."</td><td>".$row->endereco."</td><td></tr>";
            }
             ?>
      </tbody>
    </table>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>