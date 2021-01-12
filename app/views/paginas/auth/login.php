 <?php include RUTA_APP . '/views/inc/cabeza.inc.php'?>
 <head>
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
                
                <ul class="navbar-nav ml-auto">
                   
                </ul>
            </div>
        </nav>
    </section>
</head>
<body style="background-color:#a2ded0;">
   
    <br>
    <br>
    <br>
    <br>
<div class="container" >
    
     <div class=row>
        
            <div class="col-sm-4"></div>
            
                <div class="card " style="background-color:#a2ded0; border:solid #000;">
                    <div class=card-header>
                        <h4> <?php if(isset($datos)) echo $datos['titulo']; ?></h4>
                        login <i class="fa fa-key text-warning float-right"></i>
                        
                    </div>
                    <div class=card-body>
                        
                        <form action="<?php echo RUTA_URL;?>/auths/login" method="POST">
                            <div class="form-group">
                                <label for="correo">Direccion de correo</label>
                                <input type="email" class="form-control" id="correo" name="correo" aria-describeby="emailHelp" required placeholder="Email">
                                <small id="emailhelp" class="form-text text-muted">Nunca comparta su contraseña con nadie</small>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required placeholder="Password"> 
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    
            </div>
     </div>
</div>
<br>
<br></body>
<footer>
    <?php include RUTA_APP . '/views/inc/footer.inc.php';?>
</footer>
</html>
</html>