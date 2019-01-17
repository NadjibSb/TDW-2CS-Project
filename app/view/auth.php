<?php

require_once __DIR__."/../controller/AuthCtrl.php";

    class Auth {
        private $title='Login Page';
        private $controller;

        public function __construct(){
            $this->controller = new AuthCtrl();
        }


        function getTitle(){
            echo '<h1>'.$this->title.'</h1>';
        }

        function getForm(){
            echo '<form method="post" action="">

                        <label class="row" for="username"><h3>User name :  </h3></label> 
                        <input id="" name="username" placeholder="username" type="text">
                        <br><br>

                        <label class="row" for="password""><h3>Password :  </h3></label>
                        <input id="password" name="password" placeholder="*********" type="Password" >
                        <br><br><br>

                        <button class="row submitButton" type="submit" name="submit" id="submit" value="submit">Login</button>
                        <br><br>
                        <span class="error"> <?php ECHO $error;?></span>
                </form>';
        }

        function login($username,$password){
            if(isset($username) && isset($password)){

                $auth= $this->controller->login($username,$password);
                if($auth)   header("location: ".$_SESSION["ROOT_URL"]."/Accueil/");
                else header("location: ./");
            }
        }


    }
