<?php class Usuarios extends Controller{
    public function __construct(){
        
        $this->usuarioModel=$this->model('Usuario');
    }
    public function index(){
        $usuarios=$this->usuarioModel->obtenerUsuarios();
        
        $datos=[
            'usuarios'=>$usuarios  
        ];
       $this->view('paginas/Usuarios/usuarios',$datos);
    }
    
    public function agregar(){
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
            $this->view('paginas/usuarios/agregar',$datos);
        }
        
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
    public function editar($id){
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
              'password'=> sha1($_POST['password']),
              'tipo'=> trim($_POST['Tipo'])
                
            ];
            if($this->usuarioModel->actualizarUsuario($datos)){
                redireccion('/usuarios');
            }else{
                
            }
            
        }
        else{
            $usuario=$this->usuarioModel->obtenerUsuarioId($id);
       $datos=[
              'nombre'=> $usuario['NombreEmpresa'],
              'direccion'=> $usuario['Direccion'],
              'ciudad'=> $usuario['Ciudad'],
              'Estado'=> $usuario['Estado'],
              'cp'=> $usuario['CP'],
              'telefono'=> $usuario['Telefono'],
              'email'=> $usuario['Email'],
              'celular'=> $usuario['Celular'],
              'password'=> $usuario['Contrasena'],
              'tipo'=> $usuario['TipoCuenta'],
                
            ];
        $this->view('paginas/usuarios/editar',$datos);
        }
    }
    public function borrar($id){
        $usuario=$this->usuarioModel->obtenerUsuarioId($id);
                $datos=[
              'nombre'=> $usuario['NombreEmpresa'],
              'direccion'=> $usuario['Direccion'],
              'ciudad'=> $usuario['Ciudad'],
              'Estado'=> $usuario['Estado'],
              'cp'=> $usuario['CP'],
              'telefono'=> $usuario['Telefono'],
              'email'=> $usuario['Email'],
              'celular'=> $usuario['Celular'],
              'password'=> $usuario['Contrasena'],
              'tipo'=> $usuario['TipoCuenta'],
                
            ];
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    if($this->usuarioModel->borrarUsuario($id)){
                        redireccion('/usuarios');
                    }else{
                        
                    }
                }
        $this->view('paginas/usuarios/borrar',$datos);
    }
    
    public function toCsv(){
        $archivo_csv=fopen(RUTA_APP . '/otros/usuarios'. time() . '.csv','w+');
        $usuarios=$this->usuarioModel->obtenerUsuarios();
        fwrite($archivo_csv,"ID_Usuario,RFC,NOMBRE,CORREO,DIRECCION,TELEFONO\n");
        foreach($usuarios as $key=>$usuario){
            fwrite($archivo_csv, $usuario['id'].','.
                                $usuario['rfc'].','.
                                $usuario['nombre'].','.
                                $usuario['correo'].','.
                                $usuario['direccion'].','.
                                $usuario['telefono'].','."\n");
        }
        fclose($archivo_csv);
        echo json_encode(['hecho'=>true]);
        
    }
    
        public function toXml(){
        $archivo_xml=fopen(RUTA_APP . '/otros/usuarios'. time() . '.xml','w+');
        $usu=$this->usuarioModel->obtenerUsuarios();
        
        fwrite($archivo_xml,"<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n<usuarios>\n");
        foreach($usu as $key=>$usuario){
            fwrite($archivo_xml , "<usuario>\n" .
                                "<nombre>" . $usuario['NombreEmpresa'] . "</nombre>\n" .
                                "<direccion>" . $usuario['Direccion'] . "</direccion>\n" .
                                "<ciudad>" . $usuario['Ciudad'] . "</ciudad>\n".
                                "<direccion>" . $usuario['Estado'] . "</direccion>\n".
                                "<telefono>" . $usuario['telefono'] . "</telefono>\n".
                                "</usuario>\n");
        }
        fwrite($archivo_xml,"</usuarios>");
        fclose($archivo_xml);
        echo json_encode(['hecho'=>true]);
        
    }
        public function toJson(){
        $archivo_json=fopen(RUTA_APP . '/otros/usuarios'. time() . '.json','w+');
        $registros=[];
        $usuarios=$this->usuarioModel->obtenerUsuarios();
        
        foreach($usuarios as $key=>$usuario){
            $registros[]=[
                         'id'=> $usuario['id'],
                         'rfc'=> $usuario['rfc'],
                         'nombre'=> $usuario['nombre'],
                         'correo'=> $usuario['correo'],
                         'direccion'=> $usuario['direccion'],
                         'telefono'=> $usuario['telefono']];
        }
        fwrite($archivo_json,json_encode($registros));
        fclose($archivo_json);
        echo json_encode(['hecho'=>true]);
        
    }
    
    public function toPdf(){
        
        $usuarios=$this->usuarioModel->obtenerUsuarios();
        
        foreach($usuarios as $key=>$usuario){
            $registros[]=[
                         'id'=> $usuario['id'],
                         'rfc'=> $usuario['rfc'],
                         'nombre'=> $usuario['nombre'],
                         'correo'=> $usuario['correo'],
                         'direccion'=> $usuario['direccion'],
                         'telefono'=> $usuario['telefono'],
                         'foto'=> base64_encode($usuario['foto'])
                         ];
        }
    $datos=['usuarios'=>$registros, ];
        $this->view('paginas/usuarios/impresion',$datos);
        
    }
    
}

?>