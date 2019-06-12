<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Sistema de Gerenciamento de Eventos</title>
    <?php require 'utils/styles.php'; ?>
    <!--links css. arquivo encontrado na pasta utils-->
    <?php require 'utils/scripts.php'; ?>
    <!--links js. arquivo encontrado na pasta utils-->
</head>

<body>
    <?php require 'utils/cabecalho.php'; ?>
    <!--conteudo cabecalho. arquivo encontrado na pasta utils-->
    <div class="content">
        <!--conteudo body-->
        <div class="container">
            <div class="col-md-12">
                <h1>Entre em contato</h1>
                <!--conteudo titulo body-->
            </div>
        </div>

        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="container">
            <div class="col-md-6 contacts">
                <h1><span class="glyphicon glyphicon-user"></span> UPeventos</h1>
                <p>
                    <span class="glyphicon glyphicon-envelope"></span> Email: upeventos@yahoo.ie<br>
                    <span class="glyphicon glyphicon-link"></span> Facebook: www.facebook.com/upeventos<br>
                    <span class="glyphicon glyphicon-phone"></span> Telefone: 03212310413
                </p>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="Title">Título:</label>
                        <input type="text" name="title" id="Title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Comment">Messagem:</label>
                        <textarea id="Comment" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default pull-right">Enviar <span
                            class="glyphicon glyphicon-send"></span></button>
                </form>
            </div>
        </div>


    </div>
    <!--conteudo body div-->
    <?php require 'utils/rodape.php'; ?>
    <!--conteudo rodape. arquivo encontrado na pasta utils-->
</body>

</html>