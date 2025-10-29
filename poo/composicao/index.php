<?php 
    require_once "Models/Celular.class.php";
    require_once "Models/Pessoa.class.php";

    // instanciando objeto Todo(pessoa)
    $pessoa1 = new Pessoa("Matheus", 14, "999999999");
    $pessoa1->setCelular(14, "998888888");

    // instanciando objeto Parte(celular)
    $pessoa2 = new Pessoa("Paulo");
    $celular1 = new Celular(14, "997777777", $pessoa2);

    echo "<pre>";
    var_dump($celular1);
    echo "</pre>";
?>