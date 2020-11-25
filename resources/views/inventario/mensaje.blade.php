@extends('principal')
@section('contenido')

    <h1> Producto Registrado </h1>
    <body>

    <?php
            $nombreCli = $_POST["nombreCliente"];
            $apellidoCli = $_POST["apellidoCliente"];
            $direccionCli = $_POST["dirCliente"];
            $ciudadCli = $_POST["ciudadCliente"];
            $telefonoCli = $_POST["telCliente"];  
            $correoCli = $_POST["correoCliente"];
            $generoCli = $_POST["genero"]; 
            $fechaNaci = $_POST["fechaNacimiento"];
            $producto = $_POST["producto"];      
            $envioCli= $_POST["envio"]; 
            $opinionCli = $_POST["opinionCliente"]; 
            $pagoCli = $_POST["pago"]; 
        
    ?>



   </body>

    <h3 align="center" style="color: white;">  INFORMACIÓN PEDIDO </h3> 
    <br>
    <div class="container">
        <div class="card-body">
                <div class="form-row">
                    <div class="col">
                        <div class="card booking-card">
                            <div class="view overlay">
                                <img class="card-img-top" src="{{url('img/factura.png')}}"  alt="Card image cap">
                                <div class="mask rgba-white-slight"></div>
                            </div>
                            <div class="card-body">
                                
                                <div class="alert alert-dark" role="alert">Nombre:
                                    <?php echo $nombreCli ?>
                                </div>
                                
                                <div class="alert alert-dark" role="alert"> Apellido:
                                    <?php echo $apellidoCli ?>
                                </div>
                                
                                <div class="alert alert-dark" role="alert"> Direccion:
                                    <?php echo $direccionCli ?>
                                </div>
                                
                                <div class="alert alert-dark" role="alert"> Ciudad:
                                    <?php echo $ciudadCli ?>
                                </div>
                                
                                <div class="alert alert-dark" role="alert"> Telefono:
                                    <?php echo $telefonoCli ?>
                                </div>
                               
                                <div class="alert alert-dark" role="alert"> Corrreo:
                                    <?php  echo $correoCli ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col">
                        <div class="card booking-card">
                            <div class="view overlay">
                            <img class="card-img-top" src="{{url('img/factura.png')}}"  alt="Card image cap">
                                <div class="mask rgba-white-slight"></div>
                            </div>
                            <div class="card-body" >
                                
                                <div class="alert alert-dark" role="alert"> Genero:
                                    <?php  echo $generoCli ?> 
                                </div>
                                
                                <div class="alert alert-dark" role="alert"> Fecha:
                                    <?php  echo $fechaNaci ?>    
                                </div>
                                
                                <div class="alert alert-dark" role="alert"> Producto:
                                    <?php  echo $producto ?> 
                                </div>
                               
                                <div class="alert alert-dark" role="alert"> Envio:
                                    <?php  echo $envioCli ?> 
                                </div>
                                
                                <div class="alert alert-dark" role="alert"> Opinion:
                                    <?php  echo $opinionCli ?> 
                                </div>
                        
                                <div class="alert alert-dark" role="alert"> Tipo pago:
                                    <?php  echo $pagoCli ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    
    <div class="container" align="center">
        <div class="card booking-card">

            <?php 
                echo "Muchas gracias por tu compra, ".$_POST['nombreCliente']." ".$_POST['apellidoCliente'].".";
            ?>
        
            <?php 
                echo "En un momento se enviará el producto a tu domicilio, a tu correo: ".$_POST['correoCliente']." se envío tu factura electronica. El tiempo de entrega de tu domicilio es entre 4 y 5 dias habiles."; 
            ?>
            <?php
                echo "Si el repartidor de la empresa Servientrega tiene problemas con tu direccion se llamara al numero que nos proporcionaste el cual es: ".$_POST['telCliente'].".";
            ?>
            <?php
                echo "<b>¡Que tu mascota disfrute su ".$_POST['producto']."!.</b>";
            ?>
        </div>
    </div>
</body>
<html>
@stop 