@extends('proyecto.view_layout')


@section('contenido')

<body >
  <header class="bg_animate"> 
    <div class="header_nav">
      <div class="contenedor">
        <h1 style="font-family: 'Oswald', sans-serif;">El Buho Club</h1>
        <nav>
         
          
          <a href="{{url('/inicio')}}">inicio</a>
          <a href="{{url('/servicios')}}">servicios</a>
          <a href="{{url('/contacto')}}">contacto</a>
        </nav>
      </div>
    </div>
    <section class="banner contenedor">
      <section class="banner_titlle">
        <h2 class="tex_banner">necesitas asesorias academicas<br> con tu hijo?</h2>
         <!-- <a href="" class="llamanos"> llamanos ya</a>-->
       
        <a type="button" style="background-color:#1A2849; " class="btn text-white btn-lg">llamanos ya</a>
      </section>
      <div class="banner_img">
        <img src="/imagenes/ima_banner.svg" alt="">
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



    <div class="album py-5 ">
      <div class="container">
  
        <div class="row row-cols-1 row-cols-sm-4 row-cols-md-4 g-4">
          <div class="col">
            <div class="card ">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://4.bp.blogspot.com/-ZIXB-sB1oGQ/WyhWHEXS_dI/AAAAAAAAWEQ/YFaaAFmYy18VfroS59Ha0B4IUJL232xiACLcBGAs/s1600/mejores%2Bcanales%2Byoutube%2Bmatematicas.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title></img>
  
             
            </div>
          </div>
          <div class="col">
            <div class="card " style=" border-radius: 22px 39px 39px 22px;">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://images.twinkl.co.uk/tw1n/image/private/t_630/image_repo/f4/64/ES-T-T-10060-Science-On-Science-Bottles-Display-Cut-Outs-Spanish.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title></img>
  
         
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top"  width="100%" height="225" src="https://blogs.comillas.edu/uts/wp-content/uploads/sites/7/2019/01/English-class.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title></img>
  
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://www.spanishwithvicente.com/wp-content/uploads/2019/12/Hablar-espa%C3%B1ol-online-1024x678.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title></img>
  
            </div>
          </div>
          

        </div>
 

    
    </div>   
  </div>  

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Quienes somos?</h1>
        <p class="lead text-muted">Somos una empresa Opita visionada  ayudar a los niños y jovenes en todas las asignaturas, ofreciendo 
          talleres , clases personalizadas ,auditorias todo esto y mas para apoyar el crecimiento formativo de niños y jovenes de la 
          ciudad de neiva .</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Mas sobre nosotros</a>
          <a href="#" class="btn btn-secondary my-2">Galeria</a>
        </p>
      </div>
    </div>
  </section>

</section>
        <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #505BDA;"></path></svg></div>
<div class="bg_animate_dos">
  <div class="container">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-white">NUESTROS PLANES </h1>
      <h3 class="display-10 fw-normal text-white">Disfruta de nuestros planes diarios, semanales y anuales ,dependiende de los dias que te encuentras utilizar nuestros servicios</h3>
    </div>



  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Diario</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$25.000<small class="text-muted fw-light">/co</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>2 Horas de asesorias</li>
            <li>asesorias de cualquier asignatura</li>
            <li>ayuda con tareas</li>
            <br>
          </ul>
          <button type="button" class="w-100 btn btn-lg btn-outline-primary">Comprar dia</button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Mensual</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$250.000<small class="text-muted fw-light">/co</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>2 Horas de asesorias al dia</li>
            <li>Asesorias de cualquier asignatura</li>
            <li>Ayuda con tareas</li>
            <li>Atencion lunes a viernes</li>
          </ul>
          <button type="button" class="w-100 btn btn-lg btn-outline-primary">Comprar mes</button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-dark border-">
          <h4 class="my-0 fw-normal">Anual</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$2'600.000<small class="text-muted fw-light">/co</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li></li>
            <li>2 Horas de asesorias al dia</li>
            <li>Asesorias de cualquier asignatura</li>
            <li>Ayuda con tareas</li>
            <li>Atencion lunes a sabados ,asesorias virtual y presencial</li>
          </ul>
          <button type="button" class="w-100 btn btn-lg btn-outline-primary">Compra Año</button>
        </div>
      </div>
    </div>
    <br>
    <br>
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