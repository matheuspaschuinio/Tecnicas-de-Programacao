<?php 
    class Cliente extends Pessoa
    {
        public function __construct
        (
            private string $cpf = "",
            string $nome = "",
            string $celular = ""
        )
        {
            parent:: __construct($nome, $celular);
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