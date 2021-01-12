<?php
class Pedidos extends Controller{
    public function __construct(){
        $this->pedidosModel=$this->model('Pedido');
    }
    public function index(){
        
        $this->view('paginas/pedidos/pedidos');
        
    }
    public function obtenerTabla(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $usuario=$this->pedidosModel->obtenerNombre($_POST['correo']);
            $datos=[
              'nombre'=> $usuario['NombreEmpresa']
                
            ];
            if($usuarios=$this->pedidosModel->obtenerTabla($datos)){
                
                $datos=[
            'publicar'=>$usuarios  
        ];
                $this->view('/paginas/pedidos/pedidos',$datos);
            }
            else{
                $this->view('/paginas/pedidos/pedidos',$datos);
            }
        
    }
    }
    public function aceptarD($id){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            
        $Nombre=$this->pedidosModel->obtenerNombre($_POST['correo']);
        
        $publicar=$this->pedidosModel->trasladar($id);
        $Nom=$this->pedidosModel->Categoria($publicar['idProducto']);
        $lista=[
                'can'=> $publicar['CantidadDonada'],
                'nomdo'=> $publicar['NombreEmpresa'],
                'nombe'=>$Nombre['NombreEmpresa'],
                'idProducto'=>$publicar['idProducto']
                
                ];
        $Num=$this->pedidosModel->tda($Nom['categoria']);
        $l=['categoria'=>$Nom['categoria'],
            'tda'=>($Num['TDA']+1)];
        $puntuar=$this->pedidosModel->Puntuar($l);
        $insert=$this->pedidosModel->insert($lista);
        $eliminar=$this->pedidosModel->delete($id);
      $this->view('/paginas/pedidos/pedidos');
        
    }
    
}
}
?>