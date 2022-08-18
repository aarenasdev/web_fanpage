@extends('proyecto.view_layout')


@section('contenido')


  <body >
    <header class="bg_animate"> 
      <div class="header_nav">
        <div class="contenedor">
          <h1 style="font-family: 'Oswald', sans-serif;">El Buho Club</h1>
          <nav>
            <!--<a onclick="location.href = '{{ route('servicios' ) }}'" >Inicio</a> -->
            <a href="{{url('/inicio')}}">vista cliente</a>
            <a href="">balances</a>
            <a href="">graficos</a>
          </nav>
        </div>
      </div>
      <section class="banner contenedor">
        <section class="banner_titlle">
          <h2 class="tex_banner">BIENVENIDO  <br>Seccion Admistrativa</h2>
           <!-- <a href="" class="llamanos"> llamanos ya</a>-->
         
 
        </section>
        <div class="banner_img">
          <img style="padding-left:50px;" src="/imagenes/section_admi.svg" alt="">
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


  <div class="row">
    <div class="col-6">

        <h1>TABLAS/REPORTES/SEGUIMIENTOS</h1>

        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar registro
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

        <form  action="{{route('admi.store')}}" method="POST" >
          @csrf

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">AGREGAR registro>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
        
          <div class="mb-3">
  
            <input type="text" name="nombre" class="form-control" placeholder="nombre"  >
          
          </div>
          <div class="mb-3">

            <input type="text" name="apellidos" class="form-control" placeholder="apellidos"  >
          </div>
          <div class="mb-3">

            <input type="text" name="ciudad" class="form-control"  placeholder="ciudad"  >
          </div>
          <div class="mb-3">

            <input type="number" name="celular" class="form-control"  placeholder="celular"  >
          </div>
    
      
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" >Agregar</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
  
            <div class="container"><br>
                <h3>Tabla-conocenos</h3>

                    <table class="table table-striped ">
                        <thead>
                        <tr>
                            <th scope="col" class="table-primary">id</th>
                            <th scope="col"  class="table-primary">nombre</th>
                            <th scope="col"  class="table-primary">apellidos</th>
                            <th scope="col"  class="table-primary">ciudad</th>
                            <th scope="col"  class="table-primary">celular</th>
                            <th scope="col"  class="table-primary"></th>
                            <th scope="col"  class="table-primary"></th>
                        </tr>
                        </thead>
                        <tbody>
                         @foreach ($datos as $file)
                

            
           
            <tr>
              <th scope="row">{{$file->id}}</th>
              <td>{{$file->nombre}}</td>
              <td>{{$file->apellidos}}</td>
              <td>{{$file->ciudad}}</td>
              <td>{{$file->celular}}</td>
             <td><form action="{{route('admi.destroy',$file->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit "class="btn btn-danger">eliminar</button>
              </form>
            </button></td> 
            <td><!-- Button trigger modal -->
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modificar{{$file->id}}">
                modificar
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="modificar{{$file->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <form  action="{{route('admi.update',$file->id)}}" method="POST" >
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
            
                        <input type="text" name="apellidos" class="form-control"value="{{$file->apellidos}}" placeholder="apellidos"  >
                      </div>
                      <div class="mb-3">
            
                        <input type="text" name="ciudad" class="form-control" value="{{$file->ciudad}}" placeholder="ciudad"  >
                      </div>
                      <div class="mb-3">
            
                        <input type="number" name="celular" class="form-control"  value="{{$file->celular}}" placeholder="celular"  >
                      </div>
                
                  
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
                      <button type="submit" class="btn btn-warning" >modificar</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div></td>

            </tr>

            @endforeach
                        
                        </tbody>
                    </table>
            <h3>Tabla Niños Inscritos</h3>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col" class="table-primary">id</th>
                    <th scope="col" class="table-primary">nombre</th>
                    <th scope="col" class="table-primary">apellido</th>
                    <th scope="col" class="table-primary">celular</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>6541665</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>66565</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td >Larry </td>
                    <td >Chary </td>
                    <td>156515656</td>
                  </tr>
             
                <tr>
                    <th scope="row">4</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>6541665</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>66565</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td >Larry </td>
                    <td >Chary </td>
                    <td>156515656</td>
                  </tr>
                </tbody>
              </table>

            </div>
    
            
    </div>
    <div class="col-6">
        <h1>GRAFICAS/SONDEO/ESTADISTICAS</h1><br>
        <h3>Grafica popularidad</h3><br>
            <div class="container">
                <div class="progress" style="height: 25px;">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div><h6>Enero</h6>
                  </div><br>
                  <div class="progress" style="height: 25px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%; color:black;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><h6>Febrero</h6> </div>
                  </div><br>
                  <div class="progress" style="height: 25px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50% ; color:black;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><h6>Marzo</h6></div>
                  </div><br>
                  <div class="progress" style="height: 25px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75% ; color:black;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><h6>Abril</h6></div>
                  </div><br>
                  <div class="progress" style="height: 25px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40% ; color:black;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><h6>Mayo</h6></div>
                  </div><br>
                  <div class="progress" style="height: 25px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50% ; color:black;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><h6>Junio</h6></div>
                  </div><br>
                  <div class="progress" style="height: 25px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80% ; color:black;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><h6>Julio</h6></div>
                  </div><br>
                  <div class="progress" style="height: 25px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%; color:black;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><h6>Agosto</h6></div>
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