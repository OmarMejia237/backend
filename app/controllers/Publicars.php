<?php
class Publicars extends Controller{
    public function __construct(){
        $this->publicarModel=$this->model('Publicar');
    }
        public function index(){
        $this->view('paginas/publicaciones/publicaciones');
        
    }
    public function agregar(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $usuarios=$this->publicarModel->obtenerId($_POST['nomPro']);
            if(!$usuarios){
                $datos=[
                        'mensaje'=>'No existe el producto, favor de contactarse con el Administrador de la pagina, lo sentimos :C'
                        
                        ];
                
             $this->view('paginas/publicaciones/agregar',$datos);
                
            }
            else {
            
            $datos=[
              'id'=>$usuarios['idProducto'],
              'des'=> trim($_POST['des']),
              'can'=> trim($_POST['can']),
              'correo'=>trim($_POST['correo']),
              'med'=> trim($_POST['med']),
              'dis'=> trim($_POST['dis']),
              'dias'=> trim($_POST['dias'])
                
            ];
            if($this->publicarModel->agregarPublicacion($datos)){
                redireccion('/publicars');
            }else{
                
            }
            }
        }
        else{
            $datos=[
              'idpro'=> '',
              'des'=> '' ,
              'can'=> '',
              'med'=> '',
              'dis'=> '',
              'dias'=> '',
               'mensaje'=>'', 
            ];
            
            $this->view('paginas/publicaciones/agregar',$datos);
        }
    }
    public function obtener($email){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $datos=[
              'email'=> ($_POST['correo'])
                
            ];
            
            if($usuarios=$this->publicarModel->obtenerProductosEmpresa($datos)){
                
                $datos=[
            'productos'=>$usuarios  
        ];
                $this->view('/paginas/publicaciones/publicaciones',$datos);
            }
            else{
                
                $this->view('/paginas/publicaciones/publicaciones',$usuarios);
            }
        
    }
}
        public function editar1($id){
            
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $datos=[
            'email'=>$id,
            'nombre'=>trim($_POST['nomPro']),
             'descripcion' => trim($_POST['des']),
              'cantidad'=> trim($_POST['can']),
              'medida'=> trim($_POST['me']),
              'disponibilidad'=>trim($_POST['dias'])
            ];
            if($this->publicarModel->actualizarPublicaciones($datos)){
                $this->view('paginas/publicaciones/publicaciones');
            }else{
                
            }
            
        }else{
            $productos=$this->publicarModel->ProductosEmail($id);
        $datos=[
            'id'=>$productos['id'],
            'email'=>$id,
            'nombre'=>$productos['nombre'],
             'descripcion' => $productos['Descripcion'],
              'cantidad'=> $productos['CantidadDonada'],
              'medida'=> $productos['medida'],
              'disponibilidad'=>$productos['DiasVencimiento']
            ];
        $this->view('paginas/publicaciones/editar',$datos);
        }
        
        }
        public function borrar1($id){
        $productos=$this->publicarModel->ProductosEmail($id);
                $datos=[
                    'id'=>$productos['id'],
            'email'=>$id,
            'nombre'=>$productos['nombre'],
             'descripcion' => $productos['Descripcion'],
              'cantidad'=> $productos['CantidadDonada'],
              'medida'=> $productos['medida'],
              'disponibilidad'=>$productos['DiasVencimiento']
            ];
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if($this->publicarModel->borrarProductos($id)){
                    redireccion('/publicaciones');
                }else{
                    
                }
            }
        $this->view('paginas/publicaciones/borrar',$datos);
    }
}
?>