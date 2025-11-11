<?php 
    abstract class Pessoa // classe abstrata, não conseguem instanciar objetos a partir dela
    {
        public function __construct
        (
            protected string $nome = "",
            protected string $celular = ""
        )
        {}

        public function getNome()
        {
            return $this->nome;
        }

        public function getCelular()
        {
            return $this->celular;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function setCelular($celular)
        {
            $this->celular = $celular;
        }
        
    }
?>