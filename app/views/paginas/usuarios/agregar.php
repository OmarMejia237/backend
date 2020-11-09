<head><?php include RUTA_APP . '/views/inc/cabeza.inc.php'?></head>
<body style="background-color:#a2ded0;">
    

<section class="menu cid-qTkzRZLJNu"  id="menu1-0" >
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
<div class="container">
        <br>
        <div class="controllers">
            <a href="<?php echo RUTA_URL;?>/usuarios" id="volver" class="btn btn-info btn-sm float:right mt-3 mb-6" title="volver"><i class="fa fa fa-backward"></i></a>
        </div>
        <br>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card bg-warning">
                        <div class="card-header">
                            Confirmacion Agregar <i class="fa fa-user-minus text-danger float:right"></i>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo RUTA_URL;?>/usuarios/agregar" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                         <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="Nombre">Nombre de empresa</label>
                                                <input id="Nombre" name="Nombre" type="text" placeholder="Nombre" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                    </div>
    <!-- Text input-->              <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">           
                                                <label for="Direccion">Direccion</label>
                                             <input id="Direccion" name="Direccion" type="text" placeholder="Direccion" class="form-control input-md">
                                            </div>
                                        </div>
                                    </div>
    <!-- Text input-->              <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="Empresa">Ciudad</label>  
                                                <input id="Ciudad" name="Ciudad" type="text" placeholder="Ciudad" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                    </div>
    <!-- Select Basic -->
                                    <div class="row">
                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                    <label class="col-sm-4 control-label" for="Estado">Estado</label>
                                                    <select id="Estado" name="Estado" class="form-control">
                                                        <option value="Aguascalientes">Aguascalientes</option>
                                                        <option value="Baja California">Baja California</option>
                                                        <option value="Baja California Sur">Baja California Sur</option>
                                                        <option value="Campeche">Campeche</option>
                                                        <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                                                        <option value="Colima">Colima</option>
                                                        <option value="Chiapas">Chiapas</option>
                                                        <option value="Chihuahua">Chihuahua</option>
                                                        <option value="Distrito Federal">Distrito Federal</option>
                                                        <option value="Durango">Durango</option>
                                                        <option value="Guanajuato">Guanajuato</option>
                                                        <option value="Guerrero">Guerrero</option>
                                                        <option value="Hidalgo">Hidalgo</option>
                                                        <option value="Jalisco">Jalisco</option>
                                                        <option value="México">México</option>
                                                        <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                                                        <option value="Morelos">Morelos</option>
                                                        <option value="Nayarit<">Nayarit</option>
                                                        <option value="Nuevo León">Nuevo León</option>
                                                        <option value="Oaxaca">Oaxaca</option>
                                                        <option value="Puebla">Puebla</option>
                                                        <option value="Querétaro">Querétaro</option>
                                                        <option value="Quintana Roo">Quintana Roo</option>
                                                        <option value="San Luis Potosí">San Luis Potosí</option>
                                                        <option value="Sinaloa">Sinaloa</option>
                                                        <option value="Sonora">Sonora</option>
                                                        <option value="Tabascov">Tabasco</option>
                                                        <option value="Tamaulipas">Tamaulipas</option>
                                                        <option value="Tlaxcala">Tlaxcala</option>
                                                        <option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
                                                        <option value="Yucatán">Yucatán</option>
                                                        <option value="Zacatecas">Zacatecas</option>
                                                    </select>
                                            </div>
                                         </div>
                                    </div>   
    <!-- Text input-->              <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="CP">Código Postal</label>  
                                                <input id="CP" name="CP" type="text" placeholder="Código Postal" class="form-control input-md">
                                            </div>
                                        </div>
                                     </div>
    
    <!-- Text input-->              <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="Telefono">Telefono</label> 
                                                <input id="Telefono" name="Telefono" type="text" placeholder="Telefono" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                    </div>
    
    <!-- Text input-->              <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-4 " for="Email">Email</label>  
                                                <input id="Email" name="Email" type="text" placeholder="Email" class="form-control input-md" required="">
        
                                            </div>
                                        </div>
                                    </div>
    <!-- Text input-->              <div class="row">
                                       <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-4" for="Celular">Celular</label>
                                                <input id="Celular" name="Celular" type="text" placeholder="Celular" class="form-control input-md">
        
                                            </div>
                                         </div>
                                    </div>
    
    
    <!-- Text input-->              <div class="row">
                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-4 " for="Pass">Contraseña</label> 
                                                <input id="Pass" name="Pass" type="text" placeholder="Contraseña" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-4 " for="Tipo">Tipo de cuenta</label>
                                                <select id="Tipo" name="Tipo" class="form-control">
                                                    <option value="Beneficiario">Beneficiario</option>
                                                    <option value="Donante">Donante</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
      <!-- Button -->               <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-4 " for="Registrarse"></label>
                                                <button id="Registrarse" type="submit" name="Registrarse" class="btn btn-dark">Registrarse</button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                     <div class="col-sm-2"></div>
                </div>
            </div>
    </div></body>
        <?php include RUTA_APP . '/views/inc/footer.inc.php';?>