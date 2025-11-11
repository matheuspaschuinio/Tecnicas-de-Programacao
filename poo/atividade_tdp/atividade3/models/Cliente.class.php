<?php 
    class Cliente extends Pessoa
    {
        private array $agendas = array();

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