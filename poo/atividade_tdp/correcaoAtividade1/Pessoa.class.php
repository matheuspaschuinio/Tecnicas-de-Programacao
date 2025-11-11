<?php 
    class Pessoa
    {
        private array $telefones = array();

        public function __construct
        (
            protected string $nome = "",
            $ddd = null,
            $numero = null
        )
        {
            $this->telefones[] = new Telefone($ddd, $numero);
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
            return $this->telefones;
        }

        public function setTelefone($ddd, $numero)
        {
            $this->telefones[] = new Telefone($ddd, $numero);
        }
    }
?>