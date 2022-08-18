@extends('trabajo.menu')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @section('content')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>oleee</title>
 
  </head>
 
  <body>
<center>
    <h1>PELUQUERIA EL CALVO</h1>
    <img src="http://2.bp.blogspot.com/-adWRFtj6vZU/T4AcEQmgqjI/AAAAAAAAANU/Dy1kNtgpbnE/s1600/calvo+feo.jpg" alt="">
    </center>
     <br>

    <div class="row">
      <div class="col-6">
        <form action="{{route('trabajo.store')}}" method="POST">

          @csrf
          <div class="mb-3">
 
            <input type="text" name="nombre_usuer" class="form-control" placeholder="nombre"  >
          
          </div>
          <div class="mb-3">
  
            <input type="date" name="fecha_lavado" class="form-control" placeholder="fecha del lavado"  >
          </div>
          <div class="mb-3">

            <input type="text" name="empleado" class="form-control"  placeholder="empleado"  >
          </div>
          <div class="mb-3">

            <input type="number" name="valor" class="form-control"  placeholder="valor sin IVA" >
          </div>
        

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-6">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">nombre usuario</th>

              <th scope="col">fecha de lavado</th>
              <th scope="col">empleado</th>
              <th scope="col">valor</th>
              <th>..</th>
            </tr>
          </thead>
          <tbody>
             
              @foreach ($datos as $ejer)
                  
  
              
             
              <tr>
                <th scope="row">{{$ejer->id}}</th>
                <td>{{$ejer->nombre_usuer}}</td>
                <td>{{$ejer->fecha_lavado}}</td>
                <td>{{$ejer->empleado}}</td>
                <td>{{$ejer->valor *0.19}}</td>
                <td>
                  <form action="{{route('trabajo.destroy',$ejer->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">eliminar</button>
                  </form>
                </button>
                </td>
                <td>
                  <!-- Button trigger modal -->

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modificar{{$ejer->id}}">
  modificar
</button>

<!-- Modal -->
<div class="modal fade" id="modificar{{$ejer->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form  method="POST">

        @csrf
        @method('PUT')

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <div class="mb-3">
 
            <input type="text" name="nombre_usuer" class="form-control" value="{{$ejer->nombre_usuer}}"  placeholder="nombre"  >
          
          </div>
          <div class="mb-3">
  
            <input type="date" name="fecha_lavado" class="form-control"  value="{{$ejer->fecha_lavado}}" placeholder="fecha del lavado"  >
          </div>
          <div class="mb-3">

            <input type="text" name="empleado" class="form-control" value="{{$ejer->empleado}}" placeholder="empleado"  >
          </div>
          <div class="mb-3">

            <input type="number" name="valor" class="form-control"  value="{{$ejer->valor}}"  placeholder="valor sin IVA" >
          </div>
        

         
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">modificar</button>
      </div>
      </form>
    
    </div>
  </div>
</div>
                </td>

                
    
              </tr>
    
              @endforeach
             
            </tbody>
          </table>
        
      </div>
    </div>
 
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    @endsection
 
  </body>
</html>
