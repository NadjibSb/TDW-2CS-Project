<?php
    require_once __DIR__."/../model/Ecole.php";
    require_once __DIR__."/../model/formation.php";
    require_once __DIR__."/../view/tableDisplay.php";
    require_once __DIR__."/../view/accueilEcole.php";

    if(isset($_GET['categ'])){
        $categ = $_GET['categ'];

        $e = new Ecole();
        $res = $e->getEcolesByCategorie($categ);

        $return=  "<option> Selection une ecole</option>";
        
        foreach ($res as $row) {
            $return = $return."<option value=\"".$row['id']."\"> ". $row['nom']."</option>";
        }
        echo $return;
        unset($res);
    }


    if(isset($_GET['ecoleId']) && isset($_GET['action']) && $_GET['action']=="supp"){

        $ecoleid = $_GET['ecoleId'];
        $e = new Ecole();
        $return = $e->suppEcole($ecoleid);

        

        echo $return;
    }


    if(isset($_GET["infoId"])){
        $ecoleId = $_GET["infoId"];
        $e = new Ecole();
        $ecol= $e->getEcoleById($ecoleId);

        $tableau = ' <table id="table-formation" align="center" class="table table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ecole</th>
                        <th>Wilaya</th>
                        <th>Commune</th>
                        <th>Adresse</th>
                        <th>Telephone</th>
                        <th>Fax</th>
                    </tr>
                </thead>
                <tbody>';
        $tableau .= '<tr>
                    <td id="ecoleId" nom="id" value="'.$ecol["id"].'">'.$ecol["id"].'</td>
                    <td>'.$ecol["nom"].'</td>
                    <td>'.$ecol["wilaya"].'</td>
                    <td>'.$ecol["commune"].'</td>
                    <td>'.$ecol["adresse"].'</td>
                    <td>'.$ecol["telephone"].'</td>
                    <td>'.$ecol["fax"].'</td>
                    </tr> ';

        $tableau.="</tbody> </table>";

        echo $tableau;

    }

    if(isset($_POST["add-ecole"])){
        $e = new Ecole();
        $r = $e->addEcole($_POST["Nom"],$_POST["Domaine"],$_POST["Categorie"],$_POST["Wilaya"],$_POST["Commune"],$_POST["Adresse"],$_POST["Telephone"],$_POST["Fax"]);
        header('location: ../../admin/index.php?section=ajout');
    }

    if(isset($_GET['ecoleId']) && isset($_GET['action']) && $_GET['action']=="modif"){
        $e = new Ecole();

        $ecol = $e->getEcoleById($_GET['ecoleId']);

        $res= '  <div class="form-group">
                <label class="col-md-4 control-label">Nom de lecole </label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input type="hidden" value="'.$ecol["id"].'" name="id" />
                        <input id="Nom" name="Nom" placeholder="Nom de lecole" class="form-control" required="true" value="'.$ecol["nom"].'" type="text">
                    </div>
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-4 control-label">Categorie de ecole</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon" style="max-width: 100%;">
                            <i class="glyphicon glyphicon-list"></i>
                        </span>
                        <select id="select_categorie1" name="Categorie" class="selectpicker form-control">
                            <option>Select Categorie</option>';
            
        $cat = $e->getCategories();

        foreach ($cat as $row){
            $res .= '<option value="'.$row["id"].'" ';
            if($row['id']==$ecol["categorieId"]) $res .= 'selected';
            $res .= '>'.$row["nom"].'</option>';
        }
        
        $res .='        </select>
                    </div>
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-4 control-label">Domaine de lecole</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <input id="Domaine" name="Domaine" placeholder="Domaine" class="form-control" value="'.$ecol["domaine"].'" type="text">
                    </div>
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-4 control-label">Wilaya de lecole</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <input id="Wilaya" name="Wilaya" placeholder="Wilaya" class="form-control" required="true" value="'.$ecol["wilaya"].'" type="text">
                    </div>
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-4 control-label">Commune de lecole</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <input id="Commune" name="Commune" placeholder="Commune" class="form-control" required="true" value="'.$ecol["commune"].'" type="text"></div>
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-4 control-label">Adresse de lecole</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <input id="Adresse" name="Adresse" placeholder="Adresse" class="form-control" required="true" value="'.$ecol["adresse"].'" type="text"></div>
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-4 control-label">Telephone</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <input id="Telephone" name="Telephone" placeholder="Telephone" class="form-control" required="true" value="'.$ecol["telephone"].'" type="text"></div>
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-4 control-label">Fax</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-earphone"></i>
                        </span>
                        <input id="Fax" name="Fax" placeholder="Fax" class="form-control" required="true" value="'.$ecol["fax"].'" type="text">
                    </div>
                </div><br>
                <div class="col-md-4 form-group">
                    <button	 class="btn btn-primary btn-block" type="submit" name="update-ecole" value="update-ecole" id="update-ecole">Update</button>
                </div>
                </div>
                ';
        echo $res;
    }

    if(isset($_POST["update-ecole"])){
        $e = new Ecole();
        $r = $e->updateEcole($_POST["id"],$_POST["Nom"],$_POST["Domaine"],$_POST["Categorie"],$_POST["Wilaya"],$_POST["Commune"],$_POST["Adresse"],$_POST["Telephone"],$_POST["Fax"]);
        header('location: ../../admin/index.php?section=modif');
    }

?>