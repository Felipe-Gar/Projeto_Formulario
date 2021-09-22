<?php
include('conectar.php');

$nome     =  $_POST["nome"];
$nomeusu  =  $_POST["nomeusu"];
$senha    =  $_POST["senha"];
$consenha =  $_POST["consenha"];
$cpf      =  $_POST["cpf"];
$datan     =  $_POST["datan"];
$celular  =  $_POST["celular"];
$cep      =  $_POST["cep"];
$rua      =  $_POST["rua"];
$numero   =  $_POST["numero"];
$comple   =  $_POST["comple"];
$bairro   =  $_POST["bairro"];
$cidade   =  $_POST["cidade"];

$cad_usuario = "INSERT INTO usuario (nome, nomeusu, senha, consenha, cpf, datan, celular, cep, rua, numero, comple, bairro, cidade) VALUES ('$nome', '$nomeusu', '$senha', '$consenha', '$cpf', '$datan', '$celular', '$cep',  '$rua', '$numero', '$comple', '$bairro', '$cidade')";

if(mysqli_query($conn ,$cad_usuario)){
    echo"<h1>Novo cadastro</h1></br>";

}else{
    echo "Erro:" . $cad_usuario . "</br>" . mysqli_error($conn);
}
mysqli_close($conn);




?>