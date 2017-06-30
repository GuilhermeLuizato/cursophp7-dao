<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); */

//Carrega UM usuário
//$root = new Usuario();
//$root->loadById(6);
//echo $root;

//Carrega uma Lista de Usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma Lista de Usuarios Buscando pelo Login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root","123451sdsd11");
//echo $usuario;

//Criando um novo Usuario - Insert
//$aluno = new Usuario("aluninho", "@alun9");
//$aluno->insert();
//echo $aluno;

/*
Alterar um Usuario 
$usuario = new Usuario();
$usuario->loadById(7);

$usuario->update("professor", "1589");

echo $usuario;
*/ 

$usuario = new Usuario();
$usuario->loadById(8);
$usuario->delete();
echo $usuario;

 ?>