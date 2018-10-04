<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>

<?php

$endereco = $_POST['evento'];

if($endereco==""|| $endereco= null){

    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
}
else{
    echo($endereco);
    //print"<script language='javascript' type='text/javascript'>alert('Cadastro efetuado com sucesso $endereco');window.location.href='index.html';</script>";
}



?>
    
</body>
</html>

