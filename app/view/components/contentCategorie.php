<div class="col-10 main d-flex justify-content-center align-items-center">
    <div class="row col-12 ecoles  justify-content-center d-flex align-items-center" >
        <?php

            require_once $_SESSION["ROOT_DIR"]."/app/view/tableDisplay.php";
            $table = new Table();
            if(isset($_GET["id"])){
                $categorie = $_GET["id"];
                echo "<div class=\"row categorie-name align-items-center col-12 \">
                            <div class=\" h3 \"> Categorie : </div>
                            <div class=\" h4 \" style=\"padding-left: 5px;\"> ".$categorie."</div>
                        </div>";
                
                if($categorie=="professionnelle" || $categorie=="universitaire"){
                    $table->displayEcoleMore($categorie);
                }else{
                    $table->displayEcole($categorie);
                }
                
            }else{
                echo "<h1>ERROR : Categorie not specified</h1>";
            }

        ?>
        
    </div>

</div>