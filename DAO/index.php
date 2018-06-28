<?php

require_once("config.php");
// carrega um usuário
// $root = new Usuario;
// $root->loadById(4);
// echo $root;

// carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

// carrega uma lista de usuarios buscando pelo login
// $search = Usuario::search("He");
// echo json_encode($search);

// carrega o usuario com login e senha
// $usuario = new Usuario;
// $usuario->login('Carlos', '987456');
// echo $usuario;

$aluno = new Usuario;
$aluno->setDeslogin("Beto");
$aluno->setDessenha("!@#$");
$aluno->insert();
echo $aluno;