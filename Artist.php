<?php

require_once("Entity.php");


class Artist extends Entity 
{
    private $name;
    private $url;
    
        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getUrl()
        {
            return $this->url;
        }

        public function setUrl($url)
        {
            $this->url = $url;
        }
    
}





























?>