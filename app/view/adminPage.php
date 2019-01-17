<?php

class AdminPage{

    public function getMenu(){
        include($_SESSION["ROOT_DIR"]."/app/view/components/menuAdmin.php");
    }

    public function getSupprimerSection(){
        if(isset($_GET["section"]) && $_GET["section"]=="supp")
        include($_SESSION["ROOT_DIR"]."/app/view/components/suppEcole.php");
    }

    public function getAjouterSection(){
        if(isset($_GET["section"]) && $_GET["section"]=="ajout")
        include($_SESSION["ROOT_DIR"]."/app/view/components/ajoutEcole.php");
    }
    
    public function getModifierSection(){
        if(isset($_GET["section"]) && $_GET["section"]=="modif")
        include($_SESSION["ROOT_DIR"]."/app/view/components/updateEcole.php");
    }



}
?>