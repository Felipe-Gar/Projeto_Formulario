<?php
$servidor ="localhost";
$usuario  ="root";
$senha    ="";
$dbname   ="dbcadusuario";


$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(! $conn){
    die("Falha na conexão : . mysqli_connect_error()");    
}
echo "<h1>Você conectou </h1>";
?>