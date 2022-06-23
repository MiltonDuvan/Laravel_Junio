@extends('Template.Template')
@section('plantillaweb')
<h2>Servicios</h2>
<form action="{{route("service.store")}}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Nombre</label>
      <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Descripcion</label>
        <input type="text" name="descripcion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tiempo_Maximo</label>
        <input type="time" name="tiempo_max" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Costo_Extra</label>
        <input type="num" name="costo_extra" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Clave</label>
        <input type="text" name="clave" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="cars">tipo promocion:</label>
        <select id="cars" name="promocion_id">
          <option selected="true" disabled="disabled">promocion</option>
          @foreach ($promotions as $promotion)
            <option value="{{$promotion->id}}">{{$promotion->nombre}}</option>
          @endforeach

        </select>
        </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
