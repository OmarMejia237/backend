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

    <?php  if(isset($_SESSION['usuario']) && $_SESSION['TipoCuenta']=="Donante" ){?>
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
    <?php }?>

    <form action="<?php echo RUTA_URL;?>/publicars/obtener/<?php echo $_SESSION['usuario']['Email']; ?>" method="post" enctype="multipart/form-data">

                            <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                      <!--                      <label class="col-sm-4" for="nomPro">Correo</label> --> 
                                            <input  id="correo"name="correo" type="hidden" placeholder="correo" class="form-control input-md" value="<?php echo $_SESSION['usuario']['Email'];?>" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row" style=" float:right">
                                    <div class="col-sm-2">

                                        <div class="form-group">
                                            <label class="col-sm-4" for="btnEnviar"></label>
                                            <button type="submit" class="btn btn-primary">Cargar Productos</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
    <div class="controllers">
        <a href="<?php echo RUTA_URL; ?>/publicars/agregar" id="agregar" class="btn btn-info btn-sm float-right"><i class="fa fa-plus"></i></a>
        
    </div>
    <div class="table-wrapper" >
<table class="table">
    <thead>
        <tr>
            <td colspan="7"></td>
            <!--<td>-->
            <!--    <button type="button" class="btn btn-info btn-sm" title="Exportar a CSV" id="csv"><i class="fa fa-file-csv"></i></button>-->
            <!--    <button type="button" class="btn btn-info btn-sm" title="Exportar a XML" id="xml"><i class="fa fa-file-code"></i></button>-->
            <!--    <button type="button"class="btn btn-info btn-sm" title="Exportar a JSON" id="json"><i class="fa fa-file-export"></i></button>-->
            <!--<a href="<?php echo RUTA_URL;?>/usuarios/toPdf" target="_blank" class="btn btn-info btn-sm" title="Exportar a PDF" id="pdf"><i class="fa fa-file-pdf"></i></a>-->
            <!--</td>-->
        </tr>
        <tr>
                <th scope='col'>Nombre</th>
                <th scope='col'>Descripción</th>
                <th scope='col'>Cantidad</th>
                <th scope='col'>Medida</th>
                <th scope='col'>Disponible/NO</th>
                <th scope='col'>DiasVencimiento</th>
                <th>Acciones</th>
              </tr>
    </thead>
    <tbody>
        <?php  foreach($datos['productos'] as $usuario):?>
        
        <tr>
                <td><?php echo $usuario['nombre'];?> </td>
                <td><?php echo $usuario['Descripcion'];?> </td>
                <td><?php echo $usuario['CantidadDonada'];?> </td>
                <td><?php echo $usuario['medida'];?> </td>
                <td><?php echo $usuario['Disponibilidad'];?> </td>
                <td><?php echo $usuario['DiasVencimiento'];?> </td>
            <td style="background-color:#a2ded0;"><a class="btn btn-sm btn-success"href="<?php echo RUTA_URL; ?>/publicars/editar1/<?php echo $_SESSION['usuario']['Email'];?>"><i class="fa fa-edit"></i></a>
            &nbsp; <a class="btn btn-sm btn-danger" href="<?php echo RUTA_URL; ?>/publicars/borrar1/<?php echo $_SESSION['usuario']['Email'];?>"><i class="fa fa-times"></i></a></td>
            
        </tr>
        <?php endforeach;?>
    </tbody>
</table>    
</div>    </body>
    <footer>
    <?php
    include RUTA_APP . '/views/inc/footer.inc.php';
    ?>

    </footer>