<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>DDEM - Dashboard</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'><link rel="stylesheet" href="./style.css">

</head>
<style>
@import 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet';

:root {
	--dk-gray-100: #F3F4F6;
	--dk-gray-200: #E5E7EB;
	--dk-gray-300: #D1D5DB;
	--dk-gray-400: #9CA3AF;
	--dk-gray-500: #6B7280;
	--dk-gray-600: #4B5563;
	--dk-gray-700: #374151;
	--dk-gray-800: #1F2937;
	--dk-gray-900: #111827;
	--dk-dark-bg: #313348;
	--dk-darker-bg: #2a2b3d;
	--navbar-bg-color: #6f6486;
	--sidebar-bg-color: #252636;
	--sidebar-width: 250px;
}

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	font-family: 'Inter', sans-serif;
	background-color: var(--dk-darker-bg);
	font-size: .925rem;
}

#wrapper {
	margin-left: var(--sidebar-width);
	transition: all .3s ease-in-out;
}

#wrapper.fullwidth {
	margin-left: 0;
}



/** --------------------------------
 -- Sidebar
-------------------------------- */
.sidebar {
	background-color: var(--sidebar-bg-color);
	width: var(--sidebar-width);
	transition: all .3s ease-in-out;
	transform: translateX(0);
	z-index: 9999999
}

.sidebar .close-aside {
	position: absolute;
	top: 7px;
	right: 7px;
	cursor: pointer;
	color: #EEE;
}

.sidebar .sidebar-header {
	border-bottom: 1px solid #2a2b3c
}

.sidebar .sidebar-header h5 a {
	color: var(--dk-gray-300)
}

.sidebar .sidebar-header p {
	color: var(--dk-gray-400);
	font-size: .825rem;
}

.sidebar .search .form-control ~ i {
	color: #2b2f3a;
	right: 40px;
	top: 22px;
}

.sidebar > ul > li {
	padding: .7rem 1.75rem;
}

.sidebar ul > li > a {
	color: var(--dk-gray-400);
	text-decoration: none;
}

/* Start numbers */
.sidebar ul > li > a > .num {
	line-height: 0;
	border-radius: 3px;
	font-size: 14px;
	padding: 0px 5px
}

.sidebar ul > li > i {
	font-size: 18px;
	margin-right: .7rem;
	color: var(--dk-gray-500);
}

.sidebar ul > li.has-dropdown > a:after {
	content: '\eb3a';
	font-family: unicons-line;
	font-size: 1rem;
	line-height: 1.8;
	float: right;
	color: var(--dk-gray-500);
	transition: all .3s ease-in-out;
}

.sidebar ul .opened > a:after {
	transform: rotate(-90deg);
}

/* Start dropdown menu */
.sidebar ul .sidebar-dropdown {
	padding-top: 10px;
	padding-left: 30px;
	display: none;
}
.sidebar ul .sidebar-dropdown.active {
	display: block;
}

.sidebar ul .sidebar-dropdown > li > a {
  font-size: .85rem;
	padding: .5rem 0;
	display: block;
}
/* End dropdown menu */

.show-sidebar {
	transform: translateX(-270px);
}

@media (max-width: 767px) {
	.sidebar ul > li {
		padding-top: 12px;
		padding-bottom: 12px;
	}

	.sidebar .search {
		padding: 10px 0 10px 30px
	}
}




/** --------------------------------
 -- welcome
-------------------------------- */
.welcome {
	color: var(--dk-gray-300);
}

.welcome .content {
	background-color: var(--dk-dark-bg);
}

.welcome p {
	color: var(--dk-gray-400);
}




/** --------------------------------
 -- Statistics
-------------------------------- */
.statistics {
	color: var(--dk-gray-200);
}

.statistics .box {
	background-color: var(--dk-dark-bg);
}

.statistics .box i {
	width: 60px;
	height: 60px;
	line-height: 60px;
}

.statistics .box p {
	color: var(--dk-gray-400);
}




/** --------------------------------
 -- Charts
-------------------------------- */
.charts .chart-container {
	background-color: var(--dk-dark-bg);
}

.charts .chart-container h3 {
	color: var(--dk-gray-400)
}




/** --------------------------------
 -- users
-------------------------------- */
.admins .box .admin {
	background-color: var(--dk-dark-bg);
}

.admins .box h3 {
	color: var(--dk-gray-300);
}

