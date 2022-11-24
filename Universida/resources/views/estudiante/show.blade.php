@extends('estudiante.layout')
@section('content')
<div class="card" style="margin:20px;">
  <div class="card-header">Estudiante</div>
  <div class="card-body">
        <table class='table table-hover table-responsive table-bordered'>
                <tr class="card-text" >
                    <td>ID</td>
                    <td>id : {{$estudiantes->id}}</td>
                </tr>
                <tr class="card-text" >
                    <td>Nombres</td>
                    <td>nombres : {{$estudiantes->Nombres}}</td>
                </tr>
                <tr class="card-text" >
                    <td>Apellidos</td>
                    <td>apellidos : {{$estudiantes->Apellidos}}</td>
                </tr>
                <tr  class="card-text" >
                    <td>Fecha de nacimiento</td>
                    <td>Fecha de nacimiento: {{$estudiantes->Fecha_Nacimiento}}</td>
                </tr>
                <tr class="card-text" >
                    <td>Id de carrera</td>
                    <td>Id de carrera : {{$estudiantes->id_carrera}}</td>
                </tr>
                 <tr class="card-text">
                    <td>Sexo</td>
                    <td>Sexo : {{$estudiantes->Sexo}}</td>
                </tr>
                <tr class="card-text">
                    <td>Estado civil</td>
                    <td>Estado Civil : {{$estudiantes->estado_civil}}</td>
                </tr>
                <tr class="card-text">
                    <td>Status</td>
                    <td>Status : {{$estudiantes->Status}}</td>
                </tr>
                <tr class="card-text" >
                    <td>Id de Campus</td>
                    <td>Id de Campus : {{$estudiantes->id_campus}}</td>
                </tr>
                <tr class="card-text" >
                    <td>Id de pais</td>
                    <td>Id de pais : {{$estudiantes->id_pais}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                    <a href="javascript:history.back()" class='btn btn-danger'>Back to read</a>
                    </td>
                </tr>
            </table>
  </div>
    </hr>
  </div>
</div>