<?php class Regissters extends Controller{
    public function __construct(){
        
        $this->usuarioModel=$this->model('Usuario');
    }
    public function index(){
    
       $this->view('paginas/Usuarios/Register');
    }
    
    
    public function agregar1(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $datos=[
              'nombre'=> trim($_POST['Nombre']),
              'direccion'=> trim($_POST['Direccion']),
              'Ciudad'=> trim($_POST['Ciudad']),
              'Estado'=> trim($_POST['Estado']),
              'cp'=> trim($_POST['CP']),
              'telefono'=> trim($_POST['Telefono']),
              'email'=> trim($_POST['Email']),
              'celular'=> trim($_POST['Celular']),
              'password'=> sha1($_POST['Pass']),
              'tipo'=> trim($_POST['Tipo'])
                
            ];
            if($this->usuarioModel->agregarUsuario($datos)){
                redireccion('/usuarios');
            }else{
                
            }
        }
        else{
            $datos=[
              'nombre'=> '',
              'direccion'=> '' ,
              'Ciudad'=> '',
              'Estado'=> '',
              'cp'=> '',
              'telefono'=> '',
              'email'=> '',
              'celular'=> '',
              'password'=> '',
              'tipo'=> '',
                
            ];
            $this->view('paginas/auth/login',$datos);
        }
        
    }
}
?>