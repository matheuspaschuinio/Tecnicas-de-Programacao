<?php 
    class Cliente extends Pessoa
    {
        public function __construct
        (
            private string $cpf = ""
        )
        {
            parent::__construct();
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