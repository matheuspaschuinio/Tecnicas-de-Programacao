<?php 
    class Chef extends Pessoa
    {
        private array $receitas = array();

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

        public function setReceita($receita)
        {
            $this->receitas[] = $receita;
        }

        public function getReceitas()
        {
            return $this->receitas;
        }
    }
?>