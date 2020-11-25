@extends('principal')
@section('contenido')
    <h1> Datos de Compra </h1>

    @php
        $producto = 'Manzanas';
    @endphp

    <form action="{{ route('registrado')}}" action="./views/invetario/procesos.blade.php" method= "POST">
            @csrf
                    <!-- Material input -->
                    <h3 align="center"> PEDIDO </h3>
                    <div class="form-row" >
                        <div class="col">
                            <div class="md-form">
                                Nombre 
                                <input type="text" id="nombreCliente" name="nombreCliente" class="form-control" style="color: black;" required>
                                <label for="nombreCliente"</label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="md-form">
                                Apellido
                                <input type="text" id="apellidoCliente" name="apellidoCliente" class="form-control" style="color: black;" required>
                                <label for="apellidoCliente"</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form">
                                Direccion
                                <input type="text" id="dirCliente" name="dirCliente" class="form-control" style="color: black;" required>
                                <label for="dirCliente"</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="md-form">
                                Ciudad
                                <input type="text" id="dirCliente" name="ciudadCliente" class="form-control" style="color: black;" required>
                                <label for="ciudadCliente"</label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="md-form">
                                Telefono
                                <input type="number" id="telCliente" name="telCliente" class="form-control" style="color: black;" required>
                                <label for="telCliente"</label>
                            </div>
                        </div>
                        <div class="col"> 
                            <div class="md-form">
                                Correo
                                <input type="email" id="correoCliente" name="correoCliente" class="form-control" style="color: black;" required>
                                <label for="correoCliente"</label>
                            </div>
                        </div>
                    </div>
                    
                    <br>
                    <h5>Seleccione Genero</h5>
                
                    <div>
                        <input name="genero" type="radio" id="femenino" value="Femenino" style="color: black;" />
                        <label for="femenino" style="color: black;"> Femenino </label>

                        <input name="genero" type="radio" id="masculino" value="Masculino" style="color: black;" />
                        <label for="masculino" style="color: black;"> Masculino </label>
                    </div>
                    <br>

                    <div class="form-row">
                        <div class="col">
                            <div class="md-form">
                                Fecha de nacimiento
                                <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control" style="color: black;" required>
                                <label for="fechaNacimiento" </label>
                            </div>
                        </div>

                        <div class="col">
                            Seleccione su Producto
                            <select class="browser-default custom-select" name="producto"> 
                                <option value="" disabled selected>Productos</option>
                                <option value="Alimento para perros" id="alimentoPerro">Alimento para Perros</option>
                                <option value="Alimento para gatos" id="alimentoGato">Alimento para Gatos</option>
                                <option value="Comederon antideslizante" id="comederoAntides">Comederon antideslizante</option>
                                <option value="Snake dental perro" id="snakeDentalPerro">Snake Dental Perro</option>
                                <option value="Snake dental gato" id="snakeDentalGato">Snake Dental Gato</option>
                                <option value="Correa solaris" id="correaSolaris">Correa Solaris</option>
                                <option value="Alimento humedo perro" id="alimHumedPerro">Alimento Humedo Perro</option>
                                <option value="Alimento humedo gato" id="alimHumedGato">Alimento Humedo Gato</option>
                                <option value="Juguete perro" id="juguetePerro">Juguete Perro</option>
                                <option value="Juguete gato" id="jugueteGato">Juguete Gato</option>
                            </select>
                        </div>
                    </div>
                    <br><br>
                    <h5>Metodo de envio</h5>
                    <h6>(Después de acreditado el pago. $ 9.900 imp incl y se hace por medio de la empresa Servientrega).</h6>
                    <div>
                        <input name="envio" type="radio" id="domicilio" value="Domicilio" style="color: black;" />
                        <label for="domicilio">Domicilio</label>
                    </div>
                    <br>
                    <h6>Si desea dejarnos un comentario acerca de su pedido, por favor, escríbalo a continuación.</h6>
                    <div class="md-form">
                        <input type="text" id="opinionCliente" name="opinionCliente" class="form-control" style="color: black;">
                        <label for="opinionCliente" style="color: balck;"></label>
                    </div>

                    <h5>Tipo de Pago</h5>
                    
                    <div>
                        <input name="pago" type="radio" id="credito" value="Tarjeta de Credito" />
                        <label for="credito"> Tarjeta de Credito </label>

                        <input name="pago" type="radio" id="debito" value="Tarjeta Debito" />
                        <label for="debito"> Tarjeta Debito </label>
                    </div>
                    <br>
                    <h6>Estoy de acuerdo con los términos del servicio y los acepto sin reservas.</h6>
                    <div>
                        <input name="acuerdo" type="radio" id="acepto" value="Acepto" required>
                        <label for="acepto">Acepto terminos</label>
                    </div>

                    <br> <br>

                    <button  class="btn btn-primary" id="Enviar">Enviar</button>
                    <button type="reset" class="btn btn-primary">Limpiar</button>
                    <button type="button" class="btn btn-primary">Ejecutar</button>
                </form>
   

   

@stop