<?php

include "../config.php";
class produitsc
{
    function ajouterproduits($produits)
    {

        $sql= "insert into produits(id, name, categorie, images,prix) values (:id,:name, categorie,:images,:prix)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $id=$produits->getid();
            $name=$produits->getname();
            $categorie=$produits->getcategorie();
            $images=$produits->getimages();
            $prix=$produits->getprix();
            $req->bindValue(':id',$id);
            $req->bindValue(':name',$name);
            $req->bindValue(':categorie',$categorie);
            $req->bindValue(':images',$images);
            $req->bindValue(':prix',$prix);
            echo "string";

            $req->execute();


        }
        catch (Exception $e)
        {
            die('Erreur: Un coach avec cet id existe deja');
        }
    }
    
   
    function afficherproduits()
    {
        $sql="select * from sportnews1.produits";

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
    function modifierproduits($id,$name,$images,$categorie)
    {
        $sql="update sportnews1.produits set name= '$name',  categorie='$categorie',  images='$images' where id='$id'";
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
   function delete($id)
    {
        $sql="DELETE FROM sportnews1.produits WHERE id = '$id' ";
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
