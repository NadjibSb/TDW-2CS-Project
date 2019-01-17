<?php

require_once __DIR__."/../model/formation.php";

class FormationCtrl{

    private $model;

    public function __construct()
    {
        $this->model = new Formation();
    }

    public function getAllFormation(){
        $formations = $this->model->getAll();
        for ($i=0 ; $i<count($formations) ; $i++)
        {
            $formations[$i]["ttc"] = $formations[$i]["prix"] +  ($formations[$i]["prix"] * 19 / 100);
            $formations[$i]["type"] = $this->model->getTypeById($formations[$i]["typeId"]);
        }
        return $formations;
    }

    public function getFormationsByType($type){
        $formations =  $this->model->getFormationsByType($type);
        for ($i=0 ; $i<count($formations) ; $i++)
        {
            $formations[$i]["ttc"] = $formations[$i]["prix"] +  ($formations[$i]["prix"] * 19 / 100);
            $formations[$i]["type"] = $this->model->getTypeById($formations[$i]["typeId"]);
        }
        return $formations;
    }

    public function getFormationsOfEcole($id){
        $formations =  $this->model->getFormationsOfEcole($id);
        for ($i=0 ; $i<count($formations) ; $i++)
        {
            $formations[$i]["ttc"] = $formations[$i]["prix"] +  ($formations[$i]["prix"] * 19 / 100);
            $formations[$i]["type"] = $this->model->getTypeById($formations[$i]["typeId"]);
        }
        return $formations;
    }

}