<?PHP
include "../controller/SujetCore.php";
$sujetC= new SujetCore();
if (isset($_GET["idtodelete"]) ){
	$sujetC->supprimerSujet($_GET["idtodelete"]);
	header("Location: aziza.php");
}

?>
