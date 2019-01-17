<!-- selection -->
<div class="row col-10   justify-content-center d-flex " >
        <div class="container justify-content-center " style="padding:50px;">
            <h2>Supprimer une ecole :</h2>
            <div class=" container">
                <select id="select_categorie1" style="padding:10px;"> 
                    <option value="">selectionner une categorie</option>
                    <?php 
                        require_once $_SESSION["ROOT_DIR"]."/app/model/Ecole.php";
                        $ecole = new Ecole();
                        $cat = $ecole->getCategories();
            
                        foreach ($cat as $row){
                            echo "<option value=\"".$row['nom']."\">".$row['nom']."</option>";
                        }
                    ?>
                </select>
            </div>

            <div class=" container">
                <select id="selectEcole1" style="padding:10px;marging :10px;">
                </select>
            </div>

            <div id="infoEcole" class="container" >
            </div>

            <button id="suppEcole" type="button" class="btn btn-danger">Supprimer </button>

        </div>
</div>