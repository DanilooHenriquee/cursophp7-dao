<?php

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);

// Carrega 1 usuário:
// $root = new Usuario();
// $root->loadById(3);
// echo $root;

// Carrega Todos usuários:
// $lista = Usuario::getList();
// echo json_encode($lista);

// carrega usuarios que tenha a palavra passada como parametro do banco de dados.
// $search = Usuario::search("root");
// echo json_encode($search);

// mostra usuarios pelo login e password;
// $usuario = new Usuario();
// $usuario->login("root","root");
// echo $usuario;

// Inserir novo Usuario no banco de dados.
// $aluno = new Usuario("Danilo","!@#321");
// $aluno->insert();
// echo $aluno;

// Alterar o login e senha de um usuario no banco de dados.
/*
$usuario = new Usuario();
$usuario -> loadById(8);
$usuario -> update("Professor", "!@#$%¨&*");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();

echo $usuario;

?>