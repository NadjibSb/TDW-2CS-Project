<?php
    require_once __DIR__."/../model/Ecole.php";
    require_once __DIR__."/../model/formation.php";
    require_once __DIR__."/../view/tableDisplay.php";
    require_once __DIR__."/../view/accueilEcole.php";

    if(isset($_GET['categ'])){
        $categ = $_GET['categ'];

        $e = new Ecole();
        $res = $e->getEcolesByCategorie($categ);

        $return=  "<option> Selection une ecole</option>";
        
        foreach ($res as $row) {
            $return = $return."<option value=\"".$row['id']."\"> ". $row['nom']."</option>";
        }
        echo $return;
        unset($res);
    }

    if(isset($_GET["ecole1"])){
        $ecoleId = $_GET["ecole1"];

        $table = new Table();
        $r1= $table->displayFormationOfEcoleWithoutStyle($ecoleId);

        echo $r1;

    }

    if(isset($_GET["ecole2"])){
        $ecoleId = $_GET["ecole2"];

        $view = new AccueilEcole();
        $r2= $view->getCommentaires($ecoleId);

        echo $r2;

    }

?>