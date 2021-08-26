<?php

require_once("config.php");

$gu = new Usuario();
$gu->loadbyId(3);

echo $gu;

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);