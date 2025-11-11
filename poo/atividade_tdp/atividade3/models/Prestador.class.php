<?php 
    class Prestador extends Pessoa
    {
        private array $agendas = array();

        public function __construct
        (
            private string $especialidade = ""
        )
        {
            parent::__construct();
        }

        public function getEspecialidade()
        {
            return $this->especialidade;
        }

        public function setEspecialidade($especialidade)
        {
            $this->especialidade = $especialidade;
        }

        public function setAgenda($agenda)
        {
            $this->agendas[] = $agenda;
        }

        public function getAgendas()
        {
            return $this->agendas;
        }
    }
?>