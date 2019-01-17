<?php

require_once (__DIR__."/Db.php");

class Ecole{

    public function __construct(){
    }

    function getAll(){
        $db =Db::connect();

        $requete = "SELECT * FROM Ecole";
        return Db::execute_query($requete);
    }


    function getEcolesByCategorie($category){
        $requete = "SELECT * FROM Ecole WHERE categorieId = (SELECT id FROM Categorie WHERE nom = '$category' LIMIT 1)";
        return Db::execute_query($requete);
    }

    function getCategories(){
        $requete = "SELECT * FROM Categorie";
        return Db::execute_query($requete);
    }

    public function getEcoleById($id){
        $requete = "SELECT * FROM Ecole WHERE id = '$id' LIMIT 1";
        return Db::execute_query($requete)[0];
    }

    public function addComment($comment,$userId,$ecoleId){        
        $requete = "INSERT INTO Commentaire (contenu,ecoleId,userId,date) 
                     VALUES ('$comment',$ecoleId,$userId,NOW())";
        $err = Db::execute_query($requete);
    }

    public function getCommentaires($ecoleId){
        $requete = "SELECT * FROM Commentaire WHERE ecoleId = $ecoleId ORDER BY date DESC";
        return Db::execute_query($requete);
    }

    public function suppEcole($ecoleId){
        $requete = "USE TDW;
                    DELETE FROM Commentaire WHERE ecoleId=$ecoleId;
                    DELETE FROM Formation WHERE ecoleId=$ecoleId;
                    DELETE FROM Ecole WHERE id=$ecoleId;";
        $r= Db::execute_query($requete);
        return print_r($r);
    }

    public function addEcole($nom,$domaine,$categoryId,$wilaya,$commune,$adr,$tlf,$fax){        
        $requete = "INSERT INTO Ecole( nom, categorieId, domaine, wilaya, commune, adresse, telephone, fax) 
                     VALUES ('$nom',$categoryId,'$domaine','$wilaya','$commune','$adr','$tlf','$fax')";
        $err = Db::execute_query($requete);
    }

    public function updateEcole($id,$nom,$domaine,$categoryId,$wilaya,$commune,$adr,$tlf,$fax){              
        $requete = "UPDATE Ecole
                    SET nom='$nom',categorieId=$categoryId,domaine='$domaine',wilaya='$wilaya',commune='$commune',adresse='$adr',telephone='$tlf',fax='$fax'
                    WHERE id=$id";
        $err = Db::execute_query($requete);
    }




    
}

?>