<?php
    class ProdutoController
    {
        public function listar() {
            //buscar os dados de produtos no bd
            //abriu conexao com bd
            $parametros = "mysql:host=localhost;dbname=exemplomvc;charset=utf8mb4";
            $conn = new PDO($parametros, "root", "");
            //buscar os dados
            $sql = "SELECT * FROM produtos";
            $stm = $conn->prepare($sql);
            $stm->execute();
            $conn = null;
            $resultado = $stm->fetchAll(PDO::FETCH_OBJ);

            // echo "<pre>";
            // var_dump($resultado);
            // echo "</pre>";
            //mostrar uma visão
            require_once "views/listaProdutos.php";
        }
    }
?>