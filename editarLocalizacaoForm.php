<?php
require_once 'classes/Localizacao.php';
require_once 'classes/TabelaLocalizacao.php';
require_once 'classes/Conexao.php';

if (!isset($_GET['id'])) {
    die("Illegal request");
}
$id = $_GET['id'];

$connection = Conexao::getInstancia();
$gateway = new TabelaLocalizacao($connection);

$statement = $gateway->getLocationsById($id);

$row = $statement->fetch(PDO::FETCH_ASSOC);
if (!$row) {
    die("Illegal request");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Edit Location</title>
    <?php require 'utils/styles.php'; ?>
    <!--css links. file found in utils folder-->
    <?php require 'utils/scripts.php'; ?>
    <!--js links. file found in utils folder-->
</head>

<body>
    <?php require 'utils/cabecalho.php'; ?>
    <!--header content. file found in utils folder-->
    <div class="content">
        <div class="container">
            <h1>Edit Location Form</h1>
            <!--form title-->
            <?php 
                if (isset($errorMessage)) {
                    echo '<p>Error: ' . $errorMessage . '</p>';
                }
                ?>
            <form action="editarLocalizacao.php" method="POST" class="form-horizontal">
                <input type="hidden" name="id" value="<?php echo $row['IDlocalizacao']; ?>" />
                <!--location id. auto incremented in database. cannot be updated from website-->
                <div class="form-group">
                    <label for="Name" class="col-md-2 control-label">Name</label>
                    <!--label-->
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="Name" name="Nome"
                            value="<?php echo $row['Nome']; ?>" />
                        <!--input with current data from database-->
                    </div>
                    <div class="col-md-4">
                        <span id="LNameError" class="error"></span>
                        <!--error message for invalid input-->
                    </div>
                </div>
                <div class="form-group">
                    <label for="Address" class="col-md-2 control-label">Address</label>
                    <!--label-->
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="Address" name="Endereco"
                            value="<?php echo $row['Endereco']; ?>" />
                        <!--input with current data from database-->
                    </div>
                    <div class="col-md-4">
                        <span id="LAddressError" class="error"></span>
                        <!--error message for invalid input-->
                    </div>
                </div>
                <div class="form-group">
                    <label for="ManagerFName" class="col-md-2 control-label">Manager First Name</label>
                    <!--label-->
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="ManagerFName" name="NomeOrganizador"
                            value="<?php echo $row['NomeOrganizador']; ?>" />
                        <!--input with current data from database-->
                    </div>
                    <div class="col-md-4">
                        <span id="mNameError" class="error"></span>
                        <!--error message for invalid input-->
                    </div>
                </div>
                <div class="form-group">
                    <label for="ManagerLName" class="col-md-2 control-label">Manager Last Name</label>
                    <!--label-->
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="ManagerLName" name="SobrenomeOrganizador"
                            value="<?php echo $row['SobrenomeOrganizador']; ?>" />
                        <!--input with current data from database-->
                    </div>
                    <div class="col-md-4">
                        <span id="mNameError" class="error"></span>
                        <!--error message for invalid input-->
                    </div>
                </div>
                <div class="form-group">
                    <label for="ManagerEmail" class="col-md-2 control-label">Manager Email</label>
                    <!--label-->
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="ManagerEmail" name="EmailOrganizador"
                            value="<?php echo $row['EmailOrganizador']; ?>" />
                        <!--input with current data from database-->
                    </div>
                    <div class="col-md-4">
                        <span id="mEmailError" class="error"></span>
                        <!--error message for invalid input-->
                    </div>
                </div>
                <div class="form-group">
                    <label for="ManagerNumber" class="col-md-2 control-label">Manager Number</label>
                    <!--label-->
                    <div class="col-md-5">
                        <input type="number" class="form-control" id="ManagerNumber" name="ContatoOrganizador"
                            value="<?php echo $row['ContatoOrganizador']; ?>" />
                        <!--input with current data from database-->
                    </div>
                    <div class="col-md-4">
                        <span id="mNumError" class="error"></span>
                        <!--error message for invalid input-->
                    </div>
                </div>
                <div class="form-group">
                    <label for="MaxCapacity" class="col-md-2 control-label">Max Capacity</label>
                    <!--label-->
                    <div class="col-md-5">
                        <input type="number" class="form-control" id="MaxCapacity" name="CapacidadeMaxima"
                            value="<?php echo $row['CapacidadeMaxima']; ?>" />
                        <!--input with current data from database-->
                    </div>
                    <div class="col-md-4">
                        <span id="capError" class="error"></span>
                        <!--error message for invalid input-->
                    </div>
                </div>
                <button type="submit" class="btn btn-default pull-right" name="editarLocalizacao">Update <span
                        class="glyphicon glyphicon-floppy-disk"></span></button>
                <!--submit button-->
                <a class="btn btn-default" href="viewlocations.php"><span
                        class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>
                <!--return/back button-->
            </form>
        </div>
    </div>
    <?php require 'utils/rodape.php'; ?>
    <!--footer content. file found in utils folder-->
</body>

</html>