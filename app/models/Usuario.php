<?php
class Usuario{
    private $db;
    
    public function __construct(){
        $this->db=new Base;
    }
    public function obtenerUsuarios(){
        $resultados=$this->db->query("select * from usuarios ");
        return $resultados;
        
    }
    public function agregarUsuario($datos){
        $bind=array(
              $datos['nombre'],
              $datos['direccion'],
              $datos['Ciudad'],
              $datos['Estado'],
              $datos['cp'],
              $datos['telefono'],
              $datos['email'],
              $datos['celular'],
              $datos['password'],
              $datos['tipo']
                
                    );
        $sql="INSERT INTO usuarios (NombreEmpresa, Direccion, Ciudad, Estado, CP, Telefono, Email, Celular, Contrasena, TipoCuenta) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
    public function obtenerUsuarioId($id){
        $bind=array($id);
        $sql="SELECT * FROM usuarios WHERE Email = ?";
        $renglon =$this->db->queryOne($sql,$bind);
        
        return $renglon;
        
    }
    
    public function actualizarUsuario($datos){
        $bind=array(
              $datos['nombre'],
              $datos['direccion'],
              $datos['Ciudad'],
              $datos['Estado'],
              $datos['cp'],
              $datos['telefono'],
              $datos['celular'],
              $datos['password'],
              $datos['tipo'],
              $datos['email']
                    );
        $sql="UPDATE usuarios SET NombreEmpresa = ?, Direccion =?, Ciudad = ?, Estado = ?, CP = ?, Telefono = ?, Celular = ?, Contrasena = ?, TipoCuenta = ? WHERE Email=?";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
        
    }
    public function borrarUsuario($id){
        $bind=array($id);
        $sql="DELETE FROM usuarios WHERE Email = ?";
        $resultado=$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
}

?>