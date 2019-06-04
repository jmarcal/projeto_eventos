<header class="bgImage">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <!--website name/title-->
                <?php 
                require_once 'utils/funcoes.php';
                echo '<a href = "index.php" class = "navbar-brand">
                    BrEvents
                </a> ';
                ?>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <!--navigation-->
                <?php 
                //links to database contents. *if logged in
                if(is_logged_in()){
                    require_once 'utils/funcoes.php';
                    echo '<li><a href = "index.php">Home</a></li>';
                    echo '<li><a href = "verEventos.php">Eventos</a></li>';
                    echo '<li><a href = "verLocalizacoes.php">Localização</a></li>';
                    echo '<li><a href = "contato.php">Entre em contato</a></li>';
                    echo '<li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "logout.php">Sair <span class = "glyphicon glyphicon-log-out"></span></a></li>';
                }  
                //links non database contents. *if logged out
                else {
                    echo '<li><a href = "index.php">Home</a></li>';
                    echo '<li><a href = "eventos2.php">Eventos</a></li>';
                    echo '<li><a href = "localizacoes2.php">Localização</a></li>';
                    echo '<li><a href = "contato.php">Entre em contato</a></li>';
                    echo '<button type = "button" class = "btn btn-default navbar-btn" data-toggle = "modal" data-target = "#login">Login <Span class="glyphicon glyphicon-log-in"></span></button>';
                }
                ?>

                <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <!--modal for login-->
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!--modal header-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Entrar</h4>
                                <!--modal title-->
                            </div>
                            <div class="row">
                                <div class="modal-body">
                                    <!--modal content-->
                                    <div class="col-md-6 col-md-offset-3">
                                        <form action="login.php" method="POST">
                                            <div class="form-group">
                                                <!--username-->
                                                <label for="username">Nome de Usuário:</label>
                                                <input type="text" name="username" class="form-control"
                                                    value="<?php if (isset($formdata['username'])) echo $formdata['username']; ?>" />
                                                <span class="error">
                                                    <!--error message on failed input-->
                                                    <?php if (isset($errors['username'])) echo $errors['username']; ?>
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <!--password-->
                                                <label for="password">Senha:</label>
                                                <input type="password" name="password" class="form-control" value="" />
                                                <span class="error">
                                                    <!--error message on failed input-->
                                                    <?php if (isset($errors['password'])) echo $errors['password']; ?>
                                                </span>
                                            </div>
                                            <button type="submit" class="btn btn-default loginbtn">Login</button>
                                            <!--login button-->
                                            <a class="btn btn-default navbar-btn rgsterbtn"
                                                href="registro_formulario.php">Cadastrar</a>
                                            <!--register button-->
                                        </form>
                                    </div>
                                </div>
                                <!--modal body div-->
                            </div>
                            <!--row div-->
                            <div class="modal-footer">
                                <!--modal footer-->
                                <button type="button" class="btn btn-default closebtn"
                                    data-dismiss="modal">Sair</button>
                                <p>
                                    <!--close button-->
                            </div>
                            <!--modal footer div-->
                        </div>
                        <!--modal content div-->
                    </div>
                    <!--modal dialog div-->
                </div>
                <!--modal div-->
            </ul>
        </div>
        <!--container div-->
    </nav>
    <div class="col-md-12">
        <div class="container">
            <div class="jumbotron">
                <!--jumbotron-->
                <h1>Br Events</h1>
                <!--jumbotron heading-->
                <p>
                    <!--jumbotron content-->
                    Se você está querendo reservar um coquetel, reunião pós-trabalho, função comemorativa,
                    conferência, reunião de negócios , casamento ou jantares privados, nossa equipe dedicada ao Urban
                    Events pode criar um pacote que vai encontrar todas as suas necessidades.
                </p>
                <?php
                date_default_timezone_set('America/Sao_paulo');
                ?>
                <p id="dateAndTime"></p>
            </div>
        </div>
    </div>
</header>