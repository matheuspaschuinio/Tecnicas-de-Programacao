<?php 
    require_once "models/Telefone.class.php";
    require_once "models/Pessoa.class.php";
    require_once "models/Cliente.class.php";
    require_once "models/Contratado.class.php";
    require_once "models/Decoracao.class.php";
    require_once "models/Festa.class.php";

    $cliente = new Cliente("111.222.333-44");
    $cliente->setNome("Matheus");
    $cliente->setTelefone(14, "99111-2222");

    $contratado = new Contratado("55.444.333/0001-11");
    $contratado->setNome("Buffet");
    $contratado->setTelefone(14, "3622-5555");
    
    $festa = new Festa(
        "01/11/2025",
        "20/12/2025",
        12500.00,
        $cliente,
        $contratado,
        "Tema 'Santos FC'"
    );
    
    echo "<h2>Dados da Festa</h2>";
    echo "Data do Contrato: {$festa->getDataContrato()}<br>";
    echo "Data da Festa: {$festa->getDataFesta()}<br>";
    echo "Valor: R$ " . number_format($festa->getValor(), 2, ",", ".") . "<br>";

    echo "<h3>Cliente</h3>";
    echo "Nome: {$festa->getCliente()->getNome()}<br>";
    echo "CPF: {$festa->getCliente()->getCPF()}<br>";
    
    foreach($festa->getCliente()->getTelefone() as $dado)
    {
        if ($dado->getDDD() != 0) {
            echo "Telefone: ({$dado->getDDD()}) {$dado->getNumero()}<br>";
        }
    }

    echo "<h3>Contratado</h3>";
    echo "Nome: {$festa->getContratado()->getNome()}<br>";
    echo "CNPJ: {$festa->getContratado()->getCNPJ()}<br>";

    foreach($festa->getContratado()->getTelefone() as $dado)
    {
        if ($dado->getDDD() != 0) {
            echo "Telefone: ({$dado->getDDD()}) {$dado->getNumero()}<br>";
        }
    }

    echo "<h3>Decoração</h3>";
    foreach($festa->getDecoracoes() as $dado)
    {
        echo "Descritivo: {$dado->getDescritivo()}<br>";
    }
?>