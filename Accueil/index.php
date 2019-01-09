<<!DOCTYPE html>
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
    <script type="text/javascript" charset="utf8" src="../res/DataTables/datatables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="./scripts/accueil.js"></script>
</head>
<body>
<div class="container">

    <?php

    require_once __DIR__."/../app/view/tableDisplay.php";

    $t=new Table();
    $t->display();




    ?>



</div>


</body>
</html>