<!doctype html>

<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>El Buho Club</title>
  </head>
  <style>
   *{
     margin: 0;
     padding: 0;
     box-sizing: border-box;
   }

   body{
     font-family: 'roboro','Sans serif';

   }
   .contenedor{
     width: 90%;
     max-width: 1200px;
     margin: auto;
   }
   .bg_animate{
     width: 100%;
     height: 100vh;
     background:linear-gradient(to top, #005C98,#505BDA);
     overflow: hidden;
   }
   
   .bg_animate_dos{
     width: 100%;
     height: 100vh;
     background:linear-gradient(to top, #005C98,#505BDA);
     overflow: hidden;
   }
   .header_nav{
     width: 100%;
     position: absolute;
     top: 0;
     left: 0;


   }
   .header_nav .contenedor{
     display: flex;
     justify-content: space-between;
     align-items: center;
     padding: 15px 0
   }
   .header_nav {
     color: #ffffff;
     font-family: 'Gagalin';
     font-size: 40px;
   }
   .header_nav nav a{
     color: #ffffff;
     text-decoration: none;
     margin-right:10px ;
     font-size: 20px;
 
   }
   .banner{
     display: flex;
     justify-content: space-between;
     align-items: center;
     height: 100%;
    }
    .tex_banner{
      color: #ffffff;
      font-size: 60px;
      font-weight: 800;
      margin-bottom: 20px;   
    }
    .llamanos{
      color: #ffffff;
      font-size: 20px;
      text-decoration: none;
      display: inline-block;
      background: #1A2849;
      padding: 20px;
    }
    .banner_img img{
      width: 600px;
      display: block;
    }
    /*burbujas*/
    .burbuja{
     
       border-radius:50%; 
       background: #ffffff;
       opacity: .3;
       position: absolute;
       bottom: -150;
       animation: burbujas 3s linear infinite ;

    }
    .burbuja:nth-child(1){
      width: 80px;
      height: 80px;
      left: 5%;
      animation-duration: 3s;
      animation-delay: 3s;
    }
    .burbuja:nth-child(2){
      width: 100px;
      height: 100px;
      left: 35%;
      animation-duration: 3s;
      animation-delay: 5s;
    }
    
    .burbuja:nth-child(3){
      width: 20px;
      height: 20px;
      left: 15%;
      animation-duration: 1.5s;
      animation-delay: 7s;
    }
    
    .burbuja:nth-child(4){
      width: 50px;
      height: 50px;
      left: 90%;
      animation-duration: 6s;
      animation-delay: 3s;
    }
    
    .burbuja:nth-child(5){
      width: 70px;
      height: 70px;
      left: 50%;
      animation-duration: 4s;
      animation-delay: 5s;
    }
    @keyframes burbujas{
      0%{
        bottom:0;
        opacity:0;
      }
      30%{
        transform: translateX(30px);
      }
      50%{
        opacity:.4;
      }
      100%{
        bottom:100vh;
        opacity:0;
      }
    }
    
  
    }
  </style>

  
@yield('contenido')


@yield('footer')

@section('opcional')
codigo opcional
Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dicta quae nisi amet obcaecati, dolor laudantium iure, tempore sapiente possimus deleniti tempora aut incidunt non pariatur ducimus hic necessitatibus. Quisquam?
    
@endsection