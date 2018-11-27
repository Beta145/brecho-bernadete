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

                           case "Categoria":

                    // echo("Nível");

                    require_once("Controller/Categoria.php");

                    $categoria = new CategoriaControl();

                    switch ($_POST["acao"]) {

                        case "inserir":

                           $categoria->inserir();

                            break;

                        case "obterTodos":

                           $categoria->obterTodos();

                            break;

                        case "obterUm":

                            $categoria->obterUm();

                            break;

                        case "atualizar":

                            $categoria->atualizar();

                            break;

                        case "atualizarSituacao":

                           $categoria->atualizarSituacao();

                            break;

                        case "remover":

                            $categoria->remover();

                            break;

                        case "obterEstilos":

                            $categoria->obterEstilos();

                            break;



                    }

                    break;




                 case "Subcategoria":

                    // echo("Nível");

                    require_once("Controller/Subcategoria.php");

                    $subcategoria = new SubcategoriaControl();

                    switch ($_POST["acao"]) {

                        case "inserir":

                           $subcategoria->inserir();

                            break;

                        case "obterTodos":

                           $subcategoria->obterTodos();

                            break;

                        case "obterUm":

                            $subcategoria->obterUm();

                            break;

                        case "atualizar":

                            $subcategoria->atualizar();

                            break;

                        case "atualizarSituacao":

                           $subcategoria->atualizarSituacao();

                            break;

                        case "remover":

                            $subcategoria->remover();

                            break;

                        case "obterCategorias":

                            $subcategoria->obterCategorias();

                            break;



                    }

                    break;

                        case "Blog Postagem":

                            // echo("Nível");

                            require_once("Controller/BlogPostagem.php");

                            $blogPostagem = new BlogPostagemControl();

                            switch ($_POST["acao"]) {

                                case "inserir":

                                    $blogPostagem->inserir();

                                    break;

                                case "obterTodos":

                                    $blogPostagem->obterTodos();

                                    break;
                                case "obterCategorias":

                                    $blogPostagem->obterCategorias();

                                    break;

                                case "obterUm":

                                    $blogPostagem->obterUm();

                                    break;

                                case "atualizar":

                                    $blogPostagem->atualizar();

                                    break;

                                case "atualizarSituacao":

                                    $blogPostagem->atualizarSituacao();

                                    break;

                                case "remover":

                                    $blogPostagem->remover();

                                    break;

                            }
                        break;

                        case "produto":

            require_once("Controller/Produto.php");

            $produto = new ProdutoControl();

            switch ($_POST["acao"]) {

                case "inserir":

                    $produto->inserir();

                    break;

                case "obterTodos":

                    $produto->obterTodos();

                    break;

                case "obterUm":

                    $produto->obterUm();

                    break;

                case "atualizar":

                    $produto->atualizar();

                    break;

                case "remover":

                    $produto->remover();

                    break;

                case "obterEstilo":

                    $produto->obterEstilo();

                    break;

                case "obterSubcategoria":

                    $produto->obterSubcategoria();

                    break;

                case "obterCategoria":

                    $produto->obterCategoria();

                    break;

                case "obterFiltro":

                    $produto->obterFiltro();

                    break;


            }

            break;
                case "cliente":

                    require_once("Controller/Cliente.php");

                    $cliente = new ClienteControl();

                    switch ($_POST["acao"]) {

                        case "inserir":

                            $cliente->inserir();

                            break;

                        case "obterTodos":

                            $cliente->obterTodos();

                            break;
                        case "obterCategorias":

                            $cliente->obterCategorias();

                            break;

                        case "obterUm":

                            $cliente->obterUm();

                            break;

                        case "atualizar":

                            $cliente->atualizar();

                            break;

                        case "atualizarSituacao":

                            $cliente->atualizarSituacao();

                            break;

                        case "remover":

                            $cliente->remover();

                            break;

                        case "autenticar":

                            // echo("@@@@@@@");

                            $cliente->autenticar();

                            break;

                        case "obterAutenticacao":

                            $cliente->obterAutenticacao();

                            break;

                        case "matarSessao":

                            session_destroy();

                            break;

                    }
                //     case "Upload Imagem":
                //
                //     require_once("Controller/UploadImagem.php");
                //
                //     $imagem = new UploadImagem();
                //
                //     switch ($_POST["acao"]) {
                //
                //         case "inserir":
                //
                //             $imagem->inserir();
                //
                //             break;
                //
                //         case "obterTodos":
                //
                //             $cliente->obterTodos();
                //
                //             break;
                //         case "obterCategorias":
                //
                //             $cliente->obterCategorias();
                //
                //             break;
                //
                //         case "obterUm":
                //
                //             $cliente->obterUm();
                //
                //             break;
                //
                //         case "atualizar":
                //
                //             $cliente->atualizar();
                //
                //             break;
                //
                //         case "atualizarSituacao":
                //
                //             $cliente->atualizarSituacao();
                //
                //             break;
                //
                //         case "remover":
                //
                //             $cliente->remover();
                //
                //             break;
                //
                //     }
                    case "Filtro":

                   require_once("Controller/Filtro.php");

                   $filtro = new FiltroControl();

                   switch ($_POST["acao"]) {

                       case "inserir":

                           $filtro->inserir();

                           break;

                       case "obterTodos":

                           $filtro->obterTodos();

                           break;

                       case "obterUm":

                           $filtro->obterUm();

                           break;

                       case "atualizar":

                           $filtro->atualizar();

                           break;

                       case "remover":

                           $filtro->remover();

                           break;

                       case "obterTipoFiltro":

                           $filtro->obterTipoFiltro();

                           break;

                       case "atualizarSituacao":

                           $filtro->atualizarSituacao();

                           break;


                   }

                   break;

                case "comunidade":

                // echo("Nível");

                require_once("Controller/Comunidade.php");

                $comunidade = new ComunidadeControl();

                switch ($_POST["acao"]) {

                    case "obterTodos":

                        $comunidade->obterTodos();

                        break;

                    case "obterTodosSite":

                        $comunidade->obterTodosSite();

                        break;


                    case "obterUm":

                        $comunidade->obterUm();

                        break;

                    case "obterResposta":
                        // alert("aaaaaaaaa");
                        $comunidade->obterResposta();

                        break;

                    case "remover":

                        $comunidade->remover();

                        break;

                }

                break;
                //
                case "tendencia":

                // echo("Nível");

                require_once("Controller/Tendencia.php");

                $tendencia = new TendenciaControl();

                switch ($_POST["acao"]) {

                    case "inserir":

                      $tendencia->inserir();

                      break;

                    case "obterTodos":

                        $tendencia->obterTodos();

                        break;
                
                    case "obterProdutos":

                        $tendencia->obterProdutos();

                        break;


                    case "obterUm":

                        $tendencia->obterUm();

                        break;

                    case "remover":

                        $tendencia->remover();

                        break;

                }

                // case"mostrarFoto":
                //
                // require_once("/Controller/UploadImagem");
                // UploadImagem::mostrarFoto($_GET['$pasta']);

    }

 ?>
