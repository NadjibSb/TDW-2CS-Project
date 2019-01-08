<?php

require_once (__DIR__."/Db.php");

class Formation{

    function getAll(){
        $db =Db::connect();

        $requete = "SELECT * FROM FORMATIONS";
        return Db::execute_query($requete);
    }


    function getFormationsByCategorie($category){
        $requete = "SELECT * FROM FORMATIONS WHERE categorie = '".$category."'";
        return Db::execute_query($requete);
    }
}