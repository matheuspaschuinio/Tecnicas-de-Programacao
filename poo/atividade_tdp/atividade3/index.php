<?php 
    require_once "models/Pessoa.class.php";
    require_once "models/Cliente.class.php";
    require_once "models/Prestador.class.php";
    require_once "models/Servico.class.php";
    require_once "models/Itens.class.php";
    require_once "models/Agenda.class.php";

    $cliente = new Cliente("111.222.333-44");
    $cliente->setNome("Matheus");
    $cliente->setCelular("(14) 99111-2222");

    $prestador = new Prestador("Barbeiro");
    $prestador->setNome("João");
    $prestador->setCelular("(14) 98888-7777");

    $servico1 = new Servico("Corte de Cabelo", 30.00);
    $servico2 = new Servico("Barba", 20.00);

    $item1 = new Itens("10:30", "Ativo", $servico1);
    $item2 = new Itens("11:00", "Ativo", $servico2);

    $agenda = new Agenda("10/11/2025", $cliente, $prestador);
    $agenda->setItem($item1);
    $agenda->setItem($item2);

    echo "<h2>Dados da Agenda</h2>";
    echo "Data: {$agenda->getData()}<br>";

    echo "<h3>Cliente</h3>";
    echo "Nome: {$agenda->getCliente()->getNome()}<br>";
    echo "CPF: {$agenda->getCliente()->getCPF()}<br>";
    echo "Celular: {$agenda->getCliente()->getCelular()}<br>";

    echo "<h3>Prestador</h3>";
    echo "Nome: {$agenda->getPrestador()->getNome()}<br>";
    echo "Especialidade: {$agenda->getPrestador()->getEspecialidade()}<br>";
    echo "Celular: {$agenda->getPrestador()->getCelular()}<br>";

    echo "<h3>Itens Agendados</h3>";
    foreach($agenda->getItens() as $item)
    {
        echo "<hr>";
        echo "Horário: {$item->getHorario()}<br>";
        echo "Status: {$item->getStatus()}<br>";
        echo "Serviço: {$item->getServico()->getDescritivo()}<br>";
        echo "Valor: R$ " . number_format($item->getServico()->getPreco(), 2, ",", ".") . "<br>";
    }
?>