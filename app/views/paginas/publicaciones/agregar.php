<?php
ini_set('display_errors',0);
session_start();

include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<head>
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
</head>
<body style="background-color:#a2ded0;">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
               
            
                <div class="card" style="background-color:#a2ded0;">
                    <div class="card-header">
                        Agregar <i class="fa fa-user-plus text-warning float:right"></i>
                    </div>
                    <div class="card-body">
                     <p> <?php echo $datos['mensaje'];?></p>
                        <form action="<?php echo RUTA_URL;?>/publicars/agregar" method="post" enctype="multipart/form-data">
                                <legend>Registro de producto</legend>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-4" for="nomPro">Nombre del producto</label>  
                                            <input  id="nomPro"name="nomPro" type="text" placeholder="Nombre del producto" class="form-control input-md">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-4" for="des">Descripcion</label>
                                            <input  id="des"name="des" type="text" placeholder="Descripcion" class="form-control input-md">
                  
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-4" for="can">Cantidad</label>
                                            <input  id="can"name="can" type="text" placeholder="Cantidad donada" class="form-control input-md">
                                            <input type="hidden" id="correo" name="correo" value="<?php echo $_SESSION['usuario']['Email'];?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-4" for="Categoria">Medida</label>
                                            <input  id="med"name="med" type="text" placeholder="Medida 1.- pequeño 2.- mediano 3.- grande" class="form-control input-md">
                  
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-4" for="Categoria">Disponibilidad</label>
                                            <input  id="dis"name="dis" type="text" placeholder="Disponibilidad" class="form-control input-md">
                  
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-4" for="Categoria">Dias de vencimiento</label>
                                            <input  id="dias"name="dias" type="text" placeholder="Dias de vencimiento" class="form-control input-md">
                  
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-4" for="btnEnviar"></label>
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-2"></div>
           </div>
        </div>
    </div>
        
    </body>

<?php include RUTA_APP . '/views/inc/footer.inc.php';?>