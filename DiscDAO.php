<?php

require("Disc.php");
require_once("DAO.php");


class DiscDAO extends DAO
{
    // Méthode pour insérer des données
    function insert($dis) {
        // générer une requête insert à partir de l'objet $dis (représentant un objet de la classe Disc)
        // exécuter cette requête à partir de la propriété $db
         $requete = $this->db->prepare("insert into disc (disc_title, disc_year, disc_label, disc_genre, disc_price, artist_id) values (?, ?, ?, ?, ?, ?);");
        $requete->execute(array($dis->getTitle(), $dis->getYear(), $dis->getLabel(), $dis->getGenre(), $dis->getPrice(), $dis->getArtist()));

    }
   
    // Méthode pour modifier
    function update($dis) {
         // générer une requête update à partir de l'objet $dis (représentant un objet de la classe Disc)
        // exécuter cette requête à partir de la propriété $db
        $requete = $this->db->prepare("update disc set disc_title=?, disc_year=?, disc_label=?, disc_genre=?, disc_price=?, artist_id=? where disc_id=?");
        $requete->execute(array( $dis->getTitle(), $dis->getYear(), $dis->getLabel(), $dis->getGenre(), $dis->getPrice(), $dis->getArtist(), $dis->getId()));
   
    }
    
    // Méthode pour supprimer
    function delete($dis) {

        $requete = $this->db->prepare("delete from disc where disc_id=?");
        $requete->execute(array($dis->getId()));
        
    }
    
    //Méthode pour chercher
    function find($id) {
        
        $requete = $this->db->prepare("select disc_id as id, disc_title as title , disc_year as year, disc_label as label, disc_genre as genre, disc_price as price, artist_id from disc;");
        $requete->execute(array($id));
        $requete->setFetchMode(PDO::FETCH_CLASS, "Disc");
        $dis = $requete->fetch();
        // $ligne = $requete->fetch(PDO::FETCH_OBJ);
        // $dis = new Disc();
        // $dis->setTitle($ligne->disc_title);
        // $dis->setYear($ligne->disc_year);
        return $dis;
    }
    
    //Méthode pour afficher toute la liste
    
    function liste() {
        
        $requete = $this->db->query("select * from disc");    //fetchALL affiche toutes les lignes d'une table
        $dis = $requete->fetchAll(PDO::FETCH_OBJ);
        // $requete->setFetchMode(PDO::FETCH_CLASS, "Disc");
        // $dis = $requete->fetchAll();
        // var_dump($dis);
        // echo count($dis);

        $disc_obj = new Disc;
        
        $tableau = array();


        for($i = 0; $i < 22; $i++)
        {
            $disc_obj->setId($dis[$i]->disc_id);
            $disc_obj->setTitle($dis[$i]->disc_title);
            $disc_obj->setYear($dis[$i]->disc_year);
            $disc_obj->setLabel($dis[$i]->disc_label);
            $disc_obj->setGenre($dis[$i]->disc_genre);
            $disc_obj->setPrice($dis[$i]->disc_price);
        }
        var_dump($disc_obj);

        return $dis;
    }

}





