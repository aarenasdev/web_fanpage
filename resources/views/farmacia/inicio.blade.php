@extends('farmacia.layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comforter&family=Poppins:ital,wght@1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>INICIO-farmaya</title>
</head>

<div class="control " style="background-color: #752092">
<div class="container">
<header style="background-color:  #752092">

        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">

            
          <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <img src="https://images.vexels.com/media/users/3/208410/isolated/preview/255ad16140fefabeea1ac46cddb59cef-icono-de-carrito-de-compras-de-farmacia.png" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title>
          <span class="fs-4" style="font-family: 'Comforter', cursive;
            font-family: 'Poppins', sans-serif;">farmaya</span>
          </a>
        <form id="buscador" class="" style="padding-left: 25%; padding-top:0.5%">
            <input type="text" name="buscador" id="buscador-top" placeholder="Busca aqui tu producto">
            <input class="boton" type="button" value="Buscar" id="btn-top">
          </form>
    
          <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-dark text-decoration-none" href="#">Inicio</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="#">productos</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="#" style="padding:10%  " ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg></a>
           <!-- Button trigger modal -->
            <button type="button" class="btn btn" data-bs-toggle="modal" data-bs-target="#Login"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
              </svg>

             </button>
  
  <!-- Modal -->
  <div class="modal fade" id="Login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-5 shadow">
          <div class="modal-header p-5 pb-4 border-bottom-0">
          
            <h3 class="fw-bold mb-0">Inicia sesion o registrate en cuestion de segundos</h3>   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
          </div>
    
          <div class="modal-body p-5 pt-0">
            <form class="">
              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Correo electronico</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
              </div>
              <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Inciar sesion</button>
              <small class="text-muted">Aceptas terminos y condiciones.</small>
              <hr class="my-4">
              <h2 class="fs-5 fw-bold mb-3">Usa tu correo electronico u otro servicio pra continuar con Farmaya</h2>
              <button class="w-100 py-2 mb-2 btn btn-dark rounded-4" type="submit">
                <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"/></svg>
                Usar Twitter
              </button>
              <button class="w-100 py-2 mb-2 btn btn-primary rounded-4" type="submit">
                <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"/></svg>
                Usar Facebook
              </button>
              <button class="w-100 py-2 mb-2 btn btn-secondary rounded-4" type="submit">
                <svg class="bi me-1" width="16" height="16"><use xlink:href="#google"/></svg>
                Usar Google
              </button>
            </form>
          </div>
        </div>
      </div>
  </div>
          </nav>
        </div>
</header>
</div>
</div>
<body>


    <div class="container">
        <div class="row">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="https://www.pantallea.com/wp-content/uploads/2019/10/3-sectores-farmacia_16-768x478.jpg" class="d-block w-100" height="350px" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="https://www.sefac.org/sites/default/files/banner/2021-07/AF_banner-lateral-derecho-335x160px_tevafarmacia_1.jpg"  height="350px" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://i.ytimg.com/vi/H6peGQdTLCk/maxresdefault.jpg" class="d-block w-100"  height="350px" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

      
        
        </div>
    </div>
   


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>