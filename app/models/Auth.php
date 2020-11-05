<?php
class Auth{
    private $db;
    public function __construct(){
        $this->db=new Base;
        
    }
    
    public function buscarUsuario($datos){
        if(!$this->verificar($datos)){
            $bind=array($datos['correo'],$datos['password']);
            $sql="select * from usuarios where Email=? and Contrasena=? ";
            $renglon=$this->db->queryOne($sql,$bind);
            return $renglon;
        
        }else{
            
        }
        
    }
    public function verificar($datos){
        return empty($datos['correo']) || empty($datos['password']);
    }
}

?>