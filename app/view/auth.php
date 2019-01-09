<?php


    class Auth {
        private $title='Login Page';
        private $controller;


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

        function login(){
            if(isset($_POST['username']) && isset($_POST['password'])){
                $_POST['auth']=true;
                header("location: ./../../pulic/view/admin/dashboard.php");
            }
        }


    }
