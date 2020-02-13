<?php
require_once("Entity.php");
require_once("DAO.php");

class ArtistDAO extends DAO{

    // Méthode pour insérer des données
    function insert($art) {
        // générer une requête insert à partir de l'objet $dis (représentant un objet de la classe Disc)
        // exécuter cette requête à partir de la propriété $db
         $requete = $this->db->prepare("insert into artist (artist_name, artist_url) values (?, ?);");
        $requete->execute(array($art->getName(), $art->getUrl()));  

    }
   
    // Méthode pour modifier
    function update($art) {
         // générer une requête update à partir de l'objet $dis (représentant un objet de la classe Disc)
        // exécuter cette requête à partir de la propriété $db
        $requete = $this->db->prepare("update artist set artist_name=? , artist_url=? where artist_id=?");
        $requete->execute(array($art->getName(), $art->getUrl(), $art->getId()));
   
    }
    
    // Méthode pour supprimer
    function delete($art) {

        $requete = $this->db->prepare("delete from artist where artist_id=?");
        $requete->execute(array($art->getId()));
        
    }
    
    //Méthode pour chercher
    function find($id) {
        
        $requete = $this->db->prepare("select artist_id as id, artist_name as name, artist_url as url from artist where artist_id=?;");
        $requete->execute(array($id));
        $requete->setFetchMode(PDO::FETCH_CLASS, "Artist");
        $art = $requete->fetch();
        // $ligne = $requete->fetch(PDO::FETCH_OBJ);
        // $dis = new Disc();
        // $dis->setTitle($ligne->disc_title);
        // $dis->setYear($ligne->disc_year);
        return $art;
    }
    
    //Méthode pour afficher toute la liste

    function liste() {
         
        $requete = $this->db->query("select * from artist");    //fetchALL affiche toutes les lignes d'une table
        $art = $requete->fetchAll(PDO::FETCH_OBJ);
        print_r($art);
        

        return $art;
        
        
    }
}







































?>