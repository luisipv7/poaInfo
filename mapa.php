<?php
session_start();



include 'conecta.php';

$contaBuraco=0;
$contaAcidente=0;
$contaAssalto=0;
$contaAlaga=0;

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
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<header>
    <nav class="navbar  navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.html">INFOPOA</a>
<div>
<ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link disabled" ><p id="name"></p> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" ><p id="state"></p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"><p id="temperature"></p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"><p id="date"></p></a>
        </li>
</ul>
</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
</header>
</nav>
   
<!--########################################################################################################################################--->

















<!--########################################################################################################################################--->

   <!-- https://drive.google.com/open?id=19bzqc8B5PHvR0gGDdrDM9Vi9VMA-v5Ed&usp=sharing -->
<div class = "container">
  <body id="fundo">
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
                $contaAssalto++;
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
                $contaAlaga++;
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
                $contaBuraco++;
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
                $contaAcidente++;
            }
             ?>
      </tbody>
    </table>

    <div id="piechart_3d"  style="opacity: 0.8;"></div>
  


  </div>
         
        

<!--###################################################################################################################--->


<script type="text/javascript">
 

 var HttpClient = function() {
this.get = function(aUrl, aCallback) {
var anHttpRequest = new XMLHttpRequest();
anHttpRequest.onreadystatechange = function() { 
if (anHttpRequest.readyState == 4 && anHttpRequest.status == 200)
aCallback(anHttpRequest.responseText);
}
anHttpRequest.open( "GET", aUrl, true ); 
anHttpRequest.send( null ); 
}
}
var theurl='http://apiadvisor.climatempo.com.br/api/v1/weather/locale/5557/current?token=3d502c0a27d51225f145ee0cbd25dd88';
var client = new HttpClient();
client.get(theurl, function(response) { 
var response1 = JSON.parse(response);
// alert(response);
document.getElementById("name").innerHTML = response1.name;
document.getElementById("state").innerHTML = response1.state;
document.getElementById("temperature").innerHTML = response1.data.temperature +"°";
document.getElementById("date").innerHTML = response1.data.date
/*document.getElementById("countryCode").innerHTML = response1.countryCode;
document.getElementById("countryName").innerHTML = response1.countryName;
document.getElementById("regionName").innerHTML = response1.regionName;
document.getElementById("cityName").innerHTML = response1.cityName;
document.getElementById("zipCode").innerHTML = response1.zipCode;
document.getElementById("latitude").innerHTML = response1.latitude;*/
});
  

</script>

<!--###################################################################################################################--->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['EVENTOS', 'Cadastros'],
          ['Acidentes',<?php echo "$contaAcidente" ?>],
          ['Assaltos',<?php echo "$contaAssalto" ?>],
          ['Buraco',  <?php echo "$contaBuraco" ?>],
          ['Alagamento',<?php echo "$contaAlaga" ?>]
        ]);

        var options = {
          title: 'DashBoard dos Incidentes:',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

    
}); 



   

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>