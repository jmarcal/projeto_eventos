<?php
require_once 'functions.php';

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
    <title>Create Location Form</title>
    <style>
    span.error {
        color: red;
    }
    </style>
    <?php require 'utils/styles.php'; ?>
    <!--css links. file found in utils folder-->
    <?php require 'utils/scripts.php'; ?>
    <!--js links. file found in utils folder-->
</head>

<body>
    <?php require 'utils/header.php'; ?>
    <!--header content. file found in utils folder-->
    <div class="content">
        <div class="container">
            <h1>Criar Local</h1>
            <!--form title-->
            <?php 
                if (isset($errorMessage)) {
                    echo '<p>Error: ' . $errorMessage . '</p>';
                }
                ?>
            <form action="createLocation.php" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label for="Name" class="col-md-2 control-label">Nome Local</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="Name" name="Name"
                            value="<?php echoValue($formdata, "Name")?>" />
                        <!--input-->
                    </div>
                    <div class="col-md-4">
                        <span id="LNameError" class="error">
                            <!--error message for invalid input-->
                            <?php echoValue($errors, 'Name');?>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Address" class="col-md-2 control-label">Endereço</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="Address" name="Address"
                            value="<?php echoValue($formdata, "Address")?>" />
                        <!--input-->
                    </div>
                    <div class="col-md-4">
                        <span id="LAddressError" class="error">
                            <!--error message for invalid input-->
                            <?php echoValue($errors, 'Address');?>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="managerFName" class="col-md-2 control-label">Nome do Organizador</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="managerFName" name="managerFName"
                            value="<?php echoValue($formdata, "managerFName")?>" />
                        <!--input-->
                    </div>
                    <div class="col-md-4">
                        <span id="mNameError" class="error">
                            <!--error message for invalid input-->
                            <?php echoValue($errors, 'managerFName');?>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="managerLName" class="col-md-2 control-label">Sobrenome do Organizador</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="managerName" name="managerLName"
                            value="<?php echoValue($formdata, "managerLName")?>" />
                        <!--input-->
                    </div>
                    <div class="col-md-4">
                        <span id="mNameError" class="error">
                            <!--error message for invalid input-->
                            <?php echoValue($errors, 'managerLName');?>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="managerEmail" class="col-md-2 control-label">Email do Organizador</label>
                    <div class="col-md-5">
                        <input type="email" class="form-control" id="managerEmail" name="managerEmail"
                            value="<?php echoValue($formdata, "managerEmail")?>" />
                        <!--input-->
                    </div>
                    <div class="col-md-4">
                        <span id="mEmailError" class="error">
                            <!--error message for invalid input-->
                            <?php echoValue($errors, 'managerEmail');?>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="managerNumber" class="col-md-2 control-label">Contato do Organizador</label>
                    <div class="col-md-5">
                        <input type="number" class="form-control" id="managerNumber" name="managerNumber"
                            value="<?php echoValue($formdata, "managerNumber")?>" />
                        <!--input-->
                    </div>
                    <div class="col-md-4">
                        <span id="mNumError" class="error">
                            <!--error message for invalid input-->
                            <?php echoValue($errors, 'managerNumber');?>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="locationMaxCap" class="col-md-2 control-label">Capacidade Máxima</label>
                    <div class="col-md-5">
                        <input type="number" class="form-control" id="locationMaxCap" name="maxCap"
                            value="<?php echoValue($formdata, "maxCap")?>" />
                        <!--input-->
                    </div>
                    <div class="col-md-4">
                        <span id="capError" class="error">
                            <!--error message for invalid input-->
                            <?php echoValue($errors, 'maxCap');?>
                        </span>
                    </div>
                </div>

                <!--codes below has no connection with the database.-->
                <div class="form-group">
                    <label class="col-md-2 control-label">Tipo de Local</label>
                    <!--radio buttons with multiple options-->
                    <div class="col-md-5">
                        <input type="radio" name="lType" value="indoor"
                            <?php echoChecked($formdata, "lType", "indoor"); ?>>Interno <br>
                        <input type="radio" name="lType" value="outdoor"
                            <?php echoChecked($formdata, "lType", "outdoor"); ?>>Externo <br>
                        <input type="radio" name="lType" value="both"
                            <?php echoChecked($formdata, "lType", "both"); ?>>Ambos
                    </div>
                    <div class="col-md-4">
                        <span id="typeError" class="error">

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Assentos Disponíveis</label>
                    <div class="col-md-5">
                        <select class="form-control" name="seat">
                            <option value="yes" <?php echoSelected($formdata, "seat", "yes"); ?>>Sim</option>
                            <option value="no" <?php echoSelected($formdata, "seat", "no"); ?>>Não</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Instalações</label>
                    <div class="col-md-5">
                        <input type="checkbox" name="facilities[]" value="sound"
                            <?php echoCheckedArray($formdata, 'facilities', 'sound'); ?>>Sala de Som <br>
                        <input type="checkbox" name="facilities[]" value="screen"
                            <?php echoCheckedArray($formdata, "facilities", "screen"); ?>>Cinema <br>
                        <input type="checkbox" name="facilities[]" value="restaurant"
                            <?php echoCheckedArray($formdata, "facilities", "restaurant"); ?>>Restaurantes <br>
                        <input type="checkbox" name="facilities[]" value="bar"
                            <?php echoCheckedArray($formdata, "facilities", "bar"); ?>>Bar <br>
                        <input type="checkbox" name="facilities[]" value="disabled"
                            <?php echoCheckedArray($formdata, "facilities", "disabled"); ?>>Acesso a Banheiros
                        desabiltado <br>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Url</label>
                    <div class="col-md-5">
                        <input type="text" class="control-label" name="link">
                    </div>
                    <div class="col-md-4">
                        <span id="urlError" class="error">
                            <?php echoValue($errors, 'link');?>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Anexar arquivo:</label>
                    <div class="col-md-5">

                        <input title="Arquivo não escolhido" name="select" style="color:transparent;" id="files"
                            type="file" class="control-label" name="attachment"><label for="files">Selecionar</label>

                    </div>
                </div>
                <button type="submit" name="createLocation" class="btn btn-default pull-right">Criar Localização <span
                        class="glyphicon glyphicon-send"></span></button>
            </form>
            <a class="btn btn-default" href="viewLocations.php"><span
                    class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a>
            <!--return/back button-->
        </div>
    </div>
    <?php require 'utils/footer.php'; ?>
    <!--footer content. file found in utils folder-->
</body>

</html>