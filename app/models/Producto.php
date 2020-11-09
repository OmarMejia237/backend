<?php
class Producto{
    private $db;
    
    public function __construct(){
        $this->db=new Base;
    }
    public function obtenerProductos(){
        $resultados=$this->db->query("select catalogoproducto.IdProducto,catalogoproducto.nombre, categoria.categoria from catalogoproducto, categoria where catalogoproducto.idCategoria=categoria.idCategoria");
        return $resultados;
        
    }

    public function agregarProductos($datos){
        $bind=array(
                    $datos['nombre'],
                    $datos['Categoria'],
                    $datos['CantidadExistente']       
                    );
        $sql="INSERT INTO catalogoproducto (nombre, idCategoria, cantidadExistente) VALUES (?,?,?)";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
    public function obtenerProductosId($id){
        $bind=array($id);
        $sql="SELECT * FROM catalogoproducto WHERE idProducto = ? ";
        $renglon =$this->db->queryOne($sql,$bind);      
        return $renglon;
        
    }
    
    public function actualizarProductos($datos){
        $bind=array(
                    $datos['nombre'],
                    $datos['categoria'],
                    $datos['id_prod']
                    );
        $sql="UPDATE catalogoproducto SET nombre = ?, idCategoria = ? WHERE idProducto = ?";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
        
    }
    public function borrarProductos($id){
        $bind=array($id);
        $sql="DELETE FROM catalogoproducto WHERE idProducto = ?";
        $resultado=$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
        public function productoExistente($datos){
        $bind=array($datos['nombre']);
        $sql="select * FROM catalogoproducto WHERE nombre = ?";
        $resultado=$this->db->queryOne($sql,$bind);
        return $resultado;
    }


    
}
?>