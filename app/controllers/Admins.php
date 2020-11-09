<?php
class Admins extends Controller{
    public function __construct(){
        
        $this->adminModel=$this->model('Admin');
    }
    public function index(){

            $est=$this->adminModel->obtenerTabla();
        
        $datos=[
            'estadistica'=>$est  
        ];
    
    $this->view('paginas/admin/estadistica',$datos);
    }
}

?>