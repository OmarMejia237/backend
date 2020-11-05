<?php
class Publicar{
        private $db;
    
    public function __construct(){
        $this->db=new Base;
    }
        public function obtenerProductosEmpresa($datos){
        $bind=array($datos['email']);
        $resultados=$this->db->query("select catalogoproducto.nombre,publicarproducto.Descripcion,publicarproducto.CantidadDonada, publicarproducto.medida,publicarproducto.Disponibilidad,publicarproducto.DiasVencimiento from catalogoproducto,publicarproducto,usuarios,categoria where publicarproducto.CorreoDonante=usuarios.Email and catalogoproducto.idCategoria=categoria.idCategoria and catalogoproducto.IdProducto=publicarproducto.idProducto and usuarios.Email = ? order by publicarproducto.DiasVencimiento ASC",$bind);
        return $resultados;
        
    }
        public function agregarPublicacion($datos){
        $bind=array(
              $datos['id'],
              $datos['des'],
              $datos['can'],
              $datos['correo'],
              $datos['med'],
              $datos['dis'],
              $datos['dias']
                    );
        var_dump($bind);
        $sql="INSERT INTO publicarproducto (idProducto, Descripcion, CantidadDonada, correoDonante, medida, Disponibilidad, DiasVencimiento) VALUES (?,?,?,?,?,?,?)";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
    public function ProductosEmail($id){
        $bind=array($id);
        $sql="select  publicarproducto.id,catalogoproducto.nombre,publicarproducto.Descripcion,publicarproducto.CantidadDonada, publicarproducto.medida,publicarproducto.Disponibilidad,publicarproducto.DiasVencimiento from catalogoproducto,publicarproducto,usuarios,categoria where publicarproducto.CorreoDonante=usuarios.Email and catalogoproducto.idCategoria=categoria.idCategoria and catalogoproducto.IdProducto=publicarproducto.idProducto and usuarios.Email = ? order by publicarproducto.DiasVencimiento ASC";
        $renglon =$this->db->queryOne($sql,$bind);      
        return $renglon;
        
    }
        public function obtenerId($id){
        $bind=array($id);
        $sql="select idProducto from catalogoproducto where nombre=?";
        $renglon =$this->db->queryOne($sql,$bind);      
        return $renglon;
        
    }
    public function actualizarPublicaciones($datos){
        $bind=array(
                    
                    $datos['descripcion'],
                    $datos['cantidad'],
                    $datos['medida'],
                    $datos['disponibilidad'],
                    $datos['email']
                    );
        $sql="UPDATE publicarproducto SET Descripcion = ?, CantidadDonada = ?, medida = ?, Disponibilidad = ? WHERE id = ?";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
        
    }
    
}
?>