<?php
$servidor ="localhost";
$usuario  ="root";
$senha    ="";
$dbname   ="dbusers";


$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(! $conn){
    die("Falha na conexão : . mysqli_error()");    
}
echo "<h1>Você conectou </h1>";
?>