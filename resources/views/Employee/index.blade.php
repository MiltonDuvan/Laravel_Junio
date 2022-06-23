@extends('Template.Template')
@section('plantillaweb')
<h2>Lista de empleados</h2>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Telefono</th>
        <th scope="col">Dirección</th>
        <th scope="col">Fecha nacimiento</th>
        <th scope="col">Salario</th>
        <th scope="col">Hora de inicio</th>
        <th scope="col">Hora de salida</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <th scope="row">{{$employee->id}}</th>
            <td>{{$employee->nombres}}</td>
            <td>{{$employee->apellidos}}</td>
            <td>{{$employee->telefono}}</td>
            <td>{{$employee->direccion}}</td>
            <td>{{$employee->fecha_nacimiento}}</td>
            <td>{{$employee->salario}}</td>
            <td>{{$employee->hora_inicio}}</td>
            <td>{{$employee->hora_salida}}</td>
          </tr>      
        @endforeach
    </tbody>
  </table>
  {{ $employees->links() }}

@endsection