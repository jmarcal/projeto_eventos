<?php
require_once 'funcoes.php';
require_once 'classes/Localizacao.php';
require_once 'classes/TabelaLocalizacao.php';
require_once 'classes/Conexao.php';

$connection = Conexao::getInstancia();
$gateway = new TabelaLocalizacao($connection);

$locations = $gateway->getLocations();

if (!isset($formdata)) {
    $formdata = array();
}

if (!isset($errors)) {
    $errors = array();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Criar Evento</title>
    <?php require 'utils/styles.php'; ?>
    <!--links css. arquivo encontrado na pasta utils-->
    <?php require 'utils/scripts.php'; ?>
    <!--links js. arquivo encontrado na pasta utils-->
</head>

<body>
    <?php require 'utils/cabecalho.php'; ?>
    <!--conteudo cabecalho. arquivo encontrado na pasta utils-->
    <div class="content">
        <div class="container">
            <h1>Criar Evento</h1>
            <!--titulo formulario-->
            <?php 
                if (isset($errorMessage)) {
                    echo '<p>Error: ' . $errorMessage . '</p>';
                }
                ?>
            <form action="criarEvento.php" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label for="Title" class="col-md-2 control-label">Título</label>
                    <!--titulo evento-->
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="Titulo" name="Titulo"
                            value="<?php echoValue($formdata, "Titulo")?>" />
                        <!--entrada-->
                    </div>
                    <div class="col-md-4">
                        <span id="TitleError" class="error">
                            <!--mensagem de erro para entrada invalida-->
                            <?php echoValue($errors, 'Title');?>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Description" class="col-md-2 control-label">Descrição</label>
                    <!--descricao evento-->
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="Descricao" name="Descricao"
                            value="<?php echoValue($formdata, "Descricao")?>" />
                        <!--entrada-->
                    </div>
                    <div class="col-md-4">
                        <span id="DescriptionError" class="error">
                            <!--mensagem de erro para entrada invalida-->
                            <?php echoValue($errors, 'Description');?>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="TipoEvento" class="col-md-2 control-label">TipoEvento</label>
                    <!--descricao evento-->
                    <div class="col-md-5">
                        <select name="TipoEvento" id="TipoEvento" value="<?php echoValue($errors,'TipoEvento')?>">
                            <legend>Tipo de Evento</legend>
                            <option value="Congresso">Congresso</option>
                            <option value="Encontro">Encontro</option>
                            <option value="Seminário">Seminário</option>
                            <option value="Mesa-redonda">Mesa-redonda</option>
                            <option value="Simposio">Simpósio</option>
                            <option value="Painel">Painel</option>
                            <option value="Fórum">Fórum</option>
                            <option value="Conferência">Conferência</option>
                            <option value="Jornada">Jornada</option>
                            <option value="Curso">Curso</option>
                            <option value="Colóquio">Colóquio</option>
                            <option value="Workshop">Workshop</option>
                        </select>
                        <!--entrada-->
                    </div>
                    <div class="col-md-4">
                        <span id="DescriptionError" class="error">
                            <!--mensagem de erro para entrada invalida-->
                            <?php echoValue($errors, 'Description');?>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="StartDate" class="col-md-2 control-label">Data de Início</label>
                    <!--data de inicio-->
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="DataInicio" name="DataInicio"
                            value="<?php echoValue($formdata, "DataInicio")?>" />
                        <!--entrada-->
                    </div>
                    <div class="col-md-4">
                        <span id="StartDateError" class="error">
                            <!--mensagem de erro para entrada invalida-->
                            <?php echoValue($errors, 'StartDate');?>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="EndDate" class="col-md-2 control-label">Data de Fim</label>
                    <!--data de fim-->
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="DataFim" name="DataFim"
                            value="<?php echoValue($formdata, "DataFim")?>" />
                        <!--entrada-->
                    </div>
                    <div class="col-md-4">
                        <span id="EndDateError" class="error">
                            <!--mensagem de erro para entrada invalida-->
                            <?php echoValue($errors, 'EndDate');?>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Cost" class="col-md-2 control-label">Custo</label>
                    <!--custo-->
                    <div class="col-md-5">
                        <input type="number" class="form-control" id="Custo" name="Custo"
                            value="<?php echoValue($formdata, "Custo")?>" />
                        <!--entrada-->
                    </div>
                    <div class="col-md-4">
                        <span id="CostError" class="error">
                            <!--mensagem de erro para entrada invalida-->
                            <?php echoValue($errors, 'Cost');?>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="IDloc" class="col-md-2 control-label">Localização</label>
                    <!--id localizacao-->
                    <div class="col-md-5">
                        <select name="IDloc" id="IDloc" class="form-control">
                            <?php
                                    foreach ($locations as $location) {
                                        echo '<option value="'.$location['IDlocalizacao'].'">'.$location['Nome'].'</option>';
                                    }
                                    ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <span id="LocIDError" class="error">
                            <!--mensagem de erro para entrada invalida-->
                            <?php echoValue($errors, 'LocID');?>
                        </span>
                    </div>
                </div>
                <button type="submit" class="btn btn-default pull-right">Criar Evento <span
                        class="glyphicon glyphicon-send"></span></button>
                <a class="btn btn-default navbar-btn" href="verEventos.php"><span
                        class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a>
                <!--botao registrar-->
            </form>
        </div>
    </div>
    <?php require 'utils/rodape.php'; ?>
    <!--conteudo rodape. arquivo encontrado na pasta utils-->
</body>

</html>