<?php 
    class Condominio
    {
        private array $lojas = array();

        public function __construct
        (
            private string $data_geracao = "",
            private float $valor = 0.0,
            private string $data_pagamento = ""
        )
        {}

        public function getDataGeracao()
        {
            return $this->data_geracao;
        }

        public function setDataGeracao($data_geracao)
        {
            $this->data_geracao = $data_geracao;
        }

        public function getValor()
        {
            return $this->valor;
        }

        public function setValor($valor)
        {
            $this->valor = $valor;
        }

        public function getDataPagamento()
        {
            return $this->data_pagamento;
        }

        public function setDataPagamento($data_pagamento)
        {
            $this->data_pagamento = $data_pagamento;
        }

        public function setLoja(Loja $loja)
        {
            $this->lojas[] = $loja;
        }

        public function getLojas()
        {
            return $this->lojas;
        }
    }
?>