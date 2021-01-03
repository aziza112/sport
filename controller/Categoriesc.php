<?php

include "../config.php";
class Categoriesc
{
    function ajouterCategories($Categories)
    {

        $sql= "insert into Categories(id, name, images) values (:id,:name,:images)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $id=$Categories->getid();
            $name=$Categories->getname();
            $images=$Categories->getimages();
            $req->bindValue(':id',$id);
            $req->bindValue(':name',$name);
            $req->bindValue(':images',$images);
            echo "string";

            $req->execute();


        }
        catch (Exception $e)
        {
            die('Erreur: Un coach avec cet id existe deja');
        }
    }
    function afficherCategories()
    {
        $sql="select * from sportnews1.Categories";

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
    function modifierCategories($id,$name,$images)
    {
        $sql="update sportnews1.Categories set name= '$name',  images='$images' where id='$id'";
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
        $sql="DELETE FROM sportnews1.Categories WHERE id = '$id' ";
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
