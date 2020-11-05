<?php include RUTA_APP . '/views/inc/cabeza.inc.php'?>
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
                            <form action="<?php echo RUTA_URL;?>/productos/borrar/<?php echo $datos['id_prod']?>" method="POST">
                                <legend>Registro de producto</legend>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-sm-4" for="nomPro">Nombre del producto</label>  
                                            <input  id="nomPro"name="nomPro" type="text" placeholder="Nombre del producto" class="form-control input-md" value="<?php echo $datos['nombre']?>" readonly>
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
<?php include RUTA_APP . '/views/inc/footer.inc.php';?>