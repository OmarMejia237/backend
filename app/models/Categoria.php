<?php
class Categoria{
    private $db;
    
    public function __construct(){
        $this->db=new Base;
    }
    public function obtenerCategoriasFruta(){
        $resultados=$this->db->query("select publicarproducto.id,usuarios.Email,catalogoproducto.nombre,publicarproducto.Descripcion,publicarproducto.CantidadDonada, usuarios.NombreEmpresa, publicarproducto.medida,publicarproducto.Disponibilidad,publicarproducto.DiasVencimiento from catalogoproducto,publicarproducto,usuarios,categoria where publicarproducto.CorreoDonante=usuarios.Email and catalogoproducto.idCategoria=categoria.idCategoria and catalogoproducto.IdProducto=publicarproducto.idProducto and categoria.categoria='Frutas' order by publicarproducto.DiasVencimiento ASC");
        return $resultados;
        
    }
        public function obtenerCategoriasVerdura(){
        $resultados=$this->db->query("select publicarproducto.id,usuarios.Email,catalogoproducto.nombre,publicarproducto.Descripcion,publicarproducto.CantidadDonada, usuarios.NombreEmpresa, publicarproducto.medida,publicarproducto.Disponibilidad,publicarproducto.DiasVencimiento from catalogoproducto,publicarproducto,usuarios,categoria where publicarproducto.CorreoDonante=usuarios.Email and catalogoproducto.idCategoria=categoria.idCategoria and catalogoproducto.IdProducto=publicarproducto.idProducto and categoria.categoria='Verduras' order by publicarproducto.DiasVencimiento ASC");
        return $resultados;
        
    }
        public function obtenerCategoriasEnlatado(){
        $resultados=$this->db->query("select publicarproducto.id,usuarios.Email,catalogoproducto.nombre,publicarproducto.Descripcion,publicarproducto.CantidadDonada, usuarios.NombreEmpresa, publicarproducto.medida,publicarproducto.Disponibilidad,publicarproducto.DiasVencimiento from catalogoproducto,publicarproducto,usuarios,categoria where publicarproducto.CorreoDonante=usuarios.Email and catalogoproducto.idCategoria=categoria.idCategoria and catalogoproducto.IdProducto=publicarproducto.idProducto and categoria.categoria='Enlatados' order by publicarproducto.DiasVencimiento ASC");
        return $resultados;
        
    }
        public function obtenerCategoriasRopa(){
        $resultados=$this->db->query("select publicarproducto.id,usuarios.Email,catalogoproducto.nombre,publicarproducto.Descripcion,publicarproducto.CantidadDonada, usuarios.NombreEmpresa, publicarproducto.medida,publicarproducto.Disponibilidad,publicarproducto.DiasVencimiento from catalogoproducto,publicarproducto,usuarios,categoria where publicarproducto.CorreoDonante=usuarios.Email and catalogoproducto.idCategoria=categoria.idCategoria and catalogoproducto.IdProducto=publicarproducto.idProducto and categoria.categoria='Ropa' order by publicarproducto.DiasVencimiento ASC");
        return $resultados;
        
    }
        public function obtenerCategoriasMiscelanea(){
        $resultados=$this->db->query("select publicarproducto.id,usuarios.Email,catalogoproducto.nombre,publicarproducto.Descripcion,publicarproducto.CantidadDonada, usuarios.NombreEmpresa, publicarproducto.medida,publicarproducto.Disponibilidad,publicarproducto.DiasVencimiento from catalogoproducto,publicarproducto,usuarios,categoria where publicarproducto.CorreoDonante=usuarios.Email and catalogoproducto.idCategoria=categoria.idCategoria and catalogoproducto.IdProducto=publicarproducto.idProducto and categoria.categoria='Miscelanea' order by publicarproducto.DiasVencimiento ASC");
        return $resultados;
        
    }
}
?>