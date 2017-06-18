<?php

include 'database.php';

class Usuarios extends DataBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function buscar($receta){
        $datos = array();
        $sth = $this->prepare('SELECT * FROM RECETAS '
                . 'WHERE NOMBRE_RECETA LIKE "%'.$receta.'%" ');
        $sth->execute();
        $result = $sth->fetchAll();
        
        foreach ($result as $key => $value) {
            $datos[] = array("value" => $value['NOMBRE_RECETA'],
            "idUsuario" => $value['ID_RECETA']);
        }
        
        return $datos;
        
    }
    
}