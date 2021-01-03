<?PHP


	class UtilisateurC {
		
		function ajouterUtilisateur($nom,$prenom,$date,$email,$role,$telephone,$login,$password,$adresse){
			$sql="INSERT INTO Utilisateur (Nom, Prenom, Date_de_naissance, Email, Adresse, Telephone, Login, Password, Role, Active)
			VALUES ('$nom','$prenom','$date','$email','$adresse','$telephone','$login','$password','$role',0)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute();			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function afficherUtilisateurs(){
			$sql="SELECT * FROM Utilisateur where Active =1";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function afficherNotActiveUtilisateurs(){
			$sql="SELECT * FROM Utilisateur where Active =0";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerUtilisateur($id){
			$sql="DELETE FROM Utilisateur WHERE ID= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function validerUtilisateur($id,$email,$name){
			$sql="UPDATE Utilisateur SET ACTIVE = 1 WHERE ID= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();

				// Set required parameters for making an SMTP connection
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->Mailer = "smtp";
				$mail->SMTPDebug  = 1;  
				$mail->SMTPAuth   = TRUE;
				$mail->SMTPSecure = "tls";
				$mail->Port       = 587;
				$mail->Host       = "smtp.gmail.com";
				$mail->Username   = "sportn083@gmail.com
				";
				$mail->Password   = "sportnews123";

				// Set the required parameters for email header and body
				$mail->IsHTML(true);
				$mail->AddAddress($email, $name);
				$mail->SetFrom("sportn083@gmail.com				", "sport news");
				$mail->Subject = "Validation de votre compte Sportnews";
				$content = "<b>Bonjour $name,  Votre compte a été validé avec succés.</b>";

				//Send the email and catch required exceptions:
				$mail->MsgHTML($content); 
				if(!$mail->Send()) {
					echo "<script>alert('Mail n'est pas envoyé );</script>";
				var_dump($mail);
				} else {
					echo "<script>alert('Mail envoyé avec succés' );</script>";
				}
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		

function login($email,$password){
	$sql = "SELECT * FROM `Utilisateur` WHERE Login='$email' and Password = '$password'";
	 $db= config::getConnexion();
     try{
        $query=$db->prepare($sql);
        $query->execute();
		$count=$query->rowCount();

		if($count==0) {
			  $message = "pseudo ou le mot de passe est incorrect";
			  return $message;
        }else {
			  $x=$query->fetch();
			  return $x;
			//   echo "<script>console.log('Debug Objects: " . $x . "' );</script>";
      	}
       	}
            catch (Exception $e){
			   $message=" ".$e->getMessage();
			   return  $message;
       	}
		//    echo "<script>alert('message: " . $message . "' );</script>";
		//    return $message;
	  }
	  function modifierUtilisateur($id,$nom,$prenom,$date,$email,$telephone,$adresse){
		try {
			$db= config::getConnexion();
			$query = $db->prepare(
				"UPDATE utilisateur SET
				Nom = '$nom',
				Prenom = '$prenom',
				Email = '$email',
				Adresse = '$adresse',				
				Date_de_naissance = '$date',
				Telephone = '$telephone'
				WHERE ID = '$id'"
			);
	   $query->execute();
		 echo $query->rowCount() . "records UPDATER" ;
		} catch (PDOException $e) {
			 $e->getMessage();
	   }
   }
   function checkmail($email){
	$sql = "SELECT * FROM `Utilisateur` WHERE Email='$email'";
	 $db= config::getConnexion();
	 try{
		$query=$db->prepare($sql);
		$query->execute();
		$count=$query->rowCount();

		if($count==0) {
			  $message = "Incorrect";
			  return $message;
		}else {
			  $x=$query->fetch();
			  return $x["ID"];
		  }
		   }
			catch (Exception $e){
			   $message=" ".$e->getMessage();
			   return  $message;
		   }
   }

   function updatePassword($id,$password){
		$sql="UPDATE Utilisateur set Password='$password' where ID='$id' ";
		$db = config::getConnexion();
		try{
			$query = $db->prepare($sql);
		
			$query->execute();			
		}
		catch (Exception $e){
			echo 'Erreur: '.$e->getMessage();
		}			
	}
	

	}
	
	function modifierUtilisateur($id,$nom,$prenom,$date,$email,$telephone,$adresse){
		try {
			$db= config::getConnexion();
			$query = $db->prepare(
				"UPDATE Utilisateur SET
				Nom = '$nom',
				Prenom = '$prenom',
				Email = '$email',
				Adresse = '$adresse',
				
				Date_de_naissance = '$date',
				Telephone = '$telephone'
				WHERE ID = '$id'"
			);
	   $query->execute();
		 echo $query->rowCount() . "records UPDATER" ;
		} catch (PDOException $e) {
			 $e->getMessage();
	   }
   }
   function checkmail($email){
	$sql = "SELECT * FROM `Utilisateur` WHERE Email='$email'";
	 $db= config::getConnexion();
	 try{
		$query=$db->prepare($sql);
		$query->execute();
		$count=$query->rowCount();

		if($count==0) {
			  $message = "Incorrect";
			  return $message;
		}else {
			  $x=$query->fetch();
			  return $x["ID"];
		  }
		   }
			catch (Exception $e){
			   $message=" ".$e->getMessage();
			   return  $message;
		   }
   }

   function updatePassword($id,$password){
		$sql="UPDATE Utilisateur set Password='$password' where ID='$id' ";
		$db = config::getConnexion();
		try{
			$query = $db->prepare($sql);
		
			$query->execute();			
		}
		catch (Exception $e){
			echo 'Erreur: '.$e->getMessage();
		}			
	}
	



?>