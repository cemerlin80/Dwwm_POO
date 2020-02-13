<?php

//require("Disc.php");
require("DiscDAO.php");
require("Artist.php");
require_once("DAO.php");
require_once("Entity.php");
require("ArtistDAO.php");
 
//$dis = new Disc();

//$dis->setId(30);
/*
$dis->setTitle("Drama");
$dis->setYear(2000);
$dis->setLabel("Atlantic");
$dis->setGenre("Prog");
$dis->setPrice(55.44);
$dis->setArtist(2);
*/
//print_r($dis);
//echo $dis->getTitle(). $dis->getYear(). $dis->getGenre(). $dis->getArtist();

/*
  echo "Afficher la liste..";

$dao = new DiscDAO();
 
//$dao->insert($dis);
//$dao->update($dis);
//$dao->delete($dis);
//$id = $dao->find(4);
//$id =$dao->liste();



print_r($dis);
*/

$art = new Artist();

$art->setId("13");
$art->setName("Marillion");
$art->setUrl("");

//print_r($art);

echo "OK";

$artDAO = new ArtistDAO();

//$artDAO->insert($art); // OK
//artDAO->update($art); // Ok
//$artDAO->delete($art);  // OK
$art = $artDAO->find(8);  // Ok
//$id =$artDAO->liste();  // OK

print_r($art);


?>