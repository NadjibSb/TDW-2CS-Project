<?php
require_once __DIR__."/../controller/ecoleCtrl.php";

class AccueilEcole{

    private $controller;

    public function __construct()
    {
        $this->controller = new EcoleCtrl();
    }

    public function getEcoleName(){
        if(isset($_GET["ecole"])){
            $id = $_GET["ecole"];
            $ecole = $this->controller->getEcoleById($id);
            echo "  <div class=\" row justify-content-center ecole-name\">
                        <h1 class=\"  \">".$ecole["nom"]."</h1>
                    </div>";
        
        }else{
            echo "<h1>ERROR : Ecole not specified </h1>";
        }
    }

    public function getDiapo(){
        include($_SESSION["ROOT_DIR"]."/app/view/components/diapoEcole.php");
    }

    public function getVideo(){
        echo "  <div class=\" row justify-content-center video \">
                    <video src=\"./../res/img/video.mp4\" controls autoplay  ></video>
                </div>";
    }

    public function getAddCommentaire(){
        if(isset($_SESSION['auth']) && $_SESSION['auth']==true){
        ?>
            <div class="container col-8 comment justify-content-center">
                <h2 class="text-center" >Ajouter un commentaire</h2>
                <form class="input-group" action="" method="POST" id="commentform">
                    <textarea type="text" rows="2" name="comment" class="form-control" placeholder="Commentaire ..."></textarea>
                    <button	 class="btn btn-primary btn-block" type="submit" name="add-comment" value="add-comment" id="add-comment">
                    Ajouter commentaire</button>
                </form>
		    </div>
        <?php
        }
    }

    public function handleAddComment(){
        if(isset($_POST["add-comment"]) && isset($_POST["comment"]) && isset($_SESSION["userId"]) && isset($_GET["ecole"])){
            $this->controller->addComment($_POST["comment"],$_SESSION["userId"],$_GET["ecole"]);
        }
    }

    public function getCommentaires($ecoleId){
        $comment = $this->controller->getCommentaires($ecoleId);

        $res = '<div class="container col-8 comment justify-content-center">
                <h2 class="text-center" >Commentaires</h2>
                <ul class="list-group">';
                    
        foreach ($comment as $row){
        $res = $res.'<li class="list-group-item">
                        <ul class="media-list " style="padding: auto;marging: auto;">
                            <li class="media"  >
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="../res/img/comment.png" alt="..." style="height : 5em;">
                                    </a>
                                </div>
                                <div class="media-body" style="padding-left: 2em;">
                                    <h4 class="media-heading h5">'.$row["user"].'</h4>
                                    <p classe="lead" style="color: gray;"><'.$row["date"].'</p>
                                    <p class="h6" >'.$row["contenu"].'</p>
                                </div>
                            </li>
                        </ul>
                    </li>';
                    
                    }

        $res = $res.'</ul></div>';
        return $res;
    }

    public function getFooter(){
        include($_SESSION["ROOT_DIR"]."/app/view/components/footerEcole.php");
    }
    
}
?>