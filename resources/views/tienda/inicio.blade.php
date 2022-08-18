@extends('tienda.view_layout')


@section('contenido')

<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>EcoTurist</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>

<div class="container1">
<div class="header1">


  <nav>
      <ul class="ul1">

          <li class="li1">
              <a class="a1 text.danger" href="#">INCIO</a>
          </li>

          <li class="li1">
              <a class="a1" href="#">SOBRE NOSOTROS</a>
          </li>

          <li class="li1">
              <a class="a1" href="#">NUESTROS PLANES</a>
          </li>

          <li class="li1">
              <a class="a1" href="#">CONTACTO</a>
          </li>
 
  <li class="li1">
    <a class="a1" href="{{url('/login')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
    </svg> </a>
  </li>

      </ul>
  </nav>
</div>













<!--Waves Container-->
<div style="padding-top: 425px" >
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
</g>
</svg>
</div>
<!--Waves end-->

</div>

<br>

<center>
  <div class="container">
  <img src="/imagenes/logodos.png" width="600px" height="250px">
  <h1 style="color: green">BIENVENIDOS</h1>
  <p><h6  style="color: green">La vida es lo que haces con ella, y EcoTurist te ofrece todas las oportunidades para que sea espectacular. <br> Desde acampadas en la mitad de la jungla 
     hasta relajarse en la playa, tocar un tambor garífuna o bucear en las<br> profundidades del mar, esperamos que disfrute cada momento aquí en EcoTurist 
     tanto como nosotros<br>  disfrutamos tenerte a ti.</h6></p>
    </div>
</center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
@endsection
