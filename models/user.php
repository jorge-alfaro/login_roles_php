<?php
class User{
    private $id;
    private $name;
    private $password;
    private $rol;
    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }


    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getPassword(){
        return password_hash($this->db->real_escape_string($this->password), 
        PASSWORD_BCRYPT,['cost'=>4]);
    }
    function getRol(){
        return $this->rol;
    }

    function setId($id){
        $this->id =$id;
    }
    function setName($name){
        $this->name =$this->db->real_escape_string($name);
    }
    function setPassword($password){
        $this->password =$password;
    }
    function setRol($rol){
        $this->rol =$rol;
    }

    public function save(){
        $sql = "INSERT INTO users VALUES(NULL,'{$this->getName()}','{$this->getPassword()}','{$this->getRol()}')"; 
        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;

        }
        return $result;

    }

    public function login() {
        $result = false;
        $name = $this->name;
        $password = $this->password;

        $sql = "SELECT * FROM users WHERE name = '$name'";
        $login = $this->db->query($sql);

        if($login && $login->num_rows == 1 ){
            $user = $login->fetch_object();

            $verify = password_verify($password, $user->password);

            if($verify){
                $result = $user;
            }
        }

        return $result;
    }
}