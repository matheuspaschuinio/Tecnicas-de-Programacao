<?php
    class Pessoa
    {
        public function __construct
        (
            protected string $nome = "",
            int $ddd = 0,
            string $numero = ""
        )
        {
            $this->telefone[] = new Telefone($ddd, $numero);
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getTelefone()
        {
            return $this->telefone;
        }

        public function setTelefone($ddd, $numero)
        {
            $this->telefone[] = new Telefone($ddd, $numero);
        }
    }
?>