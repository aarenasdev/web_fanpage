

@extends('parcialnoche.layoutdos')


<!doctype html>
<html lang="en">
  
  @section('tabla')
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>inicio</title>
  </head>
 
  <body>
    <h1>inicio view</h1>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">nombre</th>
            <th scope="col">valor</th>
            <th scope="col">codigo</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach ($datos as $noche)
                

            
           
          <tr>
            <th scope="row">{{$noche->id}}</th>
            <td>{{$noche->nombre}}</td>
            <td>{{$noche->valor}}</td>
            <td>{{$noche->codigo}}</td>
            

          </tr>

          @endforeach
         
        </tbody>
      </table>
      @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>
