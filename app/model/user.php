<?php

require_once (__DIR__."/Db.php");

class User{

    private static $auth;

    public function __construct(){
        $auth = false;
    }

    public function login($username,$password){
        $db =Db::connect();

        $requete = "SELECT * FROM User WHERE username = '$username' AND password = '$password'";
        $users= Db::execute_query($requete);
        foreach ($users as $user) {
            if(count($users)>0){
                self::$auth = true;
            }
        }
        return $users;
    }

    public function getUserById($id){
        $requete = "SELECT * FROM User WHERE id = '$id' LIMIT 1";
        return Db::execute_query($requete)[0];
    }

    public static function isAuth(){
        return self::$auth;
    }
}