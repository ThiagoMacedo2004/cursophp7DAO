<?php

require_once("config.php");

//carrega apenas um usuario
//$gu = new Usuario();
//$gu->loadbyId(1);
// echo $gu;

////////////////////////////////////////////////////////////////
//carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

////////////////////////////////////////////////////////////////
//carregar por qualquer parte o login
// $buscar = Usuario::search("patr");
// echo json_encode($buscar);

////////////////////////////////////////////////////////////////
//carregar usando login e senha
// $usuario = new Usuario();
// $usuario->login("gustavo", "54321");
// echo $usuario;

/////////////////////////////////////////////////////////////////
//insert de novo usuario no banco

//utilizando o metodo construtor
$aluno = new Usuario("Thiago de Souza Macedo", "gustavo888****");

//utilizando a função
// $aluno->setDeslogin("Gustavo de Medeiros Macedo");
// $aluno->setDessenha("20042017");

// $aluno->insert();
// echo $aluno;

////////////////////////////////////////////////////////////////
//ATUALIZANDO DADOS NO BANCO
// $usuario = new Usuario();
// $usuario->loadbyId(15);

// $usuario->update("Thiago Macedo", "8888888");
// echo $usuario;


/*
DELETANDO LINHA NO BANCO DE DADOS
*/
$usuario = new Usuario();
$usuario->loadbyId(15);
$usuario->delete();

echo $usuario;






// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);