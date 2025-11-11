<?php 
    class Contratado extends Pessoa
    {
        public function __construct
        (
            private string $cnpj = ""
        )
        {
            parent::__construct();
        }

        public function getCNPJ()
        {
            return $this->cnpj;
        }

        public function setCNPJ($cnpj)
        {
            $this->cnpj = $cnpj;
        }
    }
?>