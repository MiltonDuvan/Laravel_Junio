@extends('Template.Template')
@section('plantillaweb')
<h2>Listado de citas</h2>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nombre</th>
        <th scope="col">descripcion</th>
        <th scope="col">precio</th>
     </tr>
    </thead>
    <tbody>
        @foreach ($promotions as $promotion)
        <tr>
            <th scope="row">{{$promotion->id}}</th>
            <td>{{$promotion->nombre}}</td>
            <td>{{$promotion->descripcion}}</td>
            <td>{{$promotion->precio}}</td>
            <td>
                <form action="" method="POST">
                    <a href=" " class="btn btn-warning btn-sm" role="button">Editar</a>
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm"  role="button" type="submit">Eliminar</button>
                    </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{ $promotions->links() }}

@endsection
