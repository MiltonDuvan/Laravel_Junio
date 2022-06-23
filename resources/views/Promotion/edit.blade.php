@extends('Template.Template')
@section('plantillaweb')
<h2>Promociones</h2>
<form action="{{route('promotion.store')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Nombre</label>
      <input type="text" class="form-control" name="nombre"aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" id="promotion_description" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">precio</label>
        <input type="number" class="form-control" name="precio" id="promotion_price" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
