<head><?php include RUTA_APP . '/views/inc/cabeza.inc.php';?></head>
<body style="background-color:#a2ded0;">
    

<div class="container">
    <br>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card" style="background-color:#a2ded0; border:solid #000;" >
                <div class="card-header"> Editar <i class="fa fa-user text-warning float-right"></i>
                </div>
                <div class="card-body">
                    <form action="<?php echo RUTA_URL;?>/usuarios/editar/<?php echo $datos['email']; ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                                         <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="Nombre">Nombre de empresa</label>
                                                <input id="Nombre" name="Nombre" type="text" placeholder="Nombre" class="form-control input-md" required="" value="<?php echo $datos['nombre']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
    <!-- Text input-->              <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">           
                                                <label for="Direccion">Direccion</label>
                                             <input id="Direccion" name="Direccion" type="text" placeholder="Direccion" class="form-control input-md" value="<?php echo $datos['direccion']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
    <!-- Text input-->              <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="Empresa">Ciudad</label>  
                                                <input id="Ciudad" name="Ciudad" type="text" placeholder="Ciudad" class="form-control input-md" value="<?php echo $datos['ciudad']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
    <!-- Select Basic -->
                                    <div class="row">
                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                    <label class="col-sm-4 control-label" for="Estado">Estado</label>
                                                    <select id="Estado" name="Estado" class="form-control" >
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
                                                <input id="CP" name="CP" type="text" placeholder="Código Postal" class="form-control input-md" value="<?php echo $datos['cp']; ?>" required>
                                            </div>
                                        </div>
                                     </div>
    
    <!-- Text input-->              <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="Telefono">Telefono</label> 
                                                <input id="Telefono" name="Telefono" type="text" placeholder="Telefono" class="form-control input-md" value="<?php echo $datos['telefono']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
    
    <!-- Text input-->              <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-4 " for="Email">Email</label>  
                                                <input id="Email" name="Email" type="text" placeholder="Email" class="form-control input-md" value="<?php echo $datos['email']; ?>" required readonly>
        
                                            </div>
                                        </div>
                                    </div>
    <!-- Text input-->              <div class="row">
                                       <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-4" for="Celular">Celular</label>
                                                <input id="Celular" name="Celular" type="text" placeholder="Celular" class="form-control input-md" value="<?php echo $datos['celular']; ?>" required>
        
                                            </div>
                                         </div>
                                    </div>
    
    
    <!-- Text input-->              <div class="row">
                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-4 " for="Pass">Contraseña</label> 
                                                <input id="Pass" name="Pass" type="text" placeholder="Contraseña" class="form-control input-md" value="<?php echo $datos['password']; ?>" required>
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
                                                <button id="Registrarse" type="submit" name="Registrarse" class="btn btn-dark">Editar</button>
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
    <br> <br><br> <br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br>
</body>
<?php include RUTA_APP . '/views/inc/footer.inc.php';?>
                    