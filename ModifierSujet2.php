<?PHP
include "../controller/SujetCore.php";
$sujetC= new SujetCore();
if (isset($_POST["titre"]) && isset($_POST["texte"]) ){
  echo "oui";
  echo $_POST["sujet_id"];
  echo $_POST["titre"];
  echo $_POST["texte"];
	$sujetC->modifierSujet($_POST["sujet_id"],$_POST["titre"],$_POST["texte"]);
	header("Location: aziza.php");
}
echo "non";
?>