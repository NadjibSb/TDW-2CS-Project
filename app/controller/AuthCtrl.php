<?php

require_once __DIR__."/../model/user.php";

class AuthCtrl{

    private $model;

    public function __construct(){
        $this->model = new User();
    }


    public function login($username,$password){
        $users= User::login($username,$password);
        $auth = false;

        foreach ($users as $user) {
            //if ($username == $user["username"] && $password == $user["password"]){
                if(count($users)>0){
                $auth = true;
            }
        }

        if($auth){
            $_SESSION['username']   = $username;
            $_SESSION['password']   = $password;
            $_SESSION['userId']   = $users[0]["id"];
            $_SESSION['auth'] = true;
        }else {
            $_SESSION['auth'] = false;
        }
        
        
        return $auth;
    }
    
}