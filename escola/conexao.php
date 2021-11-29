<?php //mysqli procedural
$servidor = "localhost";
$usuario = "eduardo";
$senha = "123456";
$bd = "bdescola";

$con =  mysqli_connect($servidor,$usuario,$senha,$bd);

if($con) { 
    echo "<h1>Bem-vindo às aulas</h1>";
} else {
    echo "<h1>Não foi desta vez. Tente novamente.</h1>";
}