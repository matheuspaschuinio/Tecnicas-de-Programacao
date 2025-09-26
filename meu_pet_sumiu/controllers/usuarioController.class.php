<?php
    require_once "models/conexao.class.php";
    require_once "models/usuarioDAO.class.php";
    require_once "models/usuarios.class.php";
    require_once "config.php";
    class UsuarioController
    {
        public function login() {
            
            $msg = array("", "", "");
            $erro = false;
            if($_POST)
            {
                //verificar os dados
                if(empty($_POST["email"]))
                {
                    $msg[0] = "Preencha o email!";
                    $erro = true;
                }
                if(empty($_POST["senha"]))
                {
                    $msg[1] = "Preencha a senha!";
                    $erro = true;
                }
                //verificar no banco de dados se existe esse usuário
                if(!$erro)
                {
                    $usuario = new Usuarios(email:$_POST["email"]);
                    $usuarioDAO = new usuarioDAO();
                    $retorno = $usuarioDAO->login($usuario);
                    // verificar se a senha corresponde
                    if(is_array($retorno))
                    {
                        if(count($retorno) > 0)
                        {
                            //verificar se a senha corresponde
                            if(password_verify($_POST['senha'],
                            $retorno[0]->senha))
                            {
                                //logado
                                if(!isset($_SESSION))
                                {
                                    session_start();
                                }
                                $_SESSION["nome"] = $retorno[0]->nome;
                                $_SESSION["id"] = $retorno[0]->id;
                                $_SESSION["email"] = $retorno[0]->email;
                                header("location:index.php");
                            }
                            else
                            {
                                $msg[2] = "Verifique os dados digitados";
                            }
                        }
                        else
                        {
                            $msg[2] = "Verifique os dados digitados";
                        }
                    }
                }
            }
            //require views formulário
            require_once "views/login.php";
        }

        public function inserir() {

            $msg = array("", "", "", "");
            $erro = false;
            if($_POST)
            {
                if(empty($_POST["nome"]))
                {
                    $msg[0] = "Preencha o campo nome!";
                    $erro = true;
                }

                if(empty($_POST["email"]))
                {
                    $msg[1] = "Preencha o campo email!";
                    $erro = true;
                } else {
                    //verificar se não tem um usuário com esse email cadastrado
                    $usuario = new Usuarios(email: $_POST["email"]);
                    $usuarioDAO = new usuarioDAO();
                    $retorno = $usuarioDAO->verificar_email($usuario);
                    if(is_array($retorno))
                    {
                        if(count($retorno) > 0)
                        {
                            $msg[1] = "Email já está cadastrado!";
                            $erro = true;
                        }
                    }
                }

                if(empty($_POST["senha"]))
                {
                    $msg[2] = "Preencha o campo senha!";
                    $erro = true;
                }

                if(empty($_POST["celular"]))
                {
                    $msg[3] = "Preencha o campo celular!";
                    $erro = true;
                }

                if(!$erro)
                {
                    $usuario = new Usuarios(0, $_POST["nome"], $_POST["email"], password_hash($_POST["senha"], PASSWORD_DEFAULT), $_POST["celular"]);
                    //cadastrar no bd
                    $usuarioDAO = new usuarioDAO();
                    $retorno = $usuarioDAO->inserir($usuario);
                }
            }
            require_once "views/form_usuario.php";
        } // fim inserir

        public function logout() {
            if(!isset($_SESSION))
            {
                session_start();
            }
            $_SESSION = array();
            session_destroy();
            header("location:index.php");
        } // fim do logout

        public function esqueci_senha() {
            $msg = "";
            $link = "";
            $msg_email = "Será enviado um email para recuperar a senha!";
            if($_POST)
            {
                if(empty($_POST["email"])) 
                {
                    $msg = "Preencha o e-mail";
                }
                else
                {
                    //verificar se é um email de algum usuário do sistema
                    $usuario = new Usuarios(email:$_POST["email"]);
                    $usuarioDAO = new usuarioDAO();
                    $retorno = $usuarioDAO->verificar_email($usuario);
                    if(is_array($retorno))
                    {
                        if(count($retorno) > 0)
                        {
                            //enviar email
                            $assunto = "Recuperação de senha - Meu Pet Sumiu";
                            $link = "http://localhost/meu_pet_sumiu/index.php?controle=usuarioController&metodo=trocar_senha&id=" . base64_encode($retorno[0]->id);
                            $nomeDestino = $retorno[0]->nome;
                            $destino = $retorno[0]->email;
                            $remetente = "seu_email";
                            $nomeRemetente = "meu pet sumiu";
                            $mensagem = "<h2>Senhor(a) " . $nomeDestino . "</h2> <br> <p>Recebemos a solicitação de recuperação de senha.
                            Caso não tenha sido requerida por você desconsidere esta mensagem. Caso contrário click no link abaixo para redefinir sua senha.</p> 
                            <a href = '" . $link . "' >Clique Aqui</a>
                            <br><br>
                            <p>Atenciosamente <br>" . $nomeRemetente . "</p>";

                            /*$ret = sendMail($assunto, $mensagem, $remetente, $nomeRemetente, $destino, $nomeDestino);
                            if($ret)
                            {
                                $msg_email = "Foi enviado um email de recuperação de senha. Verifique!";
                            }
                            else 
                            {
                                $msg_email = "Problema no envio do email de recuperação de senha. Tente mais tarde!!!";
                            }*/
                        }
                        else 
                        {
                            $msg = "Verifique o e-mail informado";
                        }
                    }
                    else 
                    {
                        $msg = "Verifique o email informado";
                    }
                }
            }
            require_once "views/form_email.php";
        }

        public function trocar_senha() {
            $msg = array("", "");
            $erro = false;
            if(isset($_GET["id"]))
            {
                $id = base64_decode($_GET["id"]);
                if($_POST)
                {
                    if(empty($_POST["senha"]))
                    {
                        $msg[0] = "Senha obrigatória";
                        $erro = true;
                    }
                    if(empty($_POST["confirmar_senha"]))
                    {
                        $msg[1] = "Confirme a senha";
                        $erro = true;
                    }
                    
                    if(!$erro && $_POST["senha"] !== $_POST["confirmar_senha"])
                    {
                         $msg[0] = "Senhas não são iguais";
                         $erro = true; 
                    }

                    if(!$erro)
                    {
                        // alterar senha no BD
                        $usuario = new Usuarios(id_usuario:$_POST["id_usuario"], senha: password_hash($_POST["senha"], PASSWORD_DEFAULT));
                        $usuarioDAO = new usuarioDAO();
                        $retorno = $usuarioDAO->alterar_senha($usuario);
                        header("location:index.php?controle=usuarioController&metodo=login");
                    }
                    
                }
                require_once "views/trocar_senha.php";
            }
        }
    } // fim da classe
?>