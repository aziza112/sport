<?PHP
	include "../config.php";

	class SujetCore {
		
		function ajouterSujet($Sujet){
			$sql="INSERT INTO sujet ( texte, userid, titre,etat) 
			VALUES ( :texte, :userid, :titre ,:etat)";
			var_dump($sql);
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
                    'texte' => $Sujet->getTexte(),
                    'userid' => 10,
										'titre' => $Sujet->getTitre(),
										'etat' => 0
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
        }
        

        function getSujet($id){
            $sql="SELECT * FROM sujet where id=$id";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	

        }
		
		function afficherSujets(){
			
			$sql="SELECT * FROM sujet";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function resoudreSujet($id){
			
			$sql="update sujet SET etat= 1 where id= :id";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$req->bindValue(':id',$id);
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function deresoudreSujet($id){
			
			$sql="update sujet SET etat= 0 where id= :id";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$req->bindValue(':id',$id);
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function supprimerSujet($id){
			$sql="DELETE FROM sujet WHERE id= :id1";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id1',$id);

			$sql2="DELETE FROM commentaire WHERE sujetid= :id2";
			$req2=$db->prepare($sql2);
			$req2->bindValue(':id2',$id);
			

			try{
				$req->execute();
				$req2->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
        }
        

		function modifierSujet($id,$titre,$texte)
		{
			$sql="update sujet SET titre= :titre, texte= :texte where id= :id";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$req->bindValue(':titre',$titre);
				$req->bindValue(':texte',$texte);
				$req->bindValue(':id',$id);
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function modifier($nom,$prenom,$email,$msg,$commentaire)
    {
        $sql="update forumm.topic set nom= '$nom', prenom='$prenom', email='$email'', msg='$msg', commentaire='$commentaire'' where id='$id'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('erreur:'.$e->getMessage());
        }
    }

		 
		
	}

?>