<?php 
    require_once "models/Telefone.class.php";
    require_once "models/Pessoa.class.php";
    require_once "models/Chef.class.php";
    require_once "models/Avaliador.class.php";
    require_once "models/Receita.class.php";
    require_once "models/Avaliacao.class.php";

    $chef = new Chef("Culinária Italiana");
    $chef->setNome("Chef Jacquin");
    $chef->setTelefone(11, "98888-7777");

    $avaliador = new Avaliador("111.222.333-44");
    $avaliador->setNome("Matheus");
    $avaliador->setTelefone(14, "99111-2222");

    $receita = new Receita(
        "Spaghetti Carbonara",
        "Spaghetti, Ovos, Guanciale, Queijo Pecorino, Pimenta do Reino",
        $chef
    );
    
    $chef->setReceita($receita); 

    $avaliacao = new Avaliacao(
        9.8,
        $avaliador,
        $receita
    );

    $avaliador->setAvaliacao($avaliacao);
    $receita->setAvaliacao($avaliacao);

    echo "<h2>Dados da Avaliação</h2>";
    echo "Nota: " . number_format($avaliacao->getNota(), 1, ",", ".") . "<br>";

    echo "<h3>Avaliador</h3>";
    echo "Nome: {$avaliacao->getAvaliador()->getNome()}<br>";
    echo "CPF: {$avaliacao->getAvaliador()->getCPF()}<br>";

    foreach($avaliacao->getAvaliador()->getTelefone() as $dado)
    {
        if ($dado->getDDD() != 0) {
            echo "Telefone: ({$dado->getDDD()}) {$dado->getNumero()}<br>";
        }
    }

    echo "<h3>Receita Avaliada</h3>";
    echo "Nome: {$avaliacao->getReceita()->getNome()}<br>";
    echo "Ingredientes: {$avaliacao->getReceita()->getIngredientes()}<br>";

    echo "<h4>Chef da Receita</h4>";
    echo "Nome: {$avaliacao->getReceita()->getChef()->getNome()}<br>";
    echo "Especialidade: {$avaliacao->getReceita()->getChef()->getEspecialidade()}<br>";

    foreach($avaliacao->getReceita()->getChef()->getTelefone() as $dado)
    {
        if ($dado->getDDD() != 0) {
            echo "Telefone: ({$dado->getDDD()}) {$dado->getNumero()}<br>";
        }
    }
?>