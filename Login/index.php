<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<link rel="stylesheet" type="text/css" href="./css/auth.css">
	<title>Login</title>
</head>
<body>
    <section>
        <?php
            require_once '../app/view/auth.php';

            $auth = new Auth();
            
            $auth->getTitle();
            echo '<br><br><br><br><br>';
            $auth->getForm();
            if(isset($_POST["submit"])){
                $auth->login($_POST['username'],$_POST['password']);
            }
        ?>
	</section>
    
</body>
</html>