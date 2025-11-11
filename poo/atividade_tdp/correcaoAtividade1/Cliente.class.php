<?php 
    class Cliente extends Pessoa
    {
        public function __construct
        (
            private string $cpf = "",
            string $nome = "",
            int $ddd = 0,
            string $celular = ""
        )
        {
            parent:: __construct($nome, $ddd, $celular);
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