@extends('Template.Template')
@section('plantillaweb')
<h2>Formulario ingreso</h2>
<form action="{{route('quote.store')}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Hora programada: </label>
            <input type="time" name="hora_programada">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Hora de inicio:  </label>
            <input type="time" name="hora_inicio">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Hora de finalización:  </label>
            <input type="time" name="hora_fin">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Tiempo total:  </label>
            <input type="time" name="tiempo_total">
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Total a pagar:  </label>
            <input type="number" name="total_pago">
          </div>
          
          <div class="col-lg-6 col-md-4 col-sm-2">
          <label for="cars">Empleado No:</label>
          <select id="cars" name="employee_id">
            <option selected="true" disabled="disabled"> empleado </option>
            @foreach ($employees as $employee)
              <option value="{{$employee->id}}">{{$employee->nombres}} {{$employee->apellidos}}</option>    
            @endforeach
            
          </select> 
          </div>
          
          <div class="col-lg-6 col-md-4 col-sm-2">
          <label for="cars">Forma de pago:</label>
          <select id="cars" name="waytopay_id">
            <option selected="true" disabled="disabled">forma de pago</option>
            @foreach ($waytopays as $waytopay)
              <option value="{{$waytopay->id}}">{{$waytopay->nombre}}</option>    
            @endforeach
            
          </select> 
          </div>

        </div>
      </div>
      <div class="row">
      <div class="col-lg-6 col-md-6 offset-md-3">
        <input type="submit" name="btn_enviar" value="Aceptar">
      </div>
      </div>
</form>
@endsection