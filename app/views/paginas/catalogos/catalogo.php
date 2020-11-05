<head><?php
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?></head>
<body style="background-color:#a2ded0;">
  

        <?php if(!isset($_SESSION['usuario'])){ ?>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="card bg-warning">
                    <div class="card-header"> **Avisos</div>
                    <div class="card-body">No tiene permisos...... Vaya al login</div>
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
                            <a class="nav-link text-white" href="<?php echo RUTA_URL; ?>/productos" style=" color: #fff ">Productos</a>
                            <a class="nav-link text-white" href="<?php echo RUTA_URL; ?>/categorias" style=" color: #fff ">Categorias</a>
                        </div>
                    </li>
                </ul>
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Acceso</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link text-white" href="<?php echo RUTA_URL; ?>/auths/logout" style=" color: #fff ">Log out</a>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
            <div class="container mt-5">
  <h1 class="text-dark text-center pb-3">Categorías</h1>
  
  
  <div class="row">
   
  	<div class="col-lg-3 col-md-6 col-xs-12 pl-1 pr-1">
    <a href="<?php $cat="fruta"; echo RUTA_URL;?>/categorias/busqueda/<?php echo $cat;?>">
  		<div class="card" >
     <i class="fa fad fa-apple-alt"></i>
  		<h3>Frutas</h3>  
  		<p >Bananas,peras,Manzanas,kiwi,etc</p>
  	</div>
    </a>
   </div>


  	  	<div class="col-lg-3 col-md-6 col-xs-12 pl-1 pr-1">
  	<a href="<?php $cat="verdura"; echo RUTA_URL;?>/categorias/busqueda/<?php echo $cat;?>">
   	<div class="card">
  		<i class="fa fas fa-carrot"></i>
  		<h3>Verduras</h3>
  		<p>zanahorias,tomate,cebolla,brocoli,repollo,lechuga,cilantro</p>
  
  	</div>
    </a>
      </div>
      
      
  	<div class="col-lg-3 col-md-6 col-xs-12 pl-1 pr-1">
  	<a href="<?php $cat="enlatados"; echo RUTA_URL;?>/categorias/busqueda/<?php echo $cat;?>">
    <div class="card">
  		<i class="fa fas fa-archive"></i>
  		<h3>Enlatados</h3>
  		<p>Atun con aceite, atun con agua, elotes enlatados, maruchan, etc</p>
  	</div>
   </a>
   </div>
   
   
  	<div class="col-lg-3 col-md-6 col-xs-12 pl-1 pr-1">
    <a href="<?php $cat="ropa"; echo RUTA_URL;?>/categorias/busqueda/<?php echo $cat;?>">
  		<div class="card">
  		<i class="fa fas fa-tshirt"></i>
  		<h3>Ropa</h3>
  		<p>Camisas polo, playeras, pantalones, shorts, playeras de interior, etc</p>
  	</div>
    </a>
  	</div>
   
   
    <div class="col-lg-3 col-md-6 col-xs-12 pl-1 pr-1">
     <a href="<?php $cat="miscelanea"; echo RUTA_URL;?>/categorias/busqueda/<?php echo $cat;?>">
  		<div class="card">
  		<i class="fa fas fa-plus"></i>
  		<h3>Miscelanea</h3>
  		<p>juguetes, medicamneto, dinero, etc</p>
  	</div>
     </a>
  	</div>
  </div>         
</div>
        
        
        <!--<h3> </?php echo $datos['titulo']. $datos['usuario']?><img src="data:image/png;base64, </?php echo $datos['foto'] ; ?>" width="100" class="float-right"></h3>-->
    <?php }  if(isset($_SESSION['usuario']) && ($_SESSION['TipoCuenta']=="Beneficiario" || $_SESSION['TipoCuenta']=="Donante") ){?>
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
                    </li>
                </ul>
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Acceso</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link text-white" href="<?php echo RUTA_URL; ?>/auths/logout" style=" color: #fff ">Log out</a>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
        
<div class="container mt-5">
  <h1 class="text-dark text-center pb-3">Categorías</h1>
  
  
  <div class="row">
   
  	<div class="col-lg-3 col-md-6 col-xs-12 pl-1 pr-1">
    <a href="<?php $cat="fruta"; echo RUTA_URL;?>/categorias/busqueda/<?php echo $cat;?>">
  		<div class="card" >
     <i class="fa fad fa-apple-alt"></i>
  		<h3>Frutas</h3>  
  		<p >Bananas,peras,Manzanas,kiwi,etc</p>
  	</div>
    </a>
   </div>


  	  	<div class="col-lg-3 col-md-6 col-xs-12 pl-1 pr-1">
  	<a href="<?php $cat="verdura"; echo RUTA_URL;?>/categorias/busqueda/<?php echo $cat;?>">
   	<div class="card">
  		<i class="fa fas fa-carrot"></i>
  		<h3>Verduras</h3>
  		<p>zanahorias,tomate,cebolla,brocoli,repollo,lechuga,cilantro</p>
  
  	</div>
    </a>
      </div>
      
      
  	<div class="col-lg-3 col-md-6 col-xs-12 pl-1 pr-1">
  	<a href="<?php $cat="enlatados"; echo RUTA_URL;?>/categorias/busqueda/<?php echo $cat;?>">
    <div class="card">
  		<i class="fa fas fa-archive"></i>
  		<h3>Enlatados</h3>
  		<p>Atun con aceite, atun con agua, elotes enlatados, maruchan, etc</p>
  	</div>
   </a>
   </div>
   
   
  	<div class="col-lg-3 col-md-6 col-xs-12 pl-1 pr-1">
    <a href="<?php $cat="ropa"; echo RUTA_URL;?>/categorias/busqueda/<?php echo $cat;?>">
  		<div class="card">
  		<i class="fa fas fa-tshirt"></i>
  		<h3>Ropa</h3>
  		<p>Camisas polo, playeras, pantalones, shorts, playeras de interior, etc</p>
  	</div>
    </a>
  	</div>
   
   
    <div class="col-lg-3 col-md-6 col-xs-12 pl-1 pr-1">
     <a href="<?php $cat="miscelanea"; echo RUTA_URL;?>/categorias/busqueda/<?php echo $cat;?>">
  		<div class="card">
  		<i class="fa fas fa-plus"></i>
  		<h3>Miscelanea</h3>
  		<p>juguetes, medicamneto, dinero, etc</p>
  	</div>
     </a>
  	</div>
  </div>         
</div>
<?php }?></body>
<footer>
<?php include RUTA_APP . '/views/inc/footer.inc.php';?>
</footer>