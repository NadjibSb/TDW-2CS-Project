<?php

require_once (__DIR__."/Db.php");

class Formation{

    public function __construct(){
    }

    function getAll(){
        $db =Db::connect();

        $requete = "SELECT * FROM Formation";
        return Db::execute_query($requete);
    }


    function getFormationsByType($type){
        $requete = "SELECT * FROM Formation WHERE typeId = (SELECT id FROM TypeFormation WHERE nom = '$type' LIMIT 1)";
        return Db::execute_query($requete);
    }

    function getFormationsOfEcole($id){
        $requete = "SELECT * FROM Formation WHERE ecoleId = '$id'";
        return Db::execute_query($requete);
    }
    

    function getTypeById($id){
        $requete = "SELECT nom FROM TypeFormation WHERE id = '$id' LIMIT 1";
        return Db::execute_query($requete)[0]["nom"];
    }

}