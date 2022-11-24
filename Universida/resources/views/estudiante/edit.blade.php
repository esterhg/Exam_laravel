@extends('estudiante.layout')
@section('content')
<div class="card" style="margin:20px;">
  <div class="card-header">Estudiantes</div>
  <div class="card-body">
  <form action="{{ url('estudiante/' .$estudiantes->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <table class='table table-hover table-responsive table-bordered'>
                <tr class="card-text" >
                    <td>ID</td>
                    <td><input type='text' name='id'  id='id' value="{{$estudiantes->id}}" class='form-control' /></td>
                </tr>
                <tr class="card-text" >
                    <td>Nombres</td>
                    <td><input type='text' name='Nombres' id='Nombres' value="{{$estudiantes->Nombres}}" class='form-control' /></td>
                </tr>
                <tr class="card-text" >
                    <td>Apellidos</td>
                    <td><input type='text' name='Apellidos' id='Apellidos'  value="{{$estudiantes->Apellidos}}" class='form-control' /></td>
                </tr>
                <tr  class="card-text" >
                    <td>Fecha de nacimiento</td>
                    <td><input type='text' name='Fecha_Nacimiento' id='Fecha_Nacimiento'  value="{{$estudiantes->Fecha_Nacimiento}}" class='form-control' /></td>
                </tr>
                <tr class="card-text" >
                    <td>Id de carrera</td>
                    <td><input type='text' name='id_carrera' id='id_carrera'   value="{{$estudiantes->id_carrera}}" class='form-control' /></td>
                </tr>
                 <tr class="card-text">
                    <td>Sexo</td>
                    <td><input type='text' name='Sexo' id='Sexo' value="{{$estudiantes->Sexo}}"  class='form-control' /></td>
                </tr>
                <tr class="card-text">
                    <td>Estado civil</td>
                    <td><input type='text' name='estado_civil' id='estado_civil' value="{{$estudiantes->estado_civil}}"  class='form-control' /></td>
                </tr>
                <tr class="card-text">
                    <td>Status</td>
                    <td><input type='text' name='Status' id='Status' value="{{$estudiantes->Status}}"  class='form-control' /></td>
                </tr>
                <tr class="card-text">
                    <td>Id de Campus</td>
                    <td><input type='text' name='id_campus' id='id_campus' value="{{$estudiantes->id_campus}}"  class='form-control' /></td>
                </tr>
                <tr class="card-text">
                    <td>Id de pais</td>
                    <td><input type='text' name='id_pais' id='id_pais' value="{{$estudiantes->id_pais}}"  class='form-control' /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                    <input type="submit" value="Update" class="btn btn-success">
                    <a href="javascript:history.back()" class='btn btn-danger'>Back to read</a>
                    </td>
                </tr>
            </table>


   </form>
      
  </div>
    </hr>
  </div>
</div>

