<header class="bgImage">
    <nav class="navbar" style="background:rgba(0,0,0,.3);">
        <div class="container">
            <div class="navbar-header">
                <!--Nome/titulo website-->
                <?php 
                require_once 'utils/funcoes.php';
                echo '<a href = "index.php" style="margin-top:-40px;" class = "navbar-brand">
                    <h1>BrEvents</h1>
                </a> ';
                ?>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <!--navegacao-->
                <?php 
                //links para conteudos do db. *caso estiver logado
                if(is_logged_in()){
                    require_once 'utils/funcoes.php';
                    echo '<li><a href = "index.php">Home</a></li>';
                    echo '<li><a href = "verEventos.php">Eventos</a></li>';
                    echo '<li><a href = "verLocalizacoes.php">Localização</a></li>';
                    echo '<li><a href = "contato.php">Entre em contato</a></li>';
                    echo '<li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "logout.php">Sair <span class = "glyphicon glyphicon-log-out"></span></a></li>';
                }  
                //link conteudos fora db. *se estiver deslogado
                else {
                    echo '<li><a href = "index.php">Home</a></li>';
                    echo '<li><a href = "eventos2.php">Eventos</a></li>';
                    echo '<li><a href = "localizacoes2.php">Localização</a></li>';
                    echo '<li><a href = "contato.php">Entre em contato</a></li>';
                    echo '<button type = "button" class = "btn btn-default navbar-btn" data-toggle = "modal" data-target = "#login">Login <Span class="glyphicon glyphicon-log-in"></span></button>';
                }
                ?>

                <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <!--modal para login-->
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!--modal cabecalho-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Entrar</h4>
                                <!--modal titulo-->
                            </div>
                            <div class="row">
                                <div class="modal-body">
                                    <!--modal conteudo-->
                                    <div class="col-md-6 col-md-offset-3">
                                        <form action="login.php" method="POST">
                                            <div class="form-group">
                                                <!--nome de usuario-->
                                                <label for="username">Nome de Usuário:</label>
                                                <input type="text" name="username" class="form-control"
                                                    value="<?php if (isset($formdata['username'])) echo $formdata['username']; ?>" />
                                                <span class="error">
                                                    <!--mensagem de erro para entrada invalida-->
                                                    <?php if (isset($errors['username'])) echo $errors['username']; ?>
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <!--senha-->
                                                <label for="password">Senha:</label>
                                                <input type="password" name="password" class="form-control" value="" />
                                                <span class="error">
                                                    <!--mensagem de erro para entrada invalida-->
                                                    <?php if (isset($errors['password'])) echo $errors['password']; ?>
                                                </span>
                                            </div>
                                            <button type="submit" class="btn btn-default loginbtn">Login</button>
                                            <!--botao login-->
                                            <a class="btn btn-default navbar-btn rgsterbtn"
                                                href="registro_formulario.php">Cadastrar</a>
                                            <!--botao registrar-->
                                        </form>
                                    </div>
                                </div>
                                <!--modal body div-->
                            </div>
                            <!--row div-->
                            <div class="modal-footer">
                                <!--modal rodape-->
                                <button type="button" class="btn btn-default closebtn"
                                    data-dismiss="modal">Sair</button>
                                <p>
                                    <!--botao fechar-->
                            </div>
                            <!--modal rodape div-->
                        </div>
                        <!--modal conteudo div-->
                    </div>
                    <!--modal dialogo div-->
                </div>
                <!--modal div-->
            </ul>
        </div>
        <!--container div-->
    </nav>
    <!-- <div class="col-md-12">

        <div class="jumbotron">
            jumbotron
            <h1 style="background:rgba(0,0,0,.4);width:100%;">Br Events</h1>
            <?php
                date_default_timezone_set('America/Sao_paulo');
                ?>
             <p style="text-align:rigth;" id="dateAndTime"></p> 

        </div>
    </div> -->
</header>