<?php

class Accueil{

    public function getHeader(){
        include($_SESSION["ROOT_DIR"]."/app/view/components/headerAccueil.php");
    }

    public function getDiapo(){
        include($_SESSION["ROOT_DIR"]."/app/view/components/diapoAccueil.php");
    }

    public function getMenu(){
        include($_SESSION["ROOT_DIR"]."/app/view/components/menuAccueil.php");
    }

    public function getContentCategories(){
        include($_SESSION["ROOT_DIR"]."/app/view/components/contentAccueil.php");
    }

    public function getFooter(){
        include($_SESSION["ROOT_DIR"]."/app/view/components/footerAccueil.php");
    }

    public function getContentListeEcole(){
        include($_SESSION["ROOT_DIR"]."/app/view/components/contentCategorie.php");
    }

    public function getContentCompar(){
        include($_SESSION["ROOT_DIR"]."/app/view/components/contentCompar.php");
    }


}