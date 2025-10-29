<?php 
    class Celular
    {
        public function __construct
        (
            private int $ddd = 0,
            private string $numero = "",
            private $pessoa = null // lado da parte
        )
        {}

        public function getDDD()
        {
            return $this->ddd;
        }

        public function getNumero()
        {
            return $this->numero;
        }
    }
?>