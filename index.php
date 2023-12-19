<?php
require 'usuarios.php';

$u = new Usuarios();
$res = $u->selecionar(2);

print_r($res);