<?php

require_once("config.php");

//carrega apenas um usuario
//$gu = new Usuario();
//$gu->loadbyId(1);
// echo $gu;


//carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);


//carregar por qualquer parte o login
// $buscar = Usuario::search("patr");
// echo json_encode($buscar);

//carregar usando login e senha
$usuario = new Usuario();
$usuario->login("gustavo", "54321");
echo $usuario;



// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);