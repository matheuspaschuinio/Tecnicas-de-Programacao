<?php 
    require_once "models/Pessoa.class.php";
    require_once "models/Proprietario.class.php";
    require_once "models/Shopping.class.php";
    require_once "models/Condominio.class.php";
    require_once "models/Loja.class.php";

    $prop1 = new Proprietario("111.111.111-11");
    $prop1->setNome("Matheus");

    $prop2 = new Proprietario("222.222.222-22");
    $prop2->setNome("João");

    $shopping = new Shopping("33.333.333/0001-33");
    $shopping->setNome("Jahu Shopping");

    $condominio = new Condominio("01/11/2025", 1500.00, "");
    $condominio->setDataPagamento("10/11/2025");

    $lojaA = new Loja(2, "10-A", $condominio, $shopping);
    $lojaB = new Loja(1, "11-B", $condominio, $shopping);

    $condominio->setLoja($lojaA);
    $condominio->setLoja($lojaB);

    $shopping->setLojas($lojaA);
    $shopping->setLojas($lojaB);

    $lojaA->setProprietario($prop1);
    $lojaA->setProprietario($prop2);
    $prop1->setLoja($lojaA);
    $prop2->setLoja($lojaA);

    $lojaB->setProprietario($prop1);
    $prop1->setLoja($lojaB);

    echo "<h2>Dados do Condomínio</h2>";
    echo "Geração: {$condominio->getDataGeracao()}<br>";
    echo "Pagamento: {$condominio->getDataPagamento()}<br>";
    echo "Valor: R$ " . number_format($condominio->getValor(), 2, ",", ".") . "<br>";

    echo "<h3>Lojas do Condomínio</h3>";
    foreach($condominio->getLojas() as $loja)
    {
        echo "<hr>";
        echo "<b>Loja N°: {$loja->getNumero()}</b><br>";
        echo "Lotes: {$loja->getLotes()}<br>";
        echo "Shopping: {$loja->getShopping()->getNome()}<br>";

        echo "<h4>Proprietários da Loja</h4>";
        foreach($loja->getProprietarios() as $prop)
        {
            echo "Nome: {$prop->getNome()} ({$prop->getCPF()})<br>";
        }
    }
?>