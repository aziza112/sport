<?php


class produits
{
    private $id;
    private $name;
    private $images;
    private $prix;

    function __construct($id,$name,$images,$prix)
    {
        $this->id=$id;
        $this->name=$name;
        $this->images=$images;
        $this->prix=$prix;
    }

    /**
     * @return mixed
     */
    public function getid()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getname()
    {
        return $this->name;
    }
    public function getcategorie()
    {
        return $this->categorie;
    }

    /**
     * @return mixed
     */
    public function getimages()
    {
        return $this->images;
    }

    public function getprix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $cin
     */
    public function setid($id)
    {
        $this->id = $id;
    }
    public function setcategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @param mixed $nom
     */
    public function setname($name)
    {
        $this->name = $name;
    }

   
    /**
     * @param mixed $date
     */
    public function setimages($images)
    {
        $this->images=$images;
    }
    public function setprix($prix)
    {
        $this->prix=$prix;
    }
}
