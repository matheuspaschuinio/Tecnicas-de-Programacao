<?php 
    class Agenda
    {
        private array $itens = array();

        public function __construct
        (
            private string $data = "",
            private $cliente = null,
            private $prestador = null
        )
        {}

        public function getData()
        {
            return $this->data;
        }

        public function setData($data)
        {
            $this->data = $data;
        }

        public function getCliente()
        {
            return $this->cliente;
        }

        public function setCliente($cliente)
        {
            $this->cliente = $cliente;
        }

        public function getPrestador()
        {
            return $this->prestador;
        }

        public function setPrestador($prestador)
        {
            $this->prestador = $prestador;
        }

        public function setItem($item)
        {
            $this->itens[] = $item;
        }

        public function getItens()
        {
            return $this->itens;
        }
    }
?>