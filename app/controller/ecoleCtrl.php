<?php

require_once __DIR__."/../model/Ecole.php";
require_once __DIR__."/../model/user.php";

class EcoleCtrl{

    private $model;

    public function __construct()
    {
        $this->model = new Ecole();
    }

    public function getAllEcoles(){
        return $this->model->getAll();
    }

    public function getEcolesByCategorie($category){
        return $this->model->getEcolesByCategorie($category);
    }

    public function getEcoleById($id){
        return $this->model->getEcoleById($id);
    }

    public function addComment($comment,$userId,$ecoleId){
        $this->model->addComment($comment,$userId,$ecoleId);
    }


    public function getCommentaires($ecoleId){
        $comment = array();

        if(isset($ecoleId)){
            $comment = $this->model->getCommentaires($ecoleId);
            $user = new User();

            for ($i=0 ; $i<count($comment) ; $i++)
            {
                $comment[$i]["user"] = $user->getUserById($comment[$i]["userId"])["username"];
                $comment[$i]["ecole"] = $this->model->getEcoleById($comment[$i]["ecoleId"])["nom"];
            }
        }
        return $comment;
    }



}