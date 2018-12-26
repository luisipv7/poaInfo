<?php
session_start();


include 'conecta.php';

$valor = $_POST['enderecoassalto'];

$valor2 = $_POST['enderecoalagamento'];

$valor3 = $_POST['enderecoaacidente'];

$valor4 = $_POST['enderecoburaco'];


if($valor){
$my_Insert_Statement = $conn->prepare("INSERT INTO enderecoassalto (endereco) VALUES (:endereco )");

$my_Insert_Statement->bindParam(':endereco', $valor);

if ($my_Insert_Statement->execute()) {
    echo "Cadastrado com sucesso.";
    //$contaAcidente++;
    header('location: index.html');
  } else {
    echo "Não foi possivel";
  }
}

if($valor2){

    $my_Insert_Statement = $conn->prepare("INSERT INTO enderecoalagamento (endereco) VALUES (:endereco )");
    
    $my_Insert_Statement->bindParam(':endereco', $valor2);
    
    if ($my_Insert_Statement->execute()) {
        echo "Cadastrado com sucesso.";
      //  $contaAlaga++;
        header('location: index.html');
      } else {
        echo "Não foi possivel";
      }
    
    }

    if($valor3){
        $my_Insert_Statement = $conn->prepare("INSERT INTO acidente (endereco) VALUES (:endereco )");
        
        $my_Insert_Statement->bindParam(':endereco', $valor3);
        
        if ($my_Insert_Statement->execute()) {
            echo "Cadastrado com sucesso.";
         //   $contaAcidente++;
         header('location: index.html');
          } else {
            echo "Não foi possivel";
          }
        
        }

        if($valor4){
            $my_Insert_Statement = $conn->prepare("INSERT INTO buraco (endereco) VALUES (:endereco )");
            
            $my_Insert_Statement->bindParam(':endereco', $valor4);
            
            if ($my_Insert_Statement->execute()) {
                echo "Cadastrado com sucesso.";
              //  $contaBuraco;
                header('location: index.html');
              } else {
                echo "Não foi possivel";
              }
            
            }
            


?>