<?php 
    class Agenda // Unilateral, sempre quem está na ponta da seta vem para a classe oposta, no caso, cliente vem para agenda
    {
        public function __construct
        (
            private string $data = "",
            private $cliente = null,
            string $horario = "",
            string $status = "",
            $servico = null, 
            $agenda = null,
            $prestador = null
        )
        {
            $this->itens[] = new Itens($horario, $status, $servico, $agenda, $prestador);
        }

        public function getData()
        {
            return $this->data;
        }

        public function setData($data)
        {
            $this->data = $data;
        }

        public function getItens()
        {
            return $this->itens;
        }

        public function setItens($horario, $status, $servico, $agenda, $prestador)
        {
            $this->itens[] = new Itens($horario, $status, $servico, $agenda, $prestador);
        }

        public function getCliente()
        {
            return $this->cliente;
        }

        public function setCliente($cliente)
        {
            $this->cliente = $cliente;
        }
    }
?>