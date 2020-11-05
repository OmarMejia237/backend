<?php
class Pedido{
    private $db;
    
    public function __construct(){
        $this->db=new Base;
    }
    public function Categoria($id){
        $bind=array($id);
        $resultados=$this->db->queryOne("select categoria.categoria from categoria, catalogoproducto where catalogoproducto.idCategoria=categoria.idCategoria and catalogoproducto.idproducto=? ",$bind);
        return $resultados;
        
    }
    public function obtenerNombre($email){
        $bind=array($email);
        $resultados=$this->db->queryOne("select * from usuarios where Email=?",$bind);
        return $resultados;
    }
    public function obtenerTabla($datos){
        $bind=array($datos['nombre']);
        $resultados=$this->db->query("select pedidos.Num_pedido,pedidos.NombreDonante, pedidos.NombreBeneficiario, catalogoproducto.nombre, pedidos.Cantidad from pedidos , catalogoproducto where pedidos.idProducto=catalogoproducto.idProducto and NombreBeneficiario=?",$bind);
        return $resultados;
        
    }
         
    public function trasladar($id){
        $bind=array($id);
        $resultados=$this->db->queryOne("SELECT publicarproducto.idProducto,publicarproducto.CantidadDonada,usuarios.NombreEmpresa from publicarproducto,usuarios where publicarproducto.correoDonante=usuarios.Email and id=? ",$bind);
         return $resultados;
        
        
    }
    public function insert($datos){
        $binds=array(
                     $datos['can'],
                     $datos['nomdo'],
                     $datos['nombe'],
                     $datos['idProducto']
                     );
        $insert=$this->db->query("INSERT INTO pedidos(Cantidad,NombreDonante,NombreBeneficiario,idProducto) VALUES (?,?,?,?)",$binds);
        return (is_array($insert))?true:false;
    }
    public function contar(){
        $insert=$this->db->query("");
        
    }
    public function delete($id){
        $bind=array($id);
        $delet=$this->db->query("DELETE FROM publicarproducto WHERE id=?",$bind);
        return (is_array($delet))?true:false;
    }
    public function tda($Nom){
        $bind=array($Nom);
        $resultados=$this->db->queryOne("SELECT TDA FROM estadistica where NombreCategoria = ?", $bind);
        return $resultados;
    }
    public function Puntuar($l){
        $bind=array($l['tda'],
                    $l['categoria']);
        $sql="UPDATE estadistica set TDA = ? WHERE NombreCategoria=?";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
        
    }
        
    }
?>