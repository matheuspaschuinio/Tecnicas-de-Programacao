<?php 
    class Proprietario extends Pessoa
    {
        private array $lojas = array();

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

        public function setLoja(Loja $loja){
            $this->lojas[] = $loja;
        }

        public function getLojas()
        {
            return $this->lojas;
        }
    }
?>