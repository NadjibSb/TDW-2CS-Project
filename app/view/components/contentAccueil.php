<div class="col-10 main d-flex justify-content-center align-items-center">
    <div class="row col-12 categories  justify-content-center d-flex align-items-center ">
        <?php
            require_once $_SESSION["ROOT_DIR"]."/app/model/Ecole.php";
            $ecole = new Ecole();
            $cat = $ecole->getCategories();
            foreach ($cat as $row){
                ?>
                    <div class="col-sm-3 categorie-item-container text-center">
                        <a id="cat" href="../Categorie/index.php?id=<?php echo $row["nom"]; ?> ">
                            <img class=" cat-icon text-center " src="../res/img/ecole.png" for="cat">
                            <div class="container col-12 categorie-item  text-center">  
                                <?php echo $row["nom"]; ?> 
                            </div>
                        </a>
                    </div>
                <?php
            }
        ?>
    </div>
</div>
