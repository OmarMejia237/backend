<?php
class Categorias extends Controller{
    public function __construct(){
        $this->categoriasModel=$this->model('Categoria');
    }
    public function index(){

        $this->view('paginas/catalogos/catalogo');
        
    }
    public function busqueda($cat){
        if($cat=="fruta"){
            $productos=$this->categoriasModel->obtenerCategoriasFruta();
        
        $datos=[
            'productos'=>$productos  
        ];
       $this->view('paginas/catalogos/categorias',$datos);
        }
        if($cat=="verdura"){
            
            $productos=$this->categoriasModel->obtenerCategoriasVerdura();
        
        $datos=[
            'productos'=>$productos  
        ];
       $this->view('paginas/catalogos/categorias',$datos);
        }
        if($cat=="enlatados"){
            $productos=$this->categoriasModel->obtenerCategoriasEnlatado();
        
        $datos=[
            'productos'=>$productos  
        ];
       $this->view('paginas/catalogos/categorias',$datos);
        }
        if($cat=="ropa"){
            $productos=$this->categoriasModel->obtenerCategoriasRopa();
        
        $datos=[
            'productos'=>$productos  
        ];
       $this->view('paginas/catalogos/categorias',$datos);
        }
        if($cat=="miscelanea"){
            $productos=$this->categoriasModel->obtenerCategoriasMiscelanea();
        
        $datos=[
            'productos'=>$productos  
        ];
       $this->view('paginas/catalogos/categorias',$datos);
        }        
    }
}

?>