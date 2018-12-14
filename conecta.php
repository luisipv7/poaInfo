<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=infopoa", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com sucesso!!"; 
    }
catch(PDOException $e)
    {
    echo "Erro de conexão: " . $e->getMessage();
    }
?>