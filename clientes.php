<?php include("template/header.php"); require 'template/clientes.php';?>

            <h3 class="my-3"> Formulario de registro clientes</h3>
            
            <?php if($guardaCorrecto){ ?>
                <div class="alert alert-success col-md-7 " role="alert">
                    Se guardo correctamente el registro
                </div>
            <?php } ?>
            
            <form class="my-2 col-md-6" action="" method="post" id="formularioValidacion">
                <div class="form-group">
                    <label for="InputNombre"> Nombre </label>
                    <input type="text" class="form-control" name ="textNombre" id="textNombre" placeholder="Nombre del cliente" minlength="3" required>
                </div>                
                
                <div class="form-group">
                    <label for="InputApellido">Apellido</label>
                    <input type="text" class="form-control" name="textApellido" id="textApellido" placeholder="Apellido del cliente" minlength="3" required>
                </div>
                
                <div class="col">
                    <label for="InputIdentificador">Identificador</label>
                    <input type="text" class="form-control" name="textIdentificador" id="textIdentificador" placeholder="Número de identificador 6 caracteres">
                </div>
                                                                  
                                
                <div class="form-group my-4">
                    <button value="btnRegistrarCliente" class="btn btn-primary" type="Submit" name="accion"> Registrar </button>
                </div>
            </form>
            
    
<?php include("template/footer.php") ?>