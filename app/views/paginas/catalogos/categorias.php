<head>
      <?php
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
</head>

<body style="background-color:#a2ded0;">
   <?php if((isset($_SESSION['usuario']) && $_SESSION['usuario']['TipoCuenta']=='Donante') || (isset($_SESSION['usuario']) && $_SESSION['usuario']['TipoCuenta']=='Admin'))  {?>
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
                        <a class="dropdown-item " href="<?php echo RUTA_URL; ?>/categorias" style=" color: #fff ">Categorias</a>
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
                <th scope='col'>Nombre de organización</th>
                <th scope='col'>Medida</th>
                <th scope='col'>Disponible/NO</th>
                <th scope='col'>DiasVencimiento</th>

              </tr>
    </thead>
    <tbody>
        <?php foreach($datos['productos'] as $usuario):?>
        
        <tr>
                <td><?php echo $usuario['nombre'];?> </td>
                <td><?php echo $usuario['Descripcion'];?> </td>
                <td><?php echo $usuario['CantidadDonada'];?> </td>
                <td><?php echo $usuario['NombreEmpresa'];?> </td>
                <td><?php echo $usuario['medida'];?> </td>
                <td><?php echo $usuario['Disponibilidad'];?> </td>
                <td><?php echo $usuario['DiasVencimiento'];?> </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>    
</div>
    
    
    <?php } if(isset($_SESSION['usuario']) && $_SESSION['usuario']['TipoCuenta']=='Beneficiario'){?>
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
                        <a class="dropdown-item " href="<?php echo RUTA_URL; ?>/categorias" style=" color: #fff ">Categorias</a>
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
                <th scope='col'>Nombre de organización</th>
                <th scope='col'>Medida</th>
                <th scope='col'>Disponible/NO</th>
                <th scope='col'>DiasVencimiento</th>

              </tr>
    </thead>
    <tbody>
        <?php foreach($datos['productos'] as $usuario):?>
        
        <tr>
                <td><?php echo $usuario['nombre'];?> </td>
                <td><?php echo $usuario['Descripcion'];?> </td>
                <td><?php echo $usuario['CantidadDonada'];?> </td>
                <td><?php echo $usuario['NombreEmpresa'];?> </td>
                <td><?php echo $usuario['medida'];?> </td>
                <td><?php echo $usuario['Disponibilidad'];?> </td>
                <td><?php echo $usuario['DiasVencimiento'];?> </td>
            <td style="background-color:#a2ded0;"><form action="<?php echo RUTA_URL; ?>/pedidos/aceptarD/<?php echo $usuario['id'];?>" method="POST"><button type="submit" class="fa fa-edit btn btn-sm btn-success" >Conseguir Donacion </button> <input name="correo" id="correo" type="hidden" value="<?php echo $_SESSION['usuario']['Email']?>"></form></td>
            
        </tr>
        <?php endforeach;?>
    </tbody>
</table>    
</div>
<?php }?>
</body>
<footer>
<?php include RUTA_APP . '/views/inc/footer.inc.php';?>
</footer>