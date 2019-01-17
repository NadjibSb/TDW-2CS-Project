<div class="col-10 main  justify-content-center align-items-center ">

    <!-- selection -->
    <div class="row  ecoles  justify-content-center d-flex " >
        <!-- tab 1 -->
        <div class="col-6 col-left">
            <div class="col-md-4">
                <select id="select_categorie1"> 
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
            <div class="col-md-4">
                <select id="selectEcole1">
                </select>
            </div>
        </div>
        <!-- tab 2 -->
        <div class="col-6 col-right ">
            <div class="col-md-4">
                <select id="select_categorie2"> 
                    <option value="">selectionner une categorie</option>
                    <?php 
                        foreach ($cat as $row){
                            echo "<option value=\"".$row['nom']."\">".$row['nom']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <select id="selectEcole2">
                </select>
            </div>
        </div>
    </div>

    <!-- tables -->
    <div class="row  ecoles  justify-content-center d-flex " >
        <div class="col-6 col-left ">
            <div id="table1" >
            </div>
        </div>
        <div class="col-6 col-left ">
            <div id="table2">
            </div>
        </div>
        
    </div>

    <!-- commentaire -->
    <div class="row  ecoles  justify-content-center d-flex " >
        <div class="col-6 col-left">
            <div id="comment1" >

            </div>
        </div>

        <div class="col-6 col-left">
            <div id="comment2">

            </div>
        </div>
        
    </div>

</div>