<?php include("template/header.php") ?>

<div class="jumbotron my-5">
            <h1 class="display-4">Bienvenido al catálogo de clientes y vendedores</h1>
            <p class="lead">
            Aquí podrás registrar la información correspondiente a los clientes, vendedores y vehículos de esta concesionaria. Así como obtener estadísticas.
            </p>
            
            <hr class="my-4">
        </div>
    
<?php 
    // cargar archivo conexion
    include("conexion/db.php");

    $sentencia = $pdo ->prepare("SELECT * FROM clientes");
    $sentencia -> execute();
    $listaClientes = $sentencia -> fetchAll(PDO::FETCH_ASSOC);

?>
        <div class="row">
            <h1>Clientes</h1>

            <table class="table table-hover">
                
                <thead class="thead-dark text-center">
                    <tr>
                        <th> Nombre </th>
                        <th> Apellido </th>
                        <th> identificador </th>                                                
                    </tr>
                </thead>
                    <?php foreach($listaClientes as $cliente){ ?>
                        
                    <tbody>
                        <tr>                            
                            <td> <?php echo $cliente['Nombre']; ?></td>
                            <td> <?php echo $cliente['Apellido']; ?></td>
                            <td> <?php echo $cliente['identificador']; ?></td>                                  
                        </tr>
                    </tbody>
                    <?php } ?>
            </table>
            <h1>Vendedores ventas</h1>

            <?php 
            
            $sentenciaV = $pdo ->prepare("SELECT v.Nombre AS NOMBRE, vh.Marca AS MARCA, c.Nombre AS CLIENTE from vendedores as v INNER JOIN vehiculos as vh ON v.Id_vehiculo = vh.Id_vehiculo INNER JOIN clientes as c ON v.Id_cliente = c.Id_cliente");
            $sentenciaV -> execute();
            $listaVendedores = $sentenciaV -> fetchAll(PDO::FETCH_ASSOC);

            ?>
            <table class="table table-hover">
                
                <thead class="thead-dark text-center">
                    <tr>
                        <th> Nombre </th>
                        <th> Marca </th>
                        <th> Cliente </th>                                                
                    </tr>
                </thead>
                    <?php foreach($listaVendedores as $vendedores){ ?>
                        
                    <tbody>
                        <tr>                            
                            <td> <?php echo $vendedores['NOMBRE']; ?></td>
                            <td> <?php echo $vendedores['MARCA']; ?></td>
                            <td> <?php echo $vendedores['CLIENTE']; ?></td>                                  
                        </tr>
                    </tbody>
                    <?php } ?>
            </table>
        </div>



<?php include("template/footer.php") ?>