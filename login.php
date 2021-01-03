<?PHP
session_start();
 
 include '../controller/UtilisateurC.php';
 $message="";
 $userC = new UtilisateurC;
 if ((isset($_POST["login"]) &&
	 isset($_POST["password"])) || 
	  (!empty($_POST["login"]) &&
     !empty($_POST["password"])))
	{
	   $message=$userC->login($_POST["login"] , $_POST["password"]);

	   if($message=="Incorrect"){
		    $msg="Le pseudo ou le mot de passe est incorrect";
			echo "<script>alert('message: " . $msg. "' );</script>";
	   }else{
			$role=$message['Role'];
			$_SESSION['prenom'] = $message['Prenom'];
			$_SESSION['nom'] = $message['Nom'];
			$_SESSION['email'] = $message['Email'];
			$_SESSION['role'] = $message['Role'];
			$_SESSION['telephone'] = $message['Telephone'];
			$_SESSION['adresse'] = $message['Adresse'];
			$_SESSION['id'] = $message['ID'];
			$_SESSION['login'] = $message['Login'];
			$_SESSION['date'] = $message['Date_de_naissance'];
			if($role == "Admin"){
				header('location:../../Back/Views/starter.php');
			}else{
				header('location:acceuil.php');
			}
	   }
   }else{
	$message="missing information";
	echo "<script>alert($message);</script>";
   };	
?>


