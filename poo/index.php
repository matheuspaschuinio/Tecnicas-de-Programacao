<?php
    // Criando um objeto

    // Juntando os dois arquivos PHP, usuario e index.
    // include "usuario.php";
    // include_once "usuario.php";
    // require "usuario.php";
    require_once "usuario.php";

    $usuario1 = new Usuario("Maria", "maria@gmail.com", "m123");
    $usuario2 = new Usuario(email:"maria@gmail.com", senha:"m123");
    
    // echo "<pre>";
    // var_dump($usuario1);
    // echo "</pre>";
    
    echo "Hello World <br>";
    echo "<hr>";
    echo "Nome:{$usuario1->getNome()}<br>";
    echo "E-mail:{$usuario1->getEmail()}<br>";
    echo "Senha:{$usuario1->getSenha()}";
    echo "<hr>";

    $usuario1->setNome("Maria da Silva");

    echo "Nome:{$usuario1->getNome()}<br>";
?>