<?php 
    class Receita
    {
        public function __construct
        (
            private string $nome = "",
            private string $ingredientes = "",
            private $chef = null
        )
        {}

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getIngredientes()
        {
            return $this->ingredientes;
        }

        public function setIngredientes($ingredientes)
        {
            $this->ingredientes = $ingredientes;
        }

        public function getChef()
        {
            return $this->chef;
        }

        public function setChef($chef)
        {
            $this->chef = $chef;
        }
    }
?>