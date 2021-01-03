<?php


class Categories
{
    private $id;
    private $name;
    private $images;

    function __construct($id,$name,$images)
    {
        $this->id=$id;
        $this->name=$name;
        $this->images=$images;
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

    /**
     * @return mixed
     */
    public function getimages()
    {
        return $this->images;
    }

    /**
     * @param mixed $cin
     */
    public function setid($id)
    {
        $this->id = $id;
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
}
