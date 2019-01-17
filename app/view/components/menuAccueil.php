<div class="col-2 menu justify-content-center align-items-center ">
    <div class="list-group">
        <a href=" <?php echo $_SESSION["ROOT_URL"]."/Accueil/";?>" class="list-group-item list-group-item-action \">Accueil</a>
        
        <?php
            require_once $_SESSION["ROOT_DIR"]."/app/model/Ecole.php";
            $ecole = new Ecole();
            $cat = $ecole->getCategories();

            foreach ($cat as $row){
                echo "<a href=\"". $_SESSION["ROOT_URL"]."/Categorie/index.php?id=".$row["nom"]."\" class=\"list-group-item list-group-item-action \">".$row["nom"]."</a>";
            } 
        ?>
        <a href="#" class="list-group-item list-group-item-action \">A propos</a>
    </div>
    <div class="list-group comparer" style="margin-top: 30px;">
        <a href=" <?php echo $_SESSION["ROOT_URL"]."/Compar/";?>" class="list-group-item list-group-item-action">Comparer entre 2 Ecoles</a>
        <?php
        if(isset($_SESSION['auth']) && $_SESSION['auth']==true && $_SESSION['username']=='admin'){
            echo '<a href="'.$_SESSION["ROOT_URL"].'/admin/index.php?section=ajout" class="list-group-item list-group-item-action"> Admin Dashboard</a>';
        }
        ?>
    </div>
</div>