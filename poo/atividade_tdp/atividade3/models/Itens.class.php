<?php 
    class Itens
    {
        public function __construct
        (
            private string $horario = "",
            private string $status = "",
            private $servico = null
        )
        {}

        public function getHorario()
        {
            return $this->horario;
        }

        public function setHorario($horario)
        {
            $this->horario = $horario;
        }

        public function getStatus()
        {
            return $this->status;
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
    }
?>