<?php
require_once("config.php");

/*
$root = new Usuario();
$root->loadById(3);

echo $root;
*/

//$lista = Usuario::getList();

/*$busca = Usuario::search("jo");

$usuario = new Usuario();

$usuario->login("root", "!@#$%");

echo $usuario;

$aluno = new Usuario("menino","menina");

$aluno->insert();

echo $aluno;

echo json_encode($lista);

echo json_encode($busca);
*/
/*
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->update("cachorro","gato");

echo $usuario;
*/
$usuario = new Usuario();
$usuario->loadById(7);

$usuario->delete();

echo $usuario;
?>