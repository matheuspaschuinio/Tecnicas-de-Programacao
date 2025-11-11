<?php 
    class Chef extends Pessoa
    {
        public function __construct
        (
            private string $especialidade = "",
            string $nome = "",
            int $ddd = 0,
            string $numero = "",
            private array $receitas = array()
        )
        {
            parent:: __construct($nome, $ddd, $numero);
        }

        public function getEspecialidade()
        {
            return $this->especialidade;
        }

        public function setEspecialidade($especialidade)
        {
            $this->especialidade = $especialidade;
        }

        public function getReceita()
        {
            return $this->receitas;
        }

        public function setReceita($receitas)
        {
            $this->receitas[] = $receitas;
        }
    }
?>