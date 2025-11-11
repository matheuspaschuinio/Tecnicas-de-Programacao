<?php 
    class Itens
    {
        public function __construct
        (
            private string $horario = "",
            private string $status = "",
            private $servico = null,
            private $agenda = null,
            private Prestador $prestador = new Prestador()
        )
        {}

        public function getHorario()
        {
            return $this->horario;
        }

        public function getStatus()
        {
            return $this->status;
        }

        public function setHorario($horario)
        {
            $this->horario = $horario;
        }

        public function setStatus($status)
        {
            $this->status = $status;
        }

        public function getServico()
        {
            return $this->servico;
        }

        public function setServico($servico)
        {
            $this->servico = $servico;
        }

        public function getAgenda()
        {
            return $this->agenda;
        }

        public function setAgenda($agenda)
        {
            $this->agenda = $agenda;
        }

        public function getPrestador()
        {
            return $this->prestador;
        }

        public function setPrestador($prestador)
        {
            $this->prestador = $prestador;
        }
    }
?>