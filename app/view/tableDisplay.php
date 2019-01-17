<?php

require_once __DIR__."/../controller/ecoleCtrl.php";
require_once __DIR__."/../controller/FormationCtrl.php";

class Table{
    private $ecoleCtrl;
    private $formationCtrl;

    public function __construct(){
        $this->ecoleCtrl = new EcoleCtrl();
        $this->formationCtrl = new FormationCtrl();

    }

    public function displayEcole($categorie){

        $ecoles = $this->ecoleCtrl->getEcolesByCategorie($categorie);
        $tableau = ' <table id="table-formation" align="center" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>Ecole</th>
                                <th>Wilaya</th>
                                <th>Commune</th>
                                <th>Adresse</th>
                                <th>Telephone</th>
                                <th>Fax</th>
                            </tr>
                        </thead>
                        <tbody>';
        foreach ($ecoles as $row)
        {
            $element = "<tr>
                            <td><a href=\"".$_SESSION["ROOT_URL"]."/Ecole/index.php?ecole=".$row["id"]."\">".$row["nom"]."</a></td>
                            <td>".$row["wilaya"]."</td>
                            <td>".$row["commune"]."</td>
                            <td>".$row["adresse"]."</td>
                            <td>".$row["telephone"]."</td>
                            <td>".$row["fax"]."</td>
                </tr> ";
            $tableau .= $element;
        }
        $tableau.="</tbody> </table>";
        echo $tableau;
    }

    public function displayEcoleMore($categorie){

        $ecoles = $this->ecoleCtrl->getEcolesByCategorie($categorie);
        $tableau = ' <table id="table-formation" align="center" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>Ecole</th>
                                <th>Domaine</th>
                                <th>Wilaya</th>
                                <th>Commune</th>
                                <th>Adresse</th>
                                <th>Telephone</th>
                                <th>Fax</th>
                            </tr>
                        </thead>
                        <tbody>';
        foreach ($ecoles as $row)
        {
            $element = "<tr>
                            <td><a href=\"".$_SESSION["ROOT_URL"]."/Ecole/index.php?ecole=".$row["id"]."\">".$row["nom"]."</a></td>
                            <td>".$row["domaine"]."</td>
                            <td>".$row["wilaya"]."</td>
                            <td>".$row["commune"]."</td>
                            <td>".$row["adresse"]."</td>
                            <td>".$row["telephone"]."</td>
                            <td>".$row["fax"]."</td>
                </tr> ";
            $tableau .= $element;
        }
        $tableau.="</tbody> </table>";
        echo $tableau;
    }

    public function displayFormationAll(){

        $formations = $this->formationCtrl->getAllFormation();
        $tableau = ' <table id="table-formation" align="center" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>Formation</th>
                                <th>Type de formation</th>
                                <th>Volume horaire</th>
                                <th>Prix</th>
                                <th>TTC</th>
                            </tr>
                        </thead>
                        <tbody>';
        foreach ($formations as $row)
        {
            $element = "<tr>
                            <td>".$row["nom"]."</td>
                            <td>".$row["type"]."</td>
                            <td>".$row["volumeH"]."</td>
                            <td>".$row["prix"]."</td>
                            <td>".$row["ttc"]."</td>
                </tr> ";
            $tableau .= $element;
        }
        $tableau.="</tbody> </table>";
        echo $tableau;
    }


    public function displayFormationOfEcole($id){

        if(isset($id)){
            $formations = $this->formationCtrl->getFormationsOfEcole($id);
            $tableau = ' <table id="table-formation" align="center" class="table table-striped table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>Formation</th>
                                    <th>Type de formation</th>
                                    <th>Volume horaire</th>
                                    <th>Prix</th>
                                    <th>TTC</th>
                                </tr>
                            </thead>
                            <tbody>';
            foreach ($formations as $row)
            {
                $element = "<tr>
                                <td>".$row["nom"]."</td>
                                <td>".$row["type"]."</td>
                                <td>".$row["volumeH"]."</td>
                                <td>".$row["prix"]."</td>
                                <td>".$row["ttc"]."</td>
                    </tr> ";
                $tableau .= $element;
            }
            $tableau.="</tbody> </table>";
            echo $tableau;

        }else{
            echo "<h3> Data not found</h3>";
        }
    }

    public function displayFormationOfEcoleWithoutStyle($id){

        if(isset($id)){
            $formations = $this->formationCtrl->getFormationsOfEcole($id);
            $tableau = ' <table  align="center" class="table table-striped table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>Formation</th>
                                    <th>Type de formation</th>
                                    <th>Volume horaire</th>
                                    <th>Prix</th>
                                    <th>TTC</th>
                                </tr>
                            </thead>
                            <tbody>';
            foreach ($formations as $row)
            {
                $element = "<tr>
                                <td>".$row["nom"]."</td>
                                <td>".$row["type"]."</td>
                                <td>".$row["volumeH"]."</td>
                                <td>".$row["prix"]."</td>
                                <td>".$row["ttc"]."</td>
                    </tr> ";
                $tableau .= $element;
            }
            $tableau.="</tbody> </table>";
            echo $tableau;

        }else{
            echo "<h3> Data not found</h3>";
        }
    }


    public function displayFormationByType($type){

        $formations = $this->formationCtrl->getFormationsByType($type);
        $tableau = ' <table id="table-formation" align="center" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>Formation</th>
                                <th>Type de formation</th>
                                <th>Volume horaire</th>
                                <th>Prix</th>
                                <th>TTC</th>
                            </tr>
                        </thead>
                        <tbody>';
        foreach ($formations as $row)
        {
            $element = "<tr>
                            <td>".$row["nom"]."</td>
                            <td>".$row["type"]."</td>
                            <td>".$row["volumeH"]."</td>
                            <td>".$row["prix"]."</td>
                            <td>".$row["ttc"]."</td>
                </tr> ";
            $tableau .= $element;
        }
        $tableau.="</tbody> </table>";
        return $tableau;
    }
}