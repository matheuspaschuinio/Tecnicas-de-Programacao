<?php 
    require_once "Pessoa.class.php";
    require_once "Telefone.class.php";
    require_once "Avaliador.class.php";
    require_once "Chef.class.php";
    require_once "Avaliacao.class.php";
    require_once "Receita.class.php";

    $receita1 = new Receita('Macarrão com Calabresa', 'Massa de macarrão, molho de tomate, calabresa', null);

    $chef = new Chef('Comida Italiana', 'Frantchesco', 14, '997264578', [$receita1]);

    $avaliador = new Avaliador('667.458.435-21', 'Matheus', 14, '998345678');

    $avaliacao = new Avaliacao(8.75, $avaliador, $receita1);

    $receita1->setChef($chef);

    // mostrando os dados

    echo "<h2>Avaliação</h2>";
    echo "Nota: {$avaliacao->getNota()} <br>
    Avaliador: {$avaliacao->getAvaliador()->getNome()} <br>
    Receita: {$avaliacao->getReceita()->getNome()} <br>
    Chef: {$avaliacao->getReceita()->getChef()->getNome()}";

    echo "<h3>Dados do Chef</h3>";
    foreach($chef->getTelefone() as $telefone)
    {
        echo "Telefone: ({$telefone->getDDD()}) {$telefone->getNumero()}";
    }

?>