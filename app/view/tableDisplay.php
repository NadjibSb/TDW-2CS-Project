<?php

require_once __DIR__."/../controller/formationCtrl.php";

class Table{
    private $controller;

    public function __construct(){
        $this->controller = new FormationCtrl();
    }

    public function display(){

        $formations = $this->controller->getFormationsByCategorie('universitaire');
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
        foreach ($formations as $row)
        {
            $element = "<tr>
                            <td>".$row["Ecole"]."</td>
                            <td>".$row["Wilaya"]."</td>
                            <td>".$row["Commune"]."</td>
                            <td>".$row["Adresse"]."</td>
                            <td>".$row["Telephone"]."</td>
                            <td>".$row["Fax"]."</td>
                </tr> ";
            $tableau .= $element;
        }
        $tableau.="</tbody> </table>";
        echo $tableau;
    }

    public function displayMore(){

        $formations = $this->controller->getFormationsByCategorie('universitaire');
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
        foreach ($formations as $row)
        {
            $element = "<tr>
                            <td>".$row["Ecole"]."</td>
                            <td>".$row["Domaine"]."</td>
                            <td>".$row["Wilaya"]."</td>
                            <td>".$row["Commune"]."</td>
                            <td>".$row["Adresse"]."</td>
                            <td>".$row["Telephone"]."</td>
                            <td>".$row["Fax"]."</td>
                </tr> ";
            $tableau .= $element;
        }
        $tableau.="</tbody> </table>";
        echo $tableau;
    }
}