<div class="row header sticky-top align-items-center justify-content-between ">
    <div class="col-1 header-item">
        <!-- <img class="img" src="../res/img/logo.png"> -->
        <a href="<?php echo $_SESSION["ROOT_URL"]."/Accueil/" ?>"><img class="img" src="../res/img/logo.png"></a> 
    </div>
    <div class="col-4  justify-content-center">
        <h1 class="project-title">Projet WEB</h1>
    </div>
    <div class="col-1  justify-content-end">
    <button id="login" type="button" class="btn  btn-outline-success">Login</button>
    <button id="logout" type="button" class="btn  btn-outline-warning">Logout</button>
    </div>
</div>

<?php 
    if(isset($_SESSION['auth']) && $_SESSION['auth']==true){
?>
    <script>
            $("#logout").click(function(e){
                window.location.href='../app/controller/logout.php';
            });
            $("#login").hide();;
    </script>
    

<?php 
    }else{
?>  
    <script>
            $("#login").click(function(e){
                window.location.href='../Login/index.php';
            });
            $("#logout").hide();;
    </script>
<?php     
    }
?>


