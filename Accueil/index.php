<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Projet WEB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <link rel="stylesheet" type="text/css" href="./style/main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../res/bootstrap-4/css/bootstrap.min.css" />
    <script type="text/javascript" src="../res/JQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../res/JQuery/DataTables/datatables.min.css">
    <script type="text/javascript" charset="utf8" src="../res/JQuery/DataTables/datatables.min.js"></script>
</head>
<body>

    <div class="container-fluid body fill-height justify-content-center">
        <!-- header -->
        <?php
            require_once $_SESSION["ROOT_DIR"]."/app/view/accueil.php";
            $view = new Accueil();
            $view->getHeader();
            $view->getDiapo();
        ?>
        <div class="container-fluid  remove-margin content ">
            <div class="row justify-content-between fill-height ">
                <?php
                    // menu
                    $view->getMenu();
                    // content
                    $view->getContentCategories();
                ?>
            </div>
        <!-- footer -->
        <?php
            $view->getFooter();
        ?>
        </div>
    </div>
</body>
</html>





























<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecole Privé</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
    <link rel="stylesheet" type="text/css" media="screen" href="../res/bootstrap-4/css/bootstrap.min.css" />
    <script type="text/javascript" src="../res/JQuery/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../res/DataTables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="./css/accueil.css">
    <script type="text/javascript" charset="utf8" src="../res/DataTables/datatables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="./scripts/accueil.js"></script>
</head>
<body>
    <div class="container-fluid body justify-content-center">
        

    </div>


</body>
</html> -->