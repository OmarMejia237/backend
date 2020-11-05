<head>
<?php
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
</head>
<body style="background-color:#a2ded0;" >
    <br>
    <br>
<div class="container align-center body">
<?php if(!isset($_SESSION['usuario'])) {?>
    <div class="row">
        
        <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="card bg-warning">
                    <div class="card-header"> Avisos</div>
                    <div class="card-body"> No tiene acceso....... vaya al login</div>
                </div>
            </div>
            <div class="col-sm-4"></div>
    </div>
    <?php } else{?>
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
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" style=" color: #fff ">Otros</a>
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
    <div class="controllers">
        <a href="<?php echo RUTA_URL; ?>/productos/agregar" id="agregar" class="btn btn-info btn-sm float-right"><i class="fa fa-plus"></i></a>
        
    </div>

<div class="table-wrapper">
<table class="table">
    <thead>
        <tr>
            <td colspan="7"></td>
<!--            <td>
                <button type="button" class="btn btn-info btn-sm" title="Exportar a CSV" id="csv"><i class="fa fa-file-csv"></i></button>
                <button type="button" class="btn btn-info btn-sm" title="Exportar a XML" id="xml"><i class="fa fa-file-code"></i></button>
                <button type="button"class="btn btn-info btn-sm" title="Exportar a JSON" id="json"><i class="fa fa-file-export"></i></button>
            <a href="<?php echo RUTA_URL;?>/productos/toPdf" target="_blank" class="btn btn-info btn-sm" title="Exportar a PDF" id="pdf"><i class="fa fa-file-pdf"></i></a>
            </td>-->
        </tr>
        <tr>
            <th>Nombre del Producto</th>
            <th>Nombre Categoria</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($datos['productos'] as $productos):?>
        
        <tr>
            <td><?php echo $productos['nombre']; ?></td>
            <td><?php echo $productos['categoria']; ?></td>
            <td><a class="btn btn-sm btn-success"href="<?php echo RUTA_URL; ?>/productos/editar/<?php echo $productos['IdProducto']; ?>"><i class="fa fa-edit"></i></a>
            &nbsp; <a class="btn btn-sm btn-danger" href="<?php echo RUTA_URL; ?>/productos/borrar/<?php echo $productos['IdProducto']; ?>"><i class="fa fa-times"></i></a></td>
            
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
<?php }?>
</div>
</body>
<footer>
<?php include RUTA_APP . '/views/inc/footer.inc.php';?>
</footer>
<script>
    $(function(){
        
        
        $('#csv').on('click', function(){   
            $.ajax({
                type:'GET',
                url:"<?php echo RUTA_URL ;?>/productos/toCsv",
                dataType:'json',
                success: function(respuesta){
                    if(respuesta.hecho){
                        alert('Archivo creado con exito');
                    }
                },
                error:function(e){
                    console.log(e.responseText);
                }
                });
            });
        
        
        $('#xml').on('click', function(){
            
            $.ajax({
                type:'GET',
                url:"<?php echo RUTA_URL;?>/productos/toXml",
                dataType:'json',
                success:function(respuesta){
                    if(respuesta.hecho){
                        alert('Archivo creado con exito');
                    }
                },
                error:function(e){
                    console.log(e.responseText);
                }
                });
            });
        
        
         $('#json').on('click', function(){
            
            $.ajax({
                type:'GET',
                url:"<?php echo RUTA_URL;?>/productos/toJson",
                dataType:'json',
                success:function(respuesta){
                    if(respuesta.hecho){
                        alert('Archivo creado con exito');
                    }
                },
                error:function(e){
                    console.log(e.responseText);
                }
                });
            });
         
         
        $('#pdf').on('click', function(){
           
         $.ajax({
             type:'GET',
            url:"<?php echo RUTA_URL;?>/productos/toPdf",
            dataType:'json',
               success:function(respuesta){
                if(respuesta.hecho){
                      alert('Archivo creado con exito');
                   }
              },
             error:function(e){
                    console.log(e.responseText);
                }
               });
            });         
        });
</script>