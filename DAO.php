<?php


class DAO 
{
    protected $db;

// Constructeur
function __construct() {
    $this->db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', "root", "280390");  
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}


}


?>







