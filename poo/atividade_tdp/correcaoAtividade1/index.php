<?php 
    require_once "Pessoa.class.php";
    require_once "Cliente.class.php";
    require_once "Contratado.class.php";
    require_once "Decoracao.class.php";
    require_once "Festa.class.php";
    require_once "Telefone.class.php";

    $cliente = new Cliente('557333444-56', 'Lipinho', 14, '999299945');

    $contratado = new Contratado('667456989-47', [], 'Sonia', 14, '997244378');

    $decoracao = new Decoracao("Balões Santos FC");

    $festa =  new Festa('11/10/2025', '21/05/2026', 100.00, $cliente, $contratado, $decoracao);

    // mostrando os dados da festa

    echo "<h2>Festa</h2>";
    echo "Data da festa: {$festa->getDataFesta()} <br>";
    echo "<h3>Cliente</h3>";
    echo "Nome: {$festa->getCliente()->getNome()} 
    - Celular: {$festa->getCliente()->getTelefone()[0]->getNumero()} 
    - CPF: {$festa->getCliente()->getCPF()}";
    echo "<h3>Contratado</h3>";
    echo "Nome: {$festa->getContratado()->getNome()} 
    - CNPJ: {$festa->getContratado()->getCNPJ()}";
    echo "<h3>Decoração</h3>";
    echo "Descritivo: {$festa->getDecoracao()->getDescritivo()} 
    - Valor Total: {$festa->getValor()}";
?>