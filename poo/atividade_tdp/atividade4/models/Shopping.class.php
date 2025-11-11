<?php 
    class Shopping extends Pessoa
    {
        private array $lojas = array();

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

        public function setLojas($loja)
        {
            $this->lojas[] = $loja;
        }

        public function getLojas()
        {
            return $this->lojas;
        }
    }
?>