@extends('principal')
@section('contenido')
<body background="{{url('img/fondo.jpg')}}">
    
    <div class="container" align="center">
    <h1> TODO PARA PERROS</h1>
    <h5><br>Encuentra los mejores productos para tu Perro</h5>
        <div class="form-row">
        
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{url('img/prod1.png')}}" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Alimento para Perros</h5>
                        <p class="card-text">Codigo: 111</p>
                        <p class="card-text">Precio: 16900</p>
                        <a href="{{url('/reservas')}}" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{url('img/prod2.png')}}" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Comedero Antideslizante</h5>
                        <p class="card-text">Codigo: 222</p>
                        <p class="card-text">Precio: 35900</p>                        
                        <a href="{{url('/reservas')}}" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{url('img/prod3.png')}}" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Snake Dental</h5>
                        <p class="card-text">Codigo: 333</p>
                        <p class="card-text">Precio: 8700</p>                        
                        <a href="{{url('/reservas')}}" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{url('img/prod4.png')}}" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Correa Solaris</h5>
                        <p class="card-text">Codigo: 444</p>
                        <p class="card-text">Precio: 21900</p>
                        <a href="{{url('/reservas')}}" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{url('img/prod5.png')}}" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Alimento Humedo</h5>
                        <p class="card-text">Codigo: 555</p>
                        <p class="card-text">Precio: 17000</p>
                        <a href="{{url('/reservas')}}" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{url('img/prod6.png')}}" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Juguete</h5>
                        <p class="card-text">Codigo: 666</p>
                        <p class="card-text">Precio: 22600</p>
                        <a href="{{url('/reservas')}}" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    <footer class="page-footer font-small black pt-4" style="color: orange;" c>
        <div class="container-fluid text-center text-md-left">
            <div align="center">
                <div class="input-group mb-3">
                    <div style="font-size: 2rem;">
                        <div><i class="fab fa-facebook-f fa-fw white-text"></i></div>  
                    </div>
    
                    <div style="font-size: 2rem;">
                        <div><i class="fab fa-instagram fa-fw white-text"></i></div>
                    </div> 
                </div>
            </div> 
                
            <div class="input-group mb-3">
                
                <h5 class="footer-copyright text-center py-3"><br>¡Tu Solución!</h5>
            </div>      
        </div>

        <div class="footer-copyright text-center py-3">© 2020   QUIERO A MI MASCOTA
            <a href="https://mdbootstrap.com/"></a>
        </div>
    </footer>

</body>
@stop