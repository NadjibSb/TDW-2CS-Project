<div id="AjouterSection" class="row col-10 justify-content-center d-flex " >
    <div class="container  justify-content-center " style="padding:50px;">
        <h2>Ajouter une ecole :</h2><br><br>
        <div class="container ">
            <form class="col-12 well" method="POST" action="<?php echo $_SESSION["ROOT_URL"]."/app/controller/gestionEcole.php"; ?>">
                <fieldset>
                    <div class="form-group">
                    <label class="col-md-4 control-label">Nom de l'ecole </label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input id="Nom" name="Nom" placeholder="Nom de l'ecole" class="form-control" required="true" value="" type="text">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-4 control-label">Categorie de l'ecole</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon" style="max-width: 100%;">
                                <i class="glyphicon glyphicon-list"></i>
                            </span>
                            <select id="select_categorie1" name="Categorie" class="selectpicker form-control">
                                <option>Select Categorie</option>
                                <?php 
                                require_once $_SESSION["ROOT_DIR"]."/app/model/Ecole.php";
                                $ecole = new Ecole();
                                $cat = $ecole->getCategories();
                    
                                foreach ($cat as $row){
                                    echo "<option value=\"".$row['id']."\">".$row['nom']."</option>";
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-4 control-label">Domaine de l'ecole</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-home"></i>
                            </span>
                            <input id="Domaine" name="Domaine" placeholder="Domaine" class="form-control" value="" type="text">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-4 control-label">Wilaya de l'ecole</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-home"></i>
                            </span>
                            <input id="Wilaya" name="Wilaya" placeholder="Wilaya" class="form-control" required="true" value="" type="text">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-4 control-label">Commune de l'ecole</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-home"></i>
                            </span>
                            <input id="Commune" name="Commune" placeholder="Commune" class="form-control" required="true" value="" type="text"></div>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-4 control-label">Adresse de l'ecole</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-home"></i>
                            </span>
                            <input id="Adresse" name="Adresse" placeholder="Adresse" class="form-control" required="true" value="" type="text"></div>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-4 control-label">Telephone</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-home"></i>
                            </span>
                            <input id="Telephone" name="Telephone" placeholder="Telephone" class="form-control" required="true" value="" type="text"></div>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-4 control-label">Fax</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-earphone"></i>
                            </span>
                            <input id="Fax" name="Fax" placeholder="Fax" class="form-control" required="true" value="" type="text">
                        </div>
                    </div><br>
                    <div class="col-md-4 form-group">
                        <button	 class="btn btn-primary btn-block" type="submit" name="add-ecole" value="add-ecole" id="add-ecole">Ajouter</button>
                    </div>
                    </div>
                    
                </fieldset>
            </form>
    
    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaa -->

        </div>
    </div>
    
</div>


