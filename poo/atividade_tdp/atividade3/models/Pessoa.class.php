<?php 
    class Pessoa
    {
        public function __construct
        (
            private string $nome = "",
            private string $celular = ""
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

        public function getCelular()
        {
            return $this->celular;
        }

        public function setCelular($celular)
        {
            $this->celular = $celular;
        }
    }
?>