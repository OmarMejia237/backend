<?php
class Admin{
    private $db;
    
    public function __construct(){
        $this->db=new Base;
    }
public function obtenerTabla(){

        $resultados=$this->db->query("SELECT * FROM estadistica");
        return $resultados;
        
    }
}