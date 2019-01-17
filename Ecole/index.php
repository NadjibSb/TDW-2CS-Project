<?php 
	session_start();
	require_once $_SESSION["ROOT_DIR"]."/app/view/accueilEcole.php";
	require_once $_SESSION["ROOT_DIR"]."/app/view/tableDisplay.php";
	$view = new AccueilEcole();
	$view->handleAddComment();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Site de l'Ecole</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <link rel="stylesheet" type="text/css" media="screen" href="../res/bootstrap-4/css/bootstrap.min.css" />
    <script type="text/javascript" src="../res/JQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./style/ecole.css">
    <link rel="stylesheet" type="text/css" href="../res/JQuery/DataTables/datatables.min.css">
    <script type="text/javascript" charset="utf8" src="../res/JQuery/DataTables/datatables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="../Accueil/style/main.js"></script>
</head>
<body>
	<div class="container-fluid body fill-height justify-content-center">
		<!-- header -->
		<?php
				require_once $_SESSION["ROOT_DIR"]."/app/view/accueil.php";
				$main = new Accueil();
				$main->getHeader();
		?>
		<div class=" body-container justify-content-center">
			<div class="container justify-content-center">
				<?php
					$view->getEcoleName();
					$view->getDiapo();
					$table = new Table();
					$table->displayFormationOfEcole($_GET["ecole"]);
					$view->getAddCommentaire();
					echo $view->getCommentaires($_GET["ecole"]);
					$view->getVideo()
				?>

				<br/><br/>
			</div>
		</div>
		<?php
			$view->getFooter();
		?>
	</div>
</body>
</html>