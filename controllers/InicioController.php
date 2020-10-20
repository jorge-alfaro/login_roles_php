<?php

class inicioController{
    public function index(){
     
        require_once 'views/pages/inicio.php';
        
    }


    
    public function admin(){
     
        require_once 'views/inicio/admin.php';
       
    }

    public function profesor(){
     
        require_once 'views/inicio/profesor.php';
       
    }

    public function user(){
     
        require_once 'views/inicio/user.php';
       
    }
}