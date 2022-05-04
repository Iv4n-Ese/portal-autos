<?php include("template/header.php"); require 'template/vendedores.php';?>

            <h3 class="my-3"> Formulario de registro de ventas</h3>
            
            <?php if($guardaCorrecto){ ?>
                <div class="alert alert-success col-md-7 " role="alert">
                    Se guardo correctamente el registro
                </div>
            <?php } ?>
            
            <form class="my-2 col-md-6" action="" method="post" id="formularioValidacion">
                <div class="form-group">
                    <label for="InputNombreV"> Nombre </label>
                    <input type="text" class="form-control" name ="textNombreV" id="textNombreV" placeholder="Nombre del cliente" minlength="3" required>
                </div>                
                
                <div class="form-group">
                    <label for="InputMarca">Marca</label>
                    <input type="text" class="form-control" name="textMarca" id="textMarca" placeholder="Identificador de la marca" >
                </div>
                
                <div class="col">
                    <label for="InputIdentificadorC">Cliente</label>
                    <input type="text" class="form-control" name="textIdentificadorC" id="textIdentificadorC" placeholder="Identificador del cliente">
                </div>
                                                                  
                                
                <div class="form-group my-4">
                    <button value="btnRegistrarVendedor" class="btn btn-primary" type="Submit" name="accion"> Registrar </button>
                </div>
            </form>
            
    
<?php include("template/footer.php") ?>