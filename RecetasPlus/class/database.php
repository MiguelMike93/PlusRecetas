<?php

class DataBase extends PDO{
    
    public $action;
    public function __construct() {
        try{
            parent::__construct('mysql:host=sql313.epizy.com;dbname=epiz_19830617_recetasPlusdb','epiz_19830617','miguel1993');
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->exec("set names utf8");
        } catch (Exception $ex) {
            echo "Error al conectar a la base de datos. <br>".$ex;
        }
        
    }    
}
