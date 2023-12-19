<?php
require 'usuarios.php';

$u = new Usuarios();
// selecionar
// $res = $u->selecionar(2);

// print_r($res);

// Inserir
$u->inserir("Reinaldo Lima", "balman@gmail.com.br", "123");