@extends('principal')
@section('contenido')
<body background="{{url('img/fondo.jpg')}}">
    <div class="container" align="center">
        <h1> BIENVENIDOS A  QUIERO A MI MASCOTA </h2>
        <h5"><br>¡La Mejor Solución!</h5>
        <br>
        <br>

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{url('img/3.png')}}" class="d-block w-100" alt="..." height="500">
                    
                    </div>
                    <div class="carousel-item">
                    <img src="{{url('img/2.png')}}" class="d-block w-100" alt="..." height="500">
                    
                    </div>
                    <div class="carousel-item">
                    <img src="{{url('img/1.png')}}" class="d-block w-100" alt="..." height="500">
                    
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
    </div>
</body>
@stop