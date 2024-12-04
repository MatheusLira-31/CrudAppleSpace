<?php 
    $servidor="localhost";
    $usuario="root";
    $senha="1234";
    $banco="dbteste";
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>