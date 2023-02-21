<?php
require_once("config.php");

/*
$root = new Usuario();
$root->loadById(3);

echo $root;
*/

//$lista = Usuario::getList();

//$busca = Usuario::search("jo");

$usuario = new Usuario();

$usuario->login("root", "!@#$%");

echo $usuario;

//echo json_encode($lista);

//echo json_encode($busca);

?>