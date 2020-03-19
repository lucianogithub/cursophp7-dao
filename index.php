<?php  

require_once("config.php");

// CARREGA UM USUÁRIO
// $root = new Usuario();
// $root->loadById(4);
// echo $root;

// CARREGA UMA LISTA
// $lista = Usuario::getList();
// echo json_encode($lista);

// CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
// $search = Usuario::search("g");
// echo json_encode($search);

// CARREGA UM USUARIO USANDO O LOGIN E A SENHA
// $usuario = new Usuario();
// $usuario->login("luciano","123456");
// echo $usuario;

// INSERIR UM NOVO USUARIO
// $aluno = new Usuario("Beth", ")(**&");
// $aluno->setDeslogin("Drica");
// $aluno->setDessenha("098765");
// $aluno->insert();
// echo $aluno;

// UPDATE DE USUARIO
// $usuario = new Usuario();
// $usuario->loadById(7);
// $usuario->update("Beth3.0", "nova09876");
// echo $usuario;


// DELETE DE UM USUARIO
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();

echo $usuario;

?>