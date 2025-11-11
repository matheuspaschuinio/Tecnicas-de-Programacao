<?php 
    class Avaliador extends Pessoa
    {
        public function __construct
        (
            private string $cpf = "",
            string $nome = "",
            int $ddd = 0,
            string $numero = ""
        )
        {
            parent:: __construct($nome, $ddd, $numero);
        }     

        public function getCPF()
        {
            return $this->cpf;
        }

        public function setCPF($cpf)
        {
            $this->cpf = $cpf;
        }
    }
?>