<?php 
    class Loja
    {
        private array $proprietarios = array();

        public function __construct
        (
            private int $lotes = 0,
            private string $numero = "",
            private $condominio = null,
            private $shopping = null
        )
        {}

        public function getLotes()
        {
            return $this->lotes;
        }

        public function setLotes($lotes)
        {
            $this->lotes = $lotes;
        }

        public function getNumero()
        {
            return $this->numero;
        }

        public function setNumero($numero)
        {
            $this->numero = $numero;
        }

        public function setProprietario(Proprietario $proprietario)
        {
            $this->proprietarios[] = $proprietario;
        }

        public function getProprietarios()
        {
            return $this->proprietarios;
        }

        public function setCondominio(Condominio $condominio)
        {
            $this->condominio = $condominio;
        }

        public function getCondominio()
        {
            return $this->condominio;
        }

        public function setShopping(Shopping $shopping)
        {
            $this->shopping = $shopping;
        }

        public function getShopping()
        {
            return $this->shopping;
        }
    }
?>