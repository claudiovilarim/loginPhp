<?php

session_start();

$localhost = "localhost";
$user = "root";
$pass = "";
$db = "login";

global $pdo;

try {
    $pdo= new PDO("mysql:host={$localhost};dbname={$db}", $user, $pass);
    $sql = $pdo->query("SELECT * FROM tb_usuarios");
    
    // echo $sql->rowCount();
    
    // foreach($pdo->query('SELECT * FROM tb_usuarios') as $row) {
    //     print_r($row);
    // }

    //$pdo = null; // encerrando a conexão com o banco

} catch (PDOException $e) { // se der erro, o erro será armazenado em $e
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

