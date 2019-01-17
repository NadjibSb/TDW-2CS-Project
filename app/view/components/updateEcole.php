<div id="AjouterSection" class="row col-10 justify-content-center d-flex " >
    <div class="container  justify-content-center " style="padding:50px;">
        <h2>Update une ecole :</h2><br><br>
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
        </div><br><br>



        <div class="container ">
            <form id="update-form" class="col-12 well" method="POST" action="<?php echo $_SESSION["ROOT_URL"]."/app/controller/gestionEcole.php"; ?>">
                <fieldset id="form-content">
                    
                    
                </fieldset>
            </form>
    

        </div>
    </div>
    
</div>

