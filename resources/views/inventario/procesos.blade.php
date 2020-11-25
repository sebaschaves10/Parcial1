@extends('principal')
@section('contenido')
    <h1> Formulario de Registro </h1>

<body>

    <?php
            $nombre = $_POST["nombrePro"];
            $descripcion = $_POST["descripcionPro"];
            $identi = $_POST["identificador"];
            $ciudadCli = $_POST["ciudadCliente"];
            $telefonoCli = $_POST["telCliente"];  
            $generoCli = $_POST["genero"]; 
            $fechaPed = $_POST["fechaPedido"];
            $comida = $_POST["comida"];      
            $envioCli= $_POST["envio"]; 
            $opinionCli = $_POST["opinionCliente"]; 
            $pagoCli = $_POST["pago"];    
    ?>



    <h3>  INFORMACIÓN PEDIDO </h3> 
    <br>
    <h5>Nombre</h5>
        <div class="alert alert-danger" role="alert">
            <?php echo $nombre ?>
        </div>
        <h5>Apellido</h5>
        <div class="alert alert-danger" role="alert">
            <?php echo $decripcion ?>
        </div>
        <h5>Direccion</h5>
        <div class="alert alert-danger" role="alert">
            <?php echo $identi ?>
        </div>
        <h5>Ciudad</h5>
        <div class="alert alert-danger" role="alert">
            <?php echo $ciudadCli ?>
        </div>
        <h5>Telefono</h5>
        <div class="alert alert-danger" role="alert">
            <?php echo $telefonoCli ?>
        </div>
        <h5>Genero</h5>
        <div class="alert alert-danger" role="alert">
            <?php  echo $generoCli ?> 
        </div>
        <h5>Fecha de pedido</h5>
        <div class="alert alert-danger" role="alert">
            <?php  echo $fechaPed ?>    
        </div>
        <h5>Comida</h5>
        <div class="alert alert-danger" role="alert">
            <?php  echo $comida ?> 
        </div>
        <h5>Metodo de envio</h5>
        <div class="alert alert-danger" role="alert">
            <?php  echo $envioCli ?> 
        </div>
        <h5>Opinion</h5>
        <div class="alert alert-danger" role="alert">
            <?php  echo $opinionCli ?> 
        </div>
        <h5>Pago</h5>
        <div class="alert alert-danger" role="alert">
            <?php  echo $pagoCli ?> 
        </div>

</body>

