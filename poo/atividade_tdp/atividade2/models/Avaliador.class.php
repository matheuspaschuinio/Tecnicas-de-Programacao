<?php 
    class Avaliador extends Pessoa
    {
        private array $avaliacoes = array();

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

        public function setAvaliacao($avaliacao)
        {
            $this->avaliacoes[] = $avaliacao;
        }

        public function getAvaliacoes()
        {
            return $this->avaliacoes;
        }
    }
?>