<?php

require_once("config.php");

//Carrega o usuario
//$root = new Usuario();
//$root -> loadbyId(3);
//echo $root;

//Carrega lista de usuarios
//$lista = Usuario::getList();
//echo json_decode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");

//echo json_encode($search);

//carrega um usuario usando o login e a senha

//$usuario = new Usuario();
//$usuario -> login("root", "!@#$");

//echo $usuario;

/*
//Criando um novo usuario
$aluno = new Usuario("aluno", "@lun0");
$aluno ->insert();
echo $aluno;
*/

$usuario = new Usuario();
$usuario -> loadbyId(8);
$usuario -> update("professoar", "!@#$&")
?>