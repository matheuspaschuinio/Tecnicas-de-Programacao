<?php
    require_once "Models/usuarios.class.php"
    class UsuarioController
    {
        public function login() {
            //require views formulário
            if($_POST)
            {
                //verificar os dados
                //verificar no banco de dados se existe esse usuário
            }
        }

        public function inserir() {

            $msg = array("", "", "", "");
            $erro = false;
            if($_POST)
            {
                if(empty($_POST["nome"]))
                {
                    $msg[0] = "Preencha o campo nome!"
                    $erro = true;
                }

                if(empty($_POST["email"]))
                {
                    $msg[1] = "Preencha o campo email!"
                    $erro = true;
                } else {
                    //verificar se não tem um usuário com esse email cadastrado
                    $usuario = new Usuarios(email: $_POST["email"]);
                }

                if(empty($_POST["senha"]))
                {
                    $msg[2] = "Preencha o campo senha!"
                    $erro = true;
                }

                if(empty($_POST["celular"]))
                {
                    $msg[3] = "Preencha o campo celular!"
                    $erro = true;
                }

                if(!$erro)
                {
                    $usuario = new Usuarios(0, $_POST["nome"], $_POST["email"], $_POST["senha"], $_POST["celular"]);
                    //cadastrar no bd
                }
            }
            require_once "views/form_usuario.php";
        }
    }
?>