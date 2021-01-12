<head>

<?php
//ini_set('error_reporting',0);
ini_set('display_errors',0);
session_start();

include RUTA_APP . '/views/inc/cabeza.inc.php'; ?>
</head>
<body style="background-color:#a2ded0;">
    <br>
    <br>

    <div class=" ">
        <?php if(!isset($_SESSION['usuario'])){ ?>
            <section class="menu cid-qTkzRZLJNu"  id="menu1-0">
<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="<?php echo RUTA_URL;?>">
                         <img src="<?php echo RUTA_URL;?>/assets/images/logo-122x92.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap text-white"> TPT</span>
            </div>
        </div>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Acceso</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="<?php echo RUTA_URL; ?>/auths" style=" color: #fff "> Log In</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/regissters" style=" color: #fff ">Sign up</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
        <div class="container align-center">
            <div class="col-sm-12"></div>
            <div class="col-sm-12">
                <div class="card bg-warning">
                    <div class="card-header"> **Avisos</div>
                    <div class="card-body">
                        <p>No tiene permisos</p>
                        <p>no puede hacer nada :D</p>
                        <p>Porfavor vaya al Login</p>
                        <p>Si no esta registrado</p>
                        <p>vaya al alpartado acceso sign up porfavor</p>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <?php } if(isset($_SESSION['usuario']) && $_SESSION['TipoCuenta']=="Admin") {?>
            <section class="menu cid-qTkzRZLJNu"  id="menu1-0">
<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="<?php echo RUTA_URL;?>">
                         <img src="<?php echo RUTA_URL;?>/assets/images/logo-122x92.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap text-white"> TPT</span>
            </div>
        </div>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo RUTA_URL; ?>/usuarios" >Usuarios</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mobi-mbri mobi-mbri-bulleted-list mbr-iconfont mbr-iconfont-btn"></span>Reportes</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/productos" style=" color: #fff ">Productos</a>
                            <a class="dropdown-item " href="<?php echo RUTA_URL; ?>/categorias" style=" color: #fff ">Categorias</a>
                            <a class="dropdown-item " href="<?php echo RUTA_URL; ?>/admins" style=" color: #fff ">Estadisticas</a>

                        </div>
                    </li>
                </ul>
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Acceso</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/auths/logout" style=" color: #fff ">Log out</a>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
        
        
        <!--<h3> </?php echo $datos['titulo']. $datos['usuario']?><img src="data:image/png;base64, </?php echo $datos['foto'] ; ?>" width="100" class="float-right"></h3>-->
        <section class="cid-qTkA127IK8  " id="header2-1">
        <div class="container align-center">
            
            <h3> <?php echo $datos['titulo']. $_SESSION['usuario']['NombreEmpresa'] ?> </h3>
            
         <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Todo para todos</h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">Esta organización esta dedicada para facilitar la donación de productos entre empresas dontantes/beneficiaros&nbsp;</p>
                <img src="<?php echo RUTA_URL;?>/assets/photos/despensa.jpg" alt="Logotipo de HTML5" width="800" height="453">
            </div>
         </div>
        </div>
      </section>
    <?php }  if(isset($_SESSION['usuario']) && $_SESSION['TipoCuenta']=="Beneficiario"  ){?>
    <section class="menu cid-qTkzRZLJNu"  id="menu1-0">
<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="<?php echo RUTA_URL;?>">
                         <img src="<?php echo RUTA_URL;?>/assets/images/logo-122x92.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap text-white"> TPT</span>
            </div>
        </div>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white " href="<?php echo RUTA_URL; ?>/categorias" style=" color: #fff ">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="<?php echo RUTA_URL; ?>/pedidos" style=" color: #fff ">Pedidos</a>
                    </li>
                </ul>
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Acceso</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/auths/logout" style=" color: #fff ">Log out</a>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <section class="cid-qTkA127IK8  " id="header2-1">
        <div class="container align-center">
            
            <h3> <?php echo $datos['titulo']. $_SESSION['usuario']['NombreEmpresa'] ?> </h3>
            
         <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Todo para todos</h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">Esta organización esta dedicada para facilitar la donación de productos entre empresas dontantes/beneficiaros&nbsp;</p>
                <img src="<?php echo RUTA_URL;?>/assets/photos/despensa.jpg" alt="Logotipo de HTML5" width="800" height="453">
            </div>
         </div>
        </div>
      </section>
    <?php }  if(isset($_SESSION['usuario']) && $_SESSION['TipoCuenta']=="Donante" ){?>
    <section class="menu cid-qTkzRZLJNu"  id="menu1-0">
<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="<?php echo RUTA_URL;?>">
                         <img src="<?php echo RUTA_URL;?>/assets/images/logo-122x92.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap text-white"> TPT</span>
            </div>
        </div>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo RUTA_URL; ?>/categorias" style=" color: #fff "> <span class="mobi-mbri mobi-mbri-bulleted-list mbr-iconfont mbr-iconfont-btn"></span>Categorias</a>
                    </li>
                
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reportes</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link text-white " href="<?php echo RUTA_URL; ?>/publicars" style=" color: #fff ">Publicar</a>

                        </div>
                    </li>
                </ul>
            </div>
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Acceso</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/auths/logout" style=" color: #fff ">Log out</a>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <section class="cid-qTkA127IK8  " id="header2-1">
        <div class="container align-center">
            
            <h3> <?php echo $datos['titulo']. $_SESSION['usuario']['NombreEmpresa'] ?> </h3>
            
         <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Todo para todos</h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">Esta organización esta dedicada para facilitar la donación de productos entre empresas dontantes/beneficiaros&nbsp;</p>
                <img src="<?php echo RUTA_URL;?>/assets/photos/despensa.jpg" alt="Logotipo de HTML5" width="800" height="453">
            </div>
         </div>
        </div>
      </section>

    <?php }?>
    </div>
        </body>
    <footer>

    <?php
    include RUTA_APP . '/views/inc/footer.inc.php';
    ?>

    </footer>