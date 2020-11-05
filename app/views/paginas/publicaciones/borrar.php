<head><?php include RUTA_APP . '/views/inc/cabeza.inc.php'?></head>
<body style="background-color:#a2ded0;">
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
                            <a class="dropdown-item " href="<?php echo RUTA_URL; ?>/publicars" style=" color: #fff ">Publicar</a>

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

    <div class="container">
        <br>
        <div class="controllers">
            <a href="<?php echo RUTA_URL;?>/productos" id="volver" class="btn btn-info btn-sm float:right mt-3 mb-6" title="volver"><i class="fa fa fa-backward"></i></a>
        </div>
        <br>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card bg-warning">
                        <div class="card-header">
                            Confirmacion de borrar <i class="fa fa-user-minus text-danger float:right"></i>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo RUTA_URL;?>/publicar/borrar1/<?php echo $datos['email'] ?>" method="post" enctype="multipart/form-data">
                            <legend>Actualizacion de la publicacion</legend>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-4" for="nomPro">Nombre del producto</label>  
                                            <input  id="nomPro"name="nomPro" type="text" placeholder="Nombre del producto" class="form-control input-md" value="<?php echo $datos['nombre']?>" required readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-4" for="Categoria">Descripcion</label>
                                            <input  id="des"name="des" type="text" placeholder="Descripcion del producto" class="form-control input-md" value="<?php echo $datos['descripcion']?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-4" for="Categoria">Medida</label>
                                            <input  id="me"name="me" type="text" placeholder="Tamaño del producto en numeros 1.- grande 2.- mediano 3.- chico" class="form-control input-md" value="<?php echo $datos['medida']?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-4" for="Categoria">Cantidad</label>
                                            <input  id="can"name="can" type="text" placeholder="Numero de productos a donar" class="form-control input-md" value="<?php echo $datos['cantidad']?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-4" for="Categoria">DiasVencimiento</label>
                                            <input  id="dias"name="dias" type="text" placeholder="Dias en el que el producto se puede consumir " class="form-control input-md" value="<?php echo $datos['disponibilidad']?>" required>
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
<footer>
<?php include RUTA_APP . '/views/inc/footer.inc.php';?></footer>