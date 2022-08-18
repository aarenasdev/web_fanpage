@extends('proyecto.view_layout')


@section('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Glory:ital,wght@1,800&display=swap" rel="stylesheet">
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
          <h2 class="tex_banner">Conoce todos los servicio que <br> El Buho Club<br> tiene para ti </h2>
           <!-- <a href="" class="llamanos"> llamanos ya</a>-->
         
          <a type="button" style="background-color:#1A2849; " class="btn text-white btn-lg">llamanos ya</a>
        </section>
        <div class="banner_img">
          <img src="/imagenes/servicio.svg" alt="">
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

    <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path   d="M0.00,49.98 C149.99,150.00 271.49,-49.98 503.67,115.95 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill:#005C98;"></path></svg></div>

<section style="background-color: white  ;padding-top:80px; padding-bottom:150px;">
 

<div class="container">



<center>
   <h1 style="font-family: 'Anton', sans-serif;">NUESTROS CAMPOS</h1>
  </center>
  <br><br>
   <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="200" height="200" src="/imagenes/primaria.png" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>

        <h2>Primaria</h2> <br>
        <p style="font-family: 'Glory', sans-serif;">Sabemos la importancia de apoyar a nuestros niños  en <br>su etapa mas temprana , es por eso que El Buho Club<br>
          cuenta con profesoras altamente calificadas en el sector<br> infantes , que apoyaran  ,acompañaran y reforzaran a<br> sus 
          niños para que sus primeros pasos sean fuertes y firmes. <br><br>
        </p>
        <p><a class="btn btn-secondary" href="#">Conocer mas &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle"  width="200" height="200" src="/imagenes/adolecente.svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>

        <h2>Secundaria</h2>
        <p style="font-family: 'Glory', sans-serif;">La Secundaria un parte de la educacion tan importante <br> donde los estudiantes deben tener sus buenas en las <br>principales materias, en este punto los
           jovenes deciden <br> que van a estudiar, es por eso que El Buho Club cuenta <br> con profesores altamente calificadas en el sector  juvenil,<br> que apoyaran  
           ,acompañaran y reforzaran a  sus  jovenes<br> en este paso de colegio a universidad.</p>
        <p><a class="btn btn-secondary" href="#">Conocer mas&raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img " width="200" height="200" src="/imagenes/universidad.svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>

        <h2>Universidad</h2>
        <p  style="font-family: 'Glory', sans-serif;">La Universidad es un lugar donde debes dar lo mejor de ti ya que te estas convitiendo en un profesional , que mejor manera que estudiar que tener un tutor o asesor que te apoyara
          en todos aquellos temas que se te dificulten y ayudarte a despejar dudas que en el estudio con comunes , EL Buho Club ofresor tutores y aseosres altamente capacitados
          para apoyar en tu paso hacer un gran profesional.
        </p>
        <p><a class="btn btn-secondary" href="#">Conocer mas &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    
    
</div>
</section>



    </body>


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