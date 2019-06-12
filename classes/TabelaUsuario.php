<?php

require_once 'Usuario.php';

class TabelaUsuario {
    private $link;
    
    public function __construct($connection) {
        $this->link = $connection;
    }

    public function insert($user) {
        if (!isset($user)) {
            throw new Exception("User required");
        }
        $sql = "INSERT INTO usuarios(nomeusuario, senha, privilegio) "
             . "VALUES (:nomeusuario, :senha, :privilegio)";

        $params = array(
            'nomeusuario' => $user->getNomeUsuario(),
            'senha' => $user->getSenha(),
            'privilegio' => $user->getPrivilegio()
        );
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute($params);
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("nao foi possivel realizar acao: " . $errorInfo[2]);
        }

        $id = $this->link->lastInsertID('users');
        
        return $id;
    }

    public function delete($user) {
        if (!isset($user)) {
            throw new Exception("Usuario necessario");
        }
        $id = $user->getId();
        if ($id == null) {
            throw new Exception("id Usuario necessario");
        }
        $sql = "DELETE FROM usuarios WHERE id = :id";
        $params = array('id' => $user->getId());
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute($params);
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("nao foi possivel realizar acao: " . $errorInfo[2]);
        }
    }

    public function update($user) {
        if (!isset($user)) {
            throw new Exception("Usuario necessario");
        }
        $id = $user->getId();
        if ($id == null) {
            throw new Exception("id Usuario necessario");
        }
        $sql = "UPDATE usuarios SET senha = :senha WHERE id = :id";
        $params = array(
            'senha' => $user->getSenha(),
            'id' => $user->getId()
        );
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute($params);
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("nao foi possivel realizar acao: " . $errorInfo[2]);
        }
    }

    public function getUserById($id) {
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $params = array('id' => $id);
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute($params);
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("nao foi possivel realizar acao: " . $errorInfo[2]);
        }

        $user = null;
        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch();
            $username = $row['nomeusuario'];
            $pwd = $row['senha'];
            $role = $row['privilegio'];
            $user = new Usuario($id, $username, $pwd, $role);
        }
        return $user;
    }

    public function getUserByUsername($username) {
        $sql = "SELECT * FROM usuarios WHERE nomeusuario = :nomeusuario";
        $params = array('nomeusuario' => $username);
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute($params);
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("nao foi possivel realizar acao: " . $errorInfo[2]);
        }

        $user = null;
        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch();
            $id = $row['id'];
            $pwd = $row['senha'];
            $role = $row['privilegio'];
            $user = new Usuario($id, $username, $pwd, $role);
        }
        return $user;
    }

    public function getUsers() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute();
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("nao foi possivel realizar acao: " . $errorInfo[2]);
        }

        $users = array();
        $row = $stmt->fetch();
        while ($row != null) {
            $id = $row['id'];
            $username = $row['nomeusuario'];
            $pwd = $row['senha'];
            $role = $row['privilegio'];
            $user = new Usuario($id, $username, $pwd, $role);
            $users[$id] = $user;

            $row = $stmt->fetch();
        }
        return $users;
    }
}

?>