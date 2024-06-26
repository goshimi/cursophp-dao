 <?php

require_once("config.php");

/* 
//Carrega uma lista de usuários

$lista = Usuario::getList();
echo json_encode($lista);
*/

/* 
//Carrega um usuário
$root = new Usuario();
$root->loadbyId(4);
echo $root;
*/

/* 
//Carrega mais usuários
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

/* 
//Carrega uma lista de usuário buscando pelo login
$search = Usuario::search("jo");

echo json_encode($search);
*/

/* 
//Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("João", "qwerty");

echo $usuario;
*/

/*
//Criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;
*/

/*
//Alterar um usuario
$usuario = new Usuario();

$usuario->loadbyId(8);

$usuario->update("professor", "!@#$%¨&*");

echo $usuario;
*/
$usuario = new Usuario();

$usuario->loadbyId(8);

$usuario->delete();

echo $usuario;

?>