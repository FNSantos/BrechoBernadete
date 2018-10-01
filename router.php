<?php

    switch ($_POST["classe"]) {

        case "funcionario":

            require_once("Controller/Funcionario.php");

            $funcionario = new FuncionarioControl();

            switch ($_POST["acao"]) {

                case "inserir":

                    $funcionario->inserir();

                    break;

                case "autenticar":

                    $funcionario->autenticar();

                    break;

                case "obterAutenticacao":

                    $funcionario->obterAutenticacao();

                    break;

                case "obterTodos":

                    $funcionario->obterTodos();

                    break;

                case "obterUm":

                    $funcionario->obterUm();

                    break;

                case "atualizar":

                    $funcionario->atualizar();

                    break;

                case "remover":

                    $funcionario->remover();

                    break;

                case "obterNiveis":

                    $funcionario->obterNiveis();

                    break;

                case "matarSessao":

                    session_destroy();

                    break;

            }

            break;

            case "Nivel":

                // echo("Nível");

                require_once("Controller/Nivel.php");

                $nivel = new NivelControl();

                switch ($_POST["acao"]) {

                    case "inserir":

                        $nivel->inserir();

                        break;

                    case "obterTodos":

                        $nivel->obterTodos();

                        break;

                    case "obterUm":

                        $nivel->obterUm();

                        break;

                    case "atualizar":

                        $nivel->atualizar();

                        break;

                    case "atualizarSituacao":

                        $nivel->atualizarSituacao();

                        break;

                    case "remover":

                        $nivel->remover();

                        break;

                }

                break;

                case "Estilo":

                    // echo("Nível");

                    require_once("Controller/Estilo.php");

                    $estilo = new EstiloControl();

                    switch ($_POST["acao"]) {

                        case "inserir":

                            $estilo->inserir();

                            break;

                        case "obterTodos":

                            $estilo->obterTodos();

                            break;

                        case "obterUm":

                            $estilo->obterUm();

                            break;

                        case "atualizar":

                            $estilo->atualizar();

                            break;

                        case "atualizarSituacao":

                            $estilo->atualizarSituacao();

                            break;

                        case "remover":

                            $estilo->remover();

                            break;

                    }

                    break;

                    case "Categoria Post":

                        // echo("Nível");

                        require_once("Controller/CategoriaPost.php");

                        $categoriaPost = new CategoriaPostControl();

                        switch ($_POST["acao"]) {

                            case "inserir":

                                $categoriaPost->inserir();

                                break;

                            case "obterTodos":

                                $categoriaPost->obterTodos();

                                break;

                            case "obterUm":

                                $categoriaPost->obterUm();

                                break;

                            case "atualizar":

                                $categoriaPost->atualizar();

                                break;

                            case "atualizarSituacao":

                                $categoriaPost->atualizarSituacao();

                                break;

                            case "remover":

                                $categoriaPost->remover();

                                break;

                        }

                        break;

    }

 ?>
