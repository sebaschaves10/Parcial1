@extends('principal')
@section('contenido')
    
    <body background="{{url('img/fondo.jpg')}}">
        <div class="container" align="center">
            <h1 > SOBRE NOSOTROS </h1>
            <h2 style="color: orange;"><br>MISIÓN</h2>
            <br>
            <h4>La Misión de Tienda de Mascotas consiste en brindar una solución integral a la atención de la mascota, a partir de una inmejorable oferta de producto, precio, calidad y servicio.</h4>
            <br>
            <br>
            <h2 style="color: orange;"><br>VISIÓN</h2>
            <br>
            <h4>La Visión de Tienda de Mascotas es continuar siendo la empresa Nº 1 en la comercialización de productos para mascotas en la Región Patagónica, operando con sucursales en las principales ciudades.</h4>
            <br>
            <img src="{{url('img/perro.jpg')}}" height="300">
        </div>
    </body>

    <a href="{{ url('/') }}"> Regresar </a>
@stop

