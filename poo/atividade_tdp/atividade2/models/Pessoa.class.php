<?php 
    class Pessoa
    {
        private array $telefone = array();

        public function __construct
        (
            private string $nome = "",
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

        public function setTelefone(int $ddd, string $numero)
        {
            $this->telefone[] = new Telefone($ddd, $numero);
        }

        public function getTelefone()
        {
            return $this->telefone;
        }
    }
?>