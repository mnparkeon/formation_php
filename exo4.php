<?php
class User
{
    private $id;
    private $nom;

    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setId($i)
    {
        $this->id = $i;
    }
    public function setNom($n)
    {
        $this->nom = $n;
    }
}