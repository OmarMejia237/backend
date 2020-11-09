<?php
class Auths extends Controller{
    public function __construct(){
        
        $this->authModel=$this->model('Auth');
    }
    public function index(){
        $datos=[
                'titulo'=>'',
                ];
    
    $this->view('paginas/auth/login',$datos);
    }
    
public function login(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $datos=[
            'correo'=> trim($_POST['correo']),
            'password' => trim($_POST['password']),
        ];
        $usuario=$this->authModel->buscarUsuario($datos);        
    if($usuario){
        session_start();
        $_SESSION['usuario']=$usuario;
        $_SESSION['TipoCuenta']=$usuario['TipoCuenta'];
        
        //$foto=base64_encode($usuario['foto']);
        
        $datos=[
            
          'titulo'=>'Bienvenido:',
          'usuario'=> $usuario['NombreEmpresa']
          //'foto'=>$foto
        ];
        $this->view('paginas/dashboard',$datos);
    } else {
        $datos=[
            'titulo' => 'Usuario no existe',];
        $this->view('paginas/auth/login',$datos);
        }
    }
}
public function logout(){
    session_start();
    session_unset();
    session_destroy();
    $datos=[
            'titulo'=> 'He salido del sistema',
        ];
    $this->view('paginas/auth/login',$datos);
    
}
public function SignUp(){
    $this->view('paginas/auth/login',$datos);
}
}
?>