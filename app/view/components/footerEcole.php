<div class="row footer fixed-bottom justify-content-center">

        <?php
        require_once $_SESSION["ROOT_DIR"]."/app/controller/ecoleCtrl.php";
        if(isset($_GET["ecole"])){
            $ctrl = new EcoleCtrl();
            $ecole =  $ctrl->getEcoleById($_GET["ecole"]);
        }
        ?>
        <div class="col-2">
            <p><?php echo $ecole["nom"]; ?></p> 
        </div>
        <div class="col-4">
            <p><?php echo $ecole["adresse"]." - ".$ecole["commune"]." - ".$ecole["wilaya"]; ?></p> 
        </div>
        <div class="col-2">
            <p>Telephone : <?php echo $ecole["telephone"]; ?></p> 
        </div>
        <div class="col-2">
            <p>Fax : <?php echo $ecole["fax"]; ?></p> 
        </div>
    </div>