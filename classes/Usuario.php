<?php
class Usuario {
    private $id;
    private $username;
    private $password;
    private $role;

    public function __construct($i, $uname, $pwd, $r) {
        $this->id = $i;
        $this->username = $uname;
        $this->password = $pwd;
        $this->role = $r;
    }
    public function getId() { return $this->id; }
    public function getNomeUsuario() { return $this->username; }
    public function getSenha() { return $this->password; }
    public function getPrivilegio() { return $this->role; }

    public function setId($i) { $this->id = $i; }
    public function setNomeUsuario($n) { $this->username = $n; }
    public function setSenha($p) { $this->password = $p; }
    public function setPrivilegio($r) { $this->role = $r; }
}
?>