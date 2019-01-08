<?php

require_once __DIR__."/../model/formation.php";

class FormationCtrl{

    private $model;

    public function __construct()
    {
        $this->model = new Formation();
    }

    public function getAllFormations(){
        return $this->model->getAll();
    }

    public function getFormationsByCategorie($category){
        return $this->model->getFormationsByCategorie($category);
    }

}