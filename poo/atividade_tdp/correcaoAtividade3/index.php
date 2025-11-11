<?php 
    require_once "Pessoa.class.php";
    require_once "Cliente.class.php";
    require_once "Prestador.class.php";
    require_once "Agenda.class.php";
    require_once "Itens.class.php";
    require_once "Servico.class.php";

    $servico = new Servico("Pintura", 100.00);
    $servico2 = new Servico("Encanamento", 200.00);

    $prestador = new Prestador(especialidade:"pintura predial", nome:"João da Silva", celular:"(14) 998999988");
    $prestador2 = new Prestador(especialidade:"encanamento", nome:"Pedro da Silva", celular:"(14) 997099988");

    $cliente = new Cliente("088.765.432-21", "Maria da Silva", "(14) 998455667");

    $agenda = new Agenda("05/11/2025", $cliente, "19:30", "Ativo", $servico, null, $prestador);

    $agenda->setItens("10:00", "Ativo", $servico2, null, $prestador2);
    
    // mostrando os dados da agenda

     echo "<h2>Agenda</h2>";
     echo "Data: {$agenda->getData()} <br>";
     echo "<h3>Cliente</h3>";
     echo "Nome: {$agenda->getCliente()->getNome()}
     - Celular: {$agenda->getCliente()->getCelular()} 
     - CPF: {$agenda->getCliente()->getCPF()} <br>";
     echo "<h3>Itens da Agenda</h3>";
     foreach($agenda->getItens() as $itens)
    {
         echo "<br>Horário: {$itens->getHorario()} - {$itens->getStatus()}<br>";
         echo "Serviço: {$itens->getServico()->getDescritivo()} - {$itens->getServico()->getPreco()}";
         echo "Prestador {$itens->getPrestador()->getNome()} - {$itens->getPrestador()->getCelular()} - {$itens->getPrestador()->getEspecialidade()}";
     }

    

?>