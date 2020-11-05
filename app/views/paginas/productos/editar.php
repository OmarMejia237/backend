<?php include RUTA_APP . '/views/inc/cabeza.inc.php'; ?>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">              
                <div class="card aqua">
                    <div class="card-header"> Editar <i class="fa fa-user text-warning float-right"></i></div>
                    <div class="card-body">
                        <form action="<?php echo RUTA_URL;?>/productos/editar/<?php echo $datos['id_prod']; ?>" method="post" enctype="multipart/form-data">
                            <legend>Registro de producto</legend>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-4" for="nomPro">Nombre del producto</label>  
                                            <input  id="nomPro"name="nomPro" type="text" placeholder="Nombre del producto" class="form-control input-md" value="<?php echo $datos['nombre']?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-4" for="Categoria">Categoría</label>
                                            <select id="Categoria" name="Categoria" class="form-control">
                                                <option value="3">Frutas</option>
                                                <option value="4">Verduras</option>
                                                <option value="5">Enlatados</option>
                                                <option value="2">Ropa</option>
                                                 <option value="6">Miscelanea</option>
                                            </select>
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
    <?php include RUTA_APP . '/views/inc/footer.inc.php'; ?>