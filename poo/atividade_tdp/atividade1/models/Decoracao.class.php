<?php 
    class Decoracao
    {
        private array $festas = array();

        public function __construct
        (
            private string $descritivo = "",
        )
        {}

        public function getDescritivo()
        {
            return $this->descritivo;
        }

        public function setDescritivo($descritivo)
        {
            $this->descritivo = $descritivo;
        }
        public function getFesta()
        {
            return $this->festas;
        }
    }
?>