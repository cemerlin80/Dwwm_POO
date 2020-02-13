<?php
require_once("Entity.php");
class Disc extends Entity // Création de la class Disc , de la table Disc
{
    // Les attributs
    private $title;
    private $year;
    private $label;
    private $genre;
    private $price;
    private $artist;

    // Titre
    public function getTitle() 
    {
        return $this->title;          
    } 
 
    public function setTitle($title) 
    {
        $this->title = $title;
    }  

    // L'année

    public function getYear() 
    {
        return $this->year;          
    } 
 
    public function setYear($year) 
    {
        $this->year = $year;
    }   

    //Label 

    public function getLabel()
    {
        return $this->label;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

    // Genre 

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }
    
    // Prix
    
    public function getPrice()
    {
       return $this->price;                        
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
    
    //l'artiste

    public function getArtist()
    {
        return $this->artist;
    }

    public function setArtist($artist)
    {
        $this->artist = $artist;
    }
 
    // accesseurs (get/set) pour les propriétés year, genre
}


  