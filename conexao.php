<?php   //conexão procedural
//criar variáveis de conexão
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "bdcurso";

//criar a conexão
//mysqli_connect(SERVIDOR,USUARIO,SENHA,BD);
//o mysqli_connect retorna TRUE ou FALSE
$con =  mysqli_connect($servidor,$usuario,$senha,$bd);
//var_dump($con);
if($con) { //verifica se a $con tem TRUE
    echo "Conectou ao BD";
} else {
    echo "Falha de conexão com o BD";
}