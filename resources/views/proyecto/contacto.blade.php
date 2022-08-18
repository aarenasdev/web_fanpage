@extends('proyecto.view_layout')


@section('contenido')


  <body >
    <header class="bg_animate"> 
      <div class="header_nav">
        <div class="contenedor">
          <h1 style="font-family: 'Oswald', sans-serif;">El Buho Club</h1>
          <nav>
            <!--<a onclick="location.href = '{{ route('servicios' ) }}'" >Inicio</a> -->
            <a href="{{url('/inicio')}}">inicio</a>
            <a href="{{url('/servicios')}}">servicios</a>
            <a href="{{url('/contacto')}}">contacto</a>
          </nav>
        </div>
      </div>
      <section class="banner contenedor">
        <section class="banner_titlle">
          <h2 class="tex_banner">VEN!! <br>Nosotros te acesoramos</h2>
           <!-- <a href="" class="llamanos"> llamanos ya</a>-->
         
          <a type="button" style="background-color:#1A2849; " class="btn text-white btn-lg">llamanos ya</a>
        </section>
        <div class="banner_img">
          <img style="padding-left:50px;" src="/imagenes/contacto.svg" alt="">
        </div>
      </section>
      <div class="burbujas">
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
      </div>
    </header>

    
<section style="background-color: white ">
 
  <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path   d="M0.00,49.98 C149.99,150.00 271.49,-49.98 503.67,115.95 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill:#005C98;"></path></svg></div>

<div class="container">
  <div class="row">
    <div class="col-6">

  

    </body>
    <h1>si quieres conocer mas comunicate con nosotros</h1>
    <h5>llena este formulario y pronto no pondremos en contacto contigo</h5>
    <br>

      <form action="{{'admi.store'}}" method="POST">
        <div class="mb-3">       
          <input type="text" name="nombre" class="form-control" placeholder="nombre" >
        </div>
        <div class="mb-3">
          <input type="text" name="apellidos" class="form-control" placeholder="apellidos" >
        </div>
        <div class="mb-3">
            <input type="text" name="ciudad" class="form-control" placeholder="ciudad" >
          </div>
          <div class="mb-3">
            <input type="text" name="celular" class="form-control" placeholder="celular" >
          </div>
          
        
        <button type="submit" class="btn btn-primary">enviar</button>
      </form>

      
    </div>
    <div class="col-6">
        <img style="padding-left:90px;" src="/imagenes/contacto_banner.svg" alt="">
    </div>
  </div>

</div>

</div>
    @endsection


    @section('footer')

 
<section style="background-color: #E3E3FF; padding-top:40px;padding-bottom:40px;">
  <ul class="nav justify-content-center">
   
    <li class="nav-item">
      <a class="nav-link" href="#"><h4>Inicio</h4></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><h4>Servicios</h4></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><h4>Contacto</h4></a>
    </li>
  </ul>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>
@endsection
@yield('opcional')