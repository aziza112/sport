<?PHP
include "../controller/CommentaireCore.php";
include "../config.php";

$commentaireC= new CommentaireCore();
if (isset($_GET["comtodelete"]) ){
	$commentaireC->supprimerCommentaire($_GET["comtodelete"]);
  header("Location:consulterSujet.php?id=".$_GET["sujet_id"]);
}

?>