.admins .box p {
	color: var(--dk-gray-400)
}




/** --------------------------------
 -- statis
-------------------------------- */
.statis {
	color: var(--dk-gray-100);
}

.statis .box {
	position: relative;
	overflow: hidden;
	border-radius: 3px;
}

.statis .box h3:after {
	content: "";
	height: 2px;
	width: 70%;
	margin: auto;
	background-color: rgba(255, 255, 255, 0.12);
	display: block;
	margin-top: 10px;
}

.statis .box i {
	position: absolute;
	height: 70px;
	width: 70px;
	font-size: 22px;
	padding: 15px;
	top: -25px;
	left: -25px;
	background-color: rgba(255, 255, 255, 0.15);
	line-height: 60px;
	text-align: right;
	border-radius: 50%;
}





.main-color {
	color: #ffc107
}

/** --------------------------------
 -- Please don't do that in real-world projects!
 -- overwrite Bootstrap variables instead.
-------------------------------- */

.navbar {
	background-color: var(--navbar-bg-color) !important;
	border: none !important;
}
.navbar .dropdown-menu {
	right: auto !important;
	left: 0 !important;
}
.navbar .navbar-nav>li>a {
	color: #EEE !important;
	line-height: 55px !important;
	padding: 0 10px !important;
}
.navbar .navbar-brand {color:#FFF !important}
.navbar .navbar-nav>li>a:focus,
.navbar .navbar-nav>li>a:hover {color: #EEE !important}

.navbar .navbar-nav>.open>a,
.navbar .navbar-nav>.open>a:focus,
.navbar .navbar-nav>.open>a:hover {background-color: transparent !important; color: #FFF !important}

.navbar .navbar-brand {line-height: 55px !important; padding: 0 !important}
.navbar .navbar-brand:focus,
.navbar .navbar-brand:hover {color: #FFF !important}
.navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {margin: 0 !important}
@media (max-width: 767px) {
	.navbar>.container-fluid .navbar-brand {
		margin-left: 15px !important;
	}
	.navbar .navbar-nav>li>a {
		padding-left: 0 !important;
	}
	.navbar-nav {
		margin: 0 !important;
	}
	.navbar .navbar-collapse,
	.navbar .navbar-form {
		border: none !important;
	}
}

.navbar .navbar-nav>li>a {
	float: left !important;
}
.navbar .navbar-nav>li>a>span:not(.caret) {
	background-color: #e74c3c !important;
	border-radius: 50% !important;
	height: 25px !important;
	width: 25px !important;
	padding: 2px !important;
	font-size: 11px !important;
	position: relative !important;
	top: -10px !important;
	right: 5px !important
}
.dropdown-menu>li>a {
	padding-top: 5px !important;
	padding-right: 5px !important;
}
.navbar .navbar-nav>li>a>i {
	font-size: 18px !important;
}




/* Start media query */

@media (max-width: 767px) {
	#wrapper {
		margin: 0 !important
	}
	.statistics .box {
		margin-bottom: 25px !important;
	}
	.navbar .navbar-nav .open .dropdown-menu>li>a {
		color: #CCC !important
	}
	.navbar .navbar-nav .open .dropdown-menu>li>a:hover {
		color: #FFF !important
	}
	.navbar .navbar-toggle{
		border:none !important;
		color: #EEE !important;
		font-size: 18px !important;
	}
	.navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {background-color: transparent !important}
}


::-webkit-scrollbar {
	background: transparent;
	width: 5px;
	height: 5px;
}

::-webkit-scrollbar-thumb {
	background-color: #3c3f58;
}

::-webkit-scrollbar-thumb:hover {
	background-color: rgba(0, 0, 0, 0.3);
}

</style>
<body>
<!-- partial:index.partial.html -->
<aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
  <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
  <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
    <img
         class="rounded-pill img-fluid"
         width="65"
         src="./img/Arenas.jpeg"
         alt="">
    <div class="ms-2">
      <h5 class="fs-6 mb-0">
        <a class="text-decoration-none" href="#">Diego Arenas</a>
      </h5>
      <p class="mt-1 mb-0">Director general</p>
    </div>
  </div>

  <div class="search position-relative text-center px-4 py-3 mt-2">
    <input type="text" class="form-control w-100 border-0 bg-transparent" placeholder="Buscar">
    <i class="fa fa-search position-absolute d-block fs-6"></i>
  </div>

  <ul class="categories list-unstyled">
    <li class="has-dropdown">
      <i class="uil-estate fa-fw"></i><a href="#"> Administrador</a>
      <ul class="sidebar-dropdown list-unstyled">
        <li><a href="#">ver pedidos</a></li>
        <li><a href="#">agendar</a></li>

      </ul>
    </li>
    <li class="">
      <i class="uil-folder"></i><a href="#"> Carpetas archivadas</a>
    </li>
    <li class="has-dropdown">
      <i class="uil-calendar-alt"></i><a href="#"> Calendario</a>
      <ul class="sidebar-dropdown list-unstyled">
        <li><a href="#">agenda</a></li>
        <li><a href="#">compromisos</a></li>

      </ul>
    </li>
    <li class="has-dropdown">
      <i class="uil-envelope-download fa-fw"></i><a href="#"> Emails</a>
      <ul class="sidebar-dropdown list-unstyled">
        <li><a href="#">Abrir gmail</a></li>
  

      </ul>
    </li>
    <li class="has-dropdown">
      <i class="uil-shopping-cart-alt"></i><a href="#"> Ecommerce</a>
 
    </li>
    <li class="has-dropdown">
      <i class="uil-bag"></i><a href="#"> Projectos</a>
      <ul class="sidebar-dropdown list-unstyled">
        <li><a href="#">Ver proyectos</a></li>

 
      </ul>
    </li>
    <li class="">
      <i class="uil-setting"></i><a href="#"> Configuraciones</a>
      <ul class="sidebar-dropdown list-unstyled">
        <li><a href="#">Lorem ipsum</a></li>
        <li><a href="#">ipsum dolor</a></li>

      </ul>
    </li>
    <li class="has-dropdown">
      <i class="uil-chart-pie-alt"></i><a href="#"> Componentes</a>
      <ul class="sidebar-dropdown list-unstyled">
        <li><a href="#">Lorem ipsum</a></li>


      </ul>
    </li>
    <li class="has-dropdown">
      <i class="uil-panel-add"></i><a href="#"> graficos</a>
      <ul class="sidebar-dropdown list-unstyled">
        <li><a href="#">Configuras graficos</a></li>


      </ul>
    </li>
    <li class="">
      <i class="uil-map-marker"></i><a href="#"> Mapas</a>
    </li>
  </ul>
</aside>

<section id="wrapper">
  <nav class="navbar navbar-expand-md">
    <div class="container-fluid mx-2">
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggle-navbar" aria-controls="toggle-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <i class="uil-bars text-white"></i>
        </button>
        <a class="navbar-brand" href="#">DD<span class="main-color">EM</span></a>
      </div>
      <div class="collapse navbar-collapse" id="toggle-navbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Configuraciones
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#">My account</a>
              </li>
              <li><a class="dropdown-item" href="#">My inbox</a>
              </li>
              <li><a class="dropdown-item" href="#">Help</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Log out</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="uil-comments-alt"></i><span>23</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="uil-bell"></i><span>98</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i data-show="show-side-navigation1" class="uil-bars show-side-btn"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="p-4">
    <div class="welcome">
      <div class="content rounded-3 p-3">
        <h1 class="fs-3">Bienvenidos al Administrador</h1>
        <p class="mb-0">Hola Diego Arenas, Bienvenido a nuestro Administrador</p>
      </div>
    </div>

    <section class="statistics mt-4">
      <div class="row">
        <div class="col-lg-4">
          <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
            <i class="uil-envelope-shield fs-2 text-center bg-primary rounded-circle"></i>
            <div class="ms-3">
              <div class="d-flex align-items-center">
                <h3 class="mb-0">1,245</h3> <span class="d-block ms-2">Emails pendientes</span>
              </div>
              <p class="fs-normal mb-0">ver Emails</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
            <i class="uil-file fs-2 text-center bg-danger rounded-circle"></i>
            <div class="ms-3">
              <div class="d-flex align-items-center">
                <h3 class="mb-0">34</h3> <span class="d-block ms-2">Projectos entregados</span>
              </div>
              <p class="fs-normal mb-0">ver mas</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box d-flex rounded-2 align-items-center p-3">
            <i class="uil-users-alt fs-2 text-center bg-success rounded-circle"></i>
            <div class="ms-3">
              <div class="d-flex align-items-center">
                <h3 class="mb-0">5,245</h3> <span class="d-block ms-2">Usuarios</span>
              </div>
              <p class="fs-normal mb-0">Activos </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="charts mt-4">
      <div class="row">
        <div class="col-lg-6">
          <div class="chart-container rounded-2 p-3">
            <h3 class="fs-6 mb-3">Balance ultimo año</h3>
            <canvas id="myChart"></canvas>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="chart-container rounded-2 p-3">
            <h3 class="fs-6 mb-3">Popularidad DDEM en los ultimos meses.</h3>
            <canvas id="myChart2"></canvas>
          </div>
        </div>
      </div>
    </section>

    <section class="admins mt-4">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <!-- <h4>Admins:</h4> -->
            <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
              <div class="img">
                <img class="img-fluid rounded-pill"
                     width="75" height="75"
                     src="../"
                     alt="admin">
              </div>
              <div class="ms-3">
                <h3 class="fs-5 mb-1">Diego Arenas</h3>
                <p class="mb-0">INGENIERO DE SOFTWARE</p>
              </div>
            </div>
            <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
              <div class="img">
                <img class="img-fluid rounded-pill"
                     width="75" height="75"
                     src="https://scontent.fbog2-4.fna.fbcdn.net/v/t39.30808-6/238578481_4262761750501949_678902799500344871_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeFJjocYodsSq4sBps5bVUi9WvxVgRsPdwha_FWBGw93CIafXRuVwq9-JTIwfJ9G7M7ExnXA09XyBdVcbXG9R5hR&_nc_ohc=ib1IScGMzn4AX_-K0H6&_nc_ht=scontent.fbog2-4.fna&oh=f10854f3cadd229eaa5057d8ca6b0f03&oe=619E2AF6"
                     alt="admin">
                     <br>
                     <br>
              </div>
              <div class="ms-3">
                <h3 class="fs-5 mb-1">Estefania fierro</h3>
                <p class="mb-0">INGENIERO DE SOFTWARE.</p>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <!-- <h4>Moderators:</h4> -->
            <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
              <div class="img">
                <img class="img-fluid rounded-pill"
                     width="75" height="75"
                     src="../dist/img/manuel.jpeg"
                     alt="admin">
              </div>
              <div class="ms-3">
                <h3 class="fs-5 mb-1">Manuel Caviedez</h3>
                <p class="mb-0">INGENIERO DE SOFTWARE</p>
              </div>
            </div>
            <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
              <div class="img">
                <img class="img-fluid rounded-pill"
                     width="75" height="75"
                     src="../dist/img/samaca.jpeg"
                     alt="admin">
              </div>
              <div class="ms-3">
                <h3 class="fs-5 mb-1">Daniel Samaca</h3>
                <p class="mb-0">INGENIERO DE SOFTWARE.</p>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>

    <section class="statis mt-4 text-center">
      <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <div class="box bg-primary p-3">
            <i class="uil-eye"></i>
            <h3>5,154</h3>
            <p class="lead">paginas creadas</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <div class="box bg-danger p-3">
            <i class="uil-user"></i>
            <h3>245</h3>
            <p class="lead">Usuarios registrados</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
          <div class="box bg-warning p-3">
            <i class="uil-shopping-cart"></i>
            <h3>5,154</h3>
            <p class="lead">Productos vendidos</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box bg-success p-3">
            <i class="uil-feedback"></i>
            <h3>5,154</h3>
            <p class="lead">Comentarios</p>
          </div>
        </div>
      </div>
    </section>

    <section class="charts mt-4">
      <div class="chart-container p-3">
        <h3 class="fs-6 mb-3">Horas trabajas al dias// solucion de problemas</h3>
        <div style="height: 300px">
          <canvas id="chart3" width="100%"></canvas>
        </div>
      </div>
    </section>
  </div>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <!-- Button trigger modal -->
  <center>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  +
</button>
<br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        
    <form  action="{{route('admini.store')}}" method="POST" >
          @csrf

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar pedidos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
  
        <input type="text" name="nombre" class="form-control" placeholder="nombre"  >

        </div>
        <div class="mb-3">

        <input type="text" name="celular" class="form-control" placeholder="Celular"  >
        </div>
        <div class="mb-3">

        <input type="text" name="ciudad" class="form-control"  placeholder="ciudad"  >
        </div>
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
        <button type="sunmit" class="btn btn-primary">guardar</button>
      </div>
    </div>
  </div>
</div>
<br><br>

<table class="table table-hover" style="background-color: #515563" >
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Celular</th>
      <th scope="col">Ciudad</th>

    </tr>
  </thead>
  <tbody>
         @foreach ($datos as $file)
                

            
           
            <tr>
              <th scope="row">{{$file->id}}</th>
              <td>{{$file->nombre}}</td>
              <td>{{$file->celular}}</td>
              <td>{{$file->ciudad}}</td>
              <td><form action="{{ route('admini.destroy', $file->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-danger">Delete</button>
</form>
            </td> 
            <td><!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modificar{{$file->id}}">
                  modificar
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="modificar{{$file->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
  
                      <form  action="{{route('admini.update',$file->id)}}" method="POST" >
                        @csrf
                        @method('PUT')
              
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">modificar
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
              
                      <div class="modal-body">
                      
                        <div class="mb-3">
                
                          <input type="text" name="nombre" class="form-control"value="{{$file->nombre}}"  >
                        
                        </div>
                        <div class="mb-3">
              
                            <input type="number" name="celular" class="form-control"  value="{{$file->celular}}" placeholder="celular"  >
                          </div>
                        <div class="mb-3">
              
                          <input type="text" name="ciudad" class="form-control" value="{{$file->ciudad}}" placeholder="ciudad"  >
                        </div>

                  
                    
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
                        <button type="submit" class="btn btn-warning" >modificar</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div></td>


              @endforeach
  </tbody>
</table>

</center>

</section>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.jshttps://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script><script  src="./script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>


  // Other important pens.
// Map: https://codepen.io/themustafaomar/pen/ZEGJeZq
// Navbar: https://codepen.io/themustafaomar/pen/VKbQyZ

'use strict'

function $(selector) {
  return document.querySelector(selector)
}

function find(el, selector) {
  let finded
  return (finded = el.querySelector(selector)) ? finded : null
}

function siblings(el) {
  const siblings = []
  for (let sibling of el.parentNode.children) {
    if (sibling !== el) {
      siblings.push(sibling)
    }
  }
  return siblings
}

const showAsideBtn = $('.show-side-btn')
const sidebar = $('.sidebar')
const wrapper = $('#wrapper')

showAsideBtn.addEventListener('click', function () {
  $(`#${this.dataset.show}`).classList.toggle('show-sidebar')
  wrapper.classList.toggle('fullwidth')
})

if (window.innerWidth < 767) {
  sidebar.classList.add('show-sidebar');
}

window.addEventListener('resize', function () {
  if (window.innerWidth > 767) {
    sidebar.classList.remove('show-sidebar')
  }
})

// dropdown menu in the side nav
var slideNavDropdown = $('.sidebar-dropdown');

$('.sidebar .categories').addEventListener('click', function (event) {
  event.preventDefault()

  const item = event.target.closest('.has-dropdown')

  if (! item) {
    return
  }

  item.classList.toggle('opened')

  siblings(item).forEach(sibling => {
    sibling.classList.remove('opened')
  })

  if (item.classList.contains('opened')) {
    const toOpen = find(item, '.sidebar-dropdown')

    if (toOpen) {
      toOpen.classList.add('active')
    }

    siblings(item).forEach(sibling => {
      const toClose = find(sibling, '.sidebar-dropdown')

      if (toClose) {
        toClose.classList.remove('active')
      }
    })
  } else {
    find(item, '.sidebar-dropdown').classList.toggle('active')
  }
})

$('.sidebar .close-aside').addEventListener('click', function () {
  $(`#${this.dataset.close}`).classList.add('show-sidebar')
  wrapper.classList.remove('margin')
})


// Global defaults
Chart.defaults.global.animation.duration = 2000; // Animation duration
Chart.defaults.global.title.display = false; // Remove title
Chart.defaults.global.defaultFontColor = '#71748c'; // Font color
Chart.defaults.global.defaultFontSize = 13; // Font size for every label

// Tooltip global resets
Chart.defaults.global.tooltips.backgroundColor = '#111827'
Chart.defaults.global.tooltips.borderColor = 'blue'

// Gridlines global resets
Chart.defaults.scale.gridLines.zeroLineColor = '#3b3d56'
Chart.defaults.scale.gridLines.color = '#3b3d56'
Chart.defaults.scale.gridLines.drawBorder = false

// Legend global resets
Chart.defaults.global.legend.labels.padding = 0;
Chart.defaults.global.legend.display = false;

// Ticks global resets
Chart.defaults.scale.ticks.fontSize = 12
Chart.defaults.scale.ticks.fontColor = '#71748c'
Chart.defaults.scale.ticks.beginAtZero = false
Chart.defaults.scale.ticks.padding = 10

// Elements globals
Chart.defaults.global.elements.point.radius = 0

// Responsivess
Chart.defaults.global.responsive = true
Chart.defaults.global.maintainAspectRatio = false

// The bar chart
var myChart = new Chart(document.getElementById('myChart'), {
  type: 'bar',
  data: {
    labels: ["Enero", "Febrero", "Marzo", "Abril", 'Mayo', 'Junio', 'Agosto', 'Septiembre'],
    datasets: [{
      label: "Lost",
      data: [45, 25, 40, 20, 60, 20, 35, 25],
      backgroundColor: "#0d6efd",
      borderColor: 'transparent',
      borderWidth: 2.5,
      barPercentage: 0.4,
    }, {
      label: "Succes",
      startAngle: 2,
      data: [20, 40, 20, 50, 25, 40, 25, 10],
      backgroundColor: "#dc3545",
      borderColor: 'transparent',
      borderWidth: 2.5,
      barPercentage: 0.4,
    }]
  },
  options: {
    scales: {
      yAxes: [{
        gridLines: {},
        ticks: {
          stepSize: 15,
        },
      }],
      xAxes: [{
        gridLines: {
          display: false,
        }
      }]
    }
  }
})

// The line chart
var chart = new Chart(document.getElementById('myChart2'), {
  type: 'line',
  data: {
    labels: ["Enero", "Febrero", "Marzo", "Abril", 'Mayo', 'Junio', 'Agosto', 'Septiembre'],
    datasets: [{
      label: "My First dataset",
      data: [4, 20, 5, 20, 5, 25, 9, 18],
      backgroundColor: 'transparent',
      borderColor: '#0d6efd',
      lineTension: .4,
      borderWidth: 1.5,
    }, {
      label: "Month",
      data: [11, 25, 10, 25, 10, 30, 14, 23],
      backgroundColor: 'transparent',
      borderColor: '#dc3545',
      lineTension: .4,
      borderWidth: 1.5,
    }, {
      label: "Month",
      data: [16, 30, 16, 30, 16, 36, 21, 35],
      backgroundColor: 'transparent',
      borderColor: '#f0ad4e',
      lineTension: .4,
      borderWidth: 1.5,
    }]
  },
  options: {
    scales: {
      yAxes: [{
        gridLines: {
          drawBorder: false
        },
        ticks: {
          stepSize: 12,
        }
      }],
      xAxes: [{
        gridLines: {
          display: false,
        },
      }]
    }
  }
})

var chart = document.getElementById('chart3');
var myChart = new Chart(chart, {
  type: 'line',
  data: {
    labels: ["Uno", "dos", "tres", "cuatro", "cinco", 'seis', "siete", "ocho"],
    datasets: [{
      label: "Lost",
      lineTension: 0.2,
      borderColor: '#d9534f',
      borderWidth: 1.5,
      showLine: true,
      data: [3, 30, 16, 30, 16, 36, 21, 40, 20, 30],
      backgroundColor: 'transparent'
    }, {
      label: "Lost",
      lineTension: 0.2,
      borderColor: '#5cb85c',
      borderWidth: 1.5,
      data: [6, 20, 5, 20, 5, 25, 9, 18, 20, 15],
      backgroundColor: 'transparent'
    },
               {
                 label: "Lost",
                 lineTension: 0.2,
                 borderColor: '#f0ad4e',
                 borderWidth: 1.5,
                 data: [12, 20, 15, 20, 5, 35, 10, 15, 35, 25],
                 backgroundColor: 'transparent'
               },
               {
                 label: "Lost",
                 lineTension: 0.2,
                 borderColor: '#337ab7',
                 borderWidth: 1.5,
                 data: [16, 25, 10, 25, 10, 30, 14, 23, 14, 29],
                 backgroundColor: 'transparent'
               }]
  },
  options: {
    scales: {
      yAxes: [{
        gridLines: {
          drawBorder: false
        },
        ticks: {
          stepSize: 12
        }
      }],
      xAxes: [{
        gridLines: {
          display: false,
        },
      }],
    }
  }
})
</script>
</body>
</html>