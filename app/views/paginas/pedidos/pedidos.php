<head>
      <?php
session_start();
ini_set('display_errors',0);
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
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
</head>

<body style="background-color:#a2ded0;">
   <br>
   <br>
   <br>
   <?php if(isset($_SESSION['usuario'])){?>
    
    <?php }?>
    
    <form action="<?php echo RUTA_URL;?>/pedidos/obtenerTabla" method="post" enctype="multipart/form-data">
<h1 style="color:  #572364;"><b>MIS PEDIDOS :D</b></h1>
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
<div class="table-wrapper" >

<table class="table">
    <thead>
        <tr>
            <td colspan="7"></td>
        </tr>
        <tr>
                <th scope='col'>Numero de pedido</th>
                <th scope='col'>Cantidad</th>
                <th scope='col'>Nombre de organización</th>
                <th>Nombre del producto</th>
              </tr>
    </thead>
    <tbody>
        <?php foreach($datos['publicar'] as $usuario):?>
        
        <tr>
                <td><?php echo $usuario['Num_pedido'];?> </td>
                <td><?php echo $usuario['Cantidad'];?> </td>
                <td><?php echo $usuario['NombreDonante'];?> </td>
                <td><?php echo $usuario['nombre']?></td>
            <!--<td style="background-color:#a2ded0;"><a class="btn btn-sm btn-success"href="<?php echo RUTA_URL; ?>/catalogos/editar/<?php echo $usuario['Email'];?>"><i class="fa fa-edit"></i> Conseguir Donacion</a></td>
            -->
        </tr>
        <?php endforeach;?>
    </tbody>
</table>    
</div>
</body>
<footer>
<?php include RUTA_APP . '/views/inc/footer.inc.php';?>
</footer>