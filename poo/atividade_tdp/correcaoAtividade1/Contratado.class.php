<?php 
    class Contratado extends Pessoa
    {
        public function __construct
        (
            private string $cnpj = "",
            private array $festas = array(),
            string $nome = "",
            int $ddd = 0,
            string $numero = ""
        )
        {
            parent:: __construct($nome, $ddd, $numero);
        }

        public function getCNPJ()
        {
            return $this->cnpj;
        }

        public function setCNPJ($cnpj)
        {
            $this->cnpj = $cnpj;
        }

        public function getFesta()
        {
            return $this->festas;
        }

        public function setFesta($festas)
        {
            $this->festas[] = $festas;
        }
    }
?>