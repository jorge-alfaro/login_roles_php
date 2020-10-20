<?php
require_once 'models/user.php';
class userController{

    public function index(){
        require_once 'views/pages/inicio.php';
    }
    //Vistas de pagina imagen
    public function img1(){
        require_once 'views/pages/pag1.php';
    }
    public function img2(){
        require_once 'views/pages/pag2.php';
    }
    public function img3(){
        require_once 'views/pages/pag3.php';
    }
    public function img4(){
        require_once 'views/pages/pag4.php';
    }
    public function img5(){
        require_once 'views/pages/pag5.php';
    }


    public function tienda(){
        require_once 'views/users/tienda.php';
    }
    public function comprar(){
        require_once 'views/users/comprar.php';
    }
    //demas contenido
    public function vistalogin(){
     
        require_once 'views/users/login.php';
    }
    public function registro(){
        if(isset($_SESSION['admin'])){
            
            require_once 'views/users/registro.php';
        }else{
            header("location:".base_url."user/index");
        }
    }

    public function save(){

        if(isset($_POST)){

            $nombre = isset($_POST['name']) ? $_POST['name']: false;
            $password = isset($_POST['password']) ? $_POST['password']: false;
            $rol = isset($_POST['rol']) ? $_POST['rol']: false;

                    if($nombre && $password && $rol){
                        $user = new User();
                        $user->setName($nombre);
                        $user->setPassword($password);
                        $user->setRol($rol);

                        $save = $user->save();
                        if($save){
                            $_SESSION['register'] = "Complete";
                            }else {
                                $_SESSION['register'] = "Failed";
                            }
                        
                    }else {
                        $_SESSION['register'] = "Failed";
                    }
        }else {
            $_SESSION['register'] = "Failed";
        }
        header("Location:".base_url.'user/registro');
        
    }

    public function login(){

        if(isset($_SESSION['admin'])){
            header("location:".base_url."inicio/admin");
        }
        elseif(isset($_SESSION['usuario'])){
            header("location:".base_url."inicio/user");
        }
        elseif(isset($_SESSION['profesor'])){
                header("location:".base_url."inicio/profesor");
        }else{
            
        
            if(isset($_POST)){

                $user = new User();
                $user->setName($_POST['name']);
                $user->setPassword($_POST['password']);

                $identity = $user->login();

                if($identity && is_object($identity)){
                    $_SESSION['identity'] = $identity;

            
                        if($identity->rol =='admin'){
                            $_SESSION['admin'] = true;
                            header("location:".base_url."inicio/admin");
                        }

                        if($identity->rol =='usuario'){
                            $_SESSION['usuario'] = true;
                            header("location:".base_url."inicio/user");
                        }

                        if($identity->rol =='profesor'){
                            $_SESSION['profesor'] = true;
                            header("location:".base_url."inicio/profesor");
                        }
                    
                }else{
                    $_SESSION['error_login'] = 'identificacion fallida !!';
                    header("location:".base_url."user/vistalogin");
                
                }

            
            }else{
                $_SESSION['error_login'] = 'identificacion fallida !!';
            }
        }// header("location:".base_url);
    }


    public function logout(){
        if(isset($_SESSION['identity'])){
            unset($_SESSION['identity']);
        }

        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }

        if(isset($_SESSION['profesor'])){
            unset($_SESSION['profesor']);
        }

        if(isset($_SESSION['usuario'])){
            unset($_SESSION['usuario']);
        }

        header("location:".base_url."user/index");
    }
}