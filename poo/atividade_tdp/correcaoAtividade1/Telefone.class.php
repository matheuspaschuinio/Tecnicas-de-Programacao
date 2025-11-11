<?php 
    class Telefone
    {
        public function __construct
        (
            private int $ddd = 0,
            private string $numero = "",
            private $pessoa = null
        )
        {}

        public function getDDD()
        {
            return $this->ddd;
        }

        public function setDDD($ddd)
        {
            $this->ddd = $ddd;
        }

        public function getNumero()
        {
            return $this->numero;
        }

        public function setNumero($numero)
        {
            $this->numero = $numero;
        }

        public function getPessoa()
        {
            return $this->pessoa;
        }

        public function setPessoa($pessoa)
        {
            $this->pessoa = $pessoa;
        }
    }
?>