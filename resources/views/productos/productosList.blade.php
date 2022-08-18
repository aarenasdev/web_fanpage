 <!-- es la ruta del archivo del layout -->
@extends('productos.productoslayout')

@section('admi_pedidos')

<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-4 ">

        <form action={{route('productos.store')}} method="POST">
          <div class="mb-3">
            <input type="text" name="nombre" class="form-control" placeholder="nombre" >
          </div>
          <div class="mb-3">
            <input type="text" name="value" class="form-control" placeholder="value" >
          </div>
          <div class="mb-3">
            <input type="text" name="usuario" class="form-control" placeholder="usuario" >
          </div>
          

          <button type="submit" class="btn btn-success">agregar</button>
        </form>

    </div>

    <div class="col-sm-12 col-md-8 ">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">producto</th>
              <th scope="col">valor</th>
              <th scope="col">usuario</th>
           
            </tr>
          </thead>
          <tbody>   
            @foreach ($pedido as $file)
                

            
           
            <tr>
              <th scope="row">{{$file->producto}}</th>
              <td>{{$file->value}}</td>
              <td>{{$file->usuario}}</td>

            </tr>

            @endforeach
          </tbody>
        </table>

    </div>
  </div>
</div>


    
@endsection