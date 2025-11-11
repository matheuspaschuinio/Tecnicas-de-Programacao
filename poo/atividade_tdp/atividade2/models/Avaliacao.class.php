<?php 
    class Avaliacao
    {
        public function __construct
        (
            private float $nota = 0.0,
            private $avaliador = null,
            private $receita = null
        )
        {}

        public function getNota()
        {
            return $this->nota;
        }

        public function setNota($nota)
        {
            $this->nota = $nota;
        }

        public function getAvaliador()
        {
            return $this->avaliador;
        }

        public function setAvaliador($avaliador)
        {
            $this->avaliador = $avaliador;
        }

        public function getReceita()
        {
            return $this->receita;
        }

        public function setReceita($receita)
        {
            $this->receita = $receita;
        }
    }
?>