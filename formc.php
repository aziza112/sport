<?php

include_once "../config.php";
class formc
{
    function ajouterform($form)
    {

        $sql= "insert into actualite(ID, titre, description, image) values (:ID,:titre,:description,:image)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $id=$form->getID();
            $titre=$form->gettitre();
            $description=$form->getdescription();
            $image=$form->getimage();
            $req->bindValue(':ID',$id);
            $req->bindValue(':titre',$titre);
            $req->bindValue(':description',$description);
            $req->bindValue(':image',$image);

            echo "string";

            $req->execute();


        }
        catch (Exception $e)
        {
            die('Erreur: Un coach avec cet ID existe deja');
        }
    }
    function afficherform()
    {
        $sql="select * from sportnews1.actualite";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur:' .$e->getMessage());
        }
    }
    function modifierform($ID,$titre,$description)
    {
        $sql="update sportnews1.actualite set titre= '$titre', description='$description' where id='$ID'";
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
   function delete($ID)
    {
        $sql="DELETE FROM sportnews1.actualite WHERE ID = '$ID' ";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
}