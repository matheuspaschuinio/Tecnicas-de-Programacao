<?php
    class usuarioDAO extends Conexao
    {
        public function __construct()
        {
            parent:: __construct();
        }

        public function inserir($usuario) {
            $sql = "INSERT INTO usuarios (nome, email, senha, celular) VALUES (?, ?, ?, ?)";

            try
            {
                $stm = $this->db->prepare($sql);

                $stm->bindValue(1, $usuario->getNome());
                $stm->bindValue(2, $usuario->getEmail());
                $stm->bindValue(3, $usuario->getSenha());
                $stm->bindValue(4, $usuario->getCelular());
                $stm->execute();
                $this->db = null;
                return "Usuário inserido com sucesso!";
            }
            catch(PDOException $e)
            {
                $this->db = null;
                return "Problema com o cadastro do cliente";
            }
        }

        public function login($usuario) {
            $sql = "SELECT id, email, senha, nome FROM usuarios WHERE email = ?";
            try
            {
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1, $usuario->getEmail());
                $stm->execute();
                $this->db = null;

                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch(PDOException $e)
            {
                $this->db = null;
                return "Problema ao validar o email";
            }
        }

        public function verificar_email($usuario) {
            $sql = "SELECT email, nome, id FROM usuarios WHERE email = ?";
            try
            {
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1, $usuario->getEmail());
                $stm->execute();
                $this->db = null;

                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch(PDOException $e)
            {
                $this->db = null;
                return "Problema ao validar o email";
            }
        }

        public function alterar_senha($usuario) {
            $sql = "UPDATE usuarios SET senha = ? WHERE id = ?";
            try
            {
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1, $usuario->getSenha());
                $stm->bindValue(2, $usuario->getId_usuario());
                $stm->execute();
                $this->db = null;
                return "Senha alterada com sucesso!";
            }
            catch(PDOException $e)
            {
                $this->db = null;
                return "Problema na alteração da senha!";
            }
        }
    } //fim da classe
?>