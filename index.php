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
$usuario = new Usuario();
$usuario->login("root","123451sdsd11");
 echo $usuario;

 ?>