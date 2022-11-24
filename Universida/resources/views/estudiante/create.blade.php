@extends('estudiante.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Registro </div>
  <div class="card-body">
       
      <form action="{{ url('estudiante') }}" method="post">
        {!! csrf_field() !!}
        
        <div class="mb-3 mt-3">
            	<label>Nombres</label>
            	<input type="text" name="Nombres" id="Nombres" class="form-control" placeholder="Ingrese sus nombres" value="{{ isset($student->Nombres)?$student->Nombres:'' }}" required>
            </div>

             <div class="mb-3 mt-3">
            	<label>Apellidos</label>
            	<input type="text" name="Apellidos" id="Apellidos" class="form-control" placeholder="Ingrese sus apellidos" value="{{ isset($student->Apellidos)?$student->Apellidos:'' }}" required>
            </div>

            <div class="mb-3 mt-3">
            	<label>Fecha de nacimiento</label>
            	<input type="date" name="Fecha_Nacimiento"  id="Fecha_Nacimiento" class="form-control" value="{{ isset($student->Fecha_Nacimiento  )?$student->Fecha_Nacimiento  :'' }}">
            </div>

            <div class="mb-3 mt-3">
                <label>Carrera</label>
                <select name="id_carrera" id="id_carrera" class="form-control" required>
                    <option value="">Seleccione </option>
                    @foreach ($carreras as $carrera)
                        <option value="{{ $carrera['id_carrera'] }}">{{ $carrera['Nombre_Carrera'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3 mt-3">
                <label>Sexo</label>
                <input  type="text" name="Sexo" id="Sexo" class="form-control" placeholder="Ingrese su sexo" value="{{ isset($student->Sexo)?$student->Sexo:'' }}" required>
            </div>

            <div class="mb-3 mt-3">
                <label>Estado Civil</label>
                <input  type="text" name="estado_civil" id="estado_civil" class="form-control" placeholder="Ingrese su estado civil" value="{{ isset($student->estado_civil )?$student->estado_civil :'' }}" required>
            </div>

            <div class="mb-3 mt-3">
                <label>Estado</label>
                <input  type="text" name="Status" id="Status" class="form-control" placeholder="Ingrese su estado" value="{{ isset($student->Status)?$student->Status:'' }}" required>
            </div>

            <div class="mb-3 mt-3">
                <label>Campus</label>
                <select name="id_campus" id="id_campus" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach ($campus as $campuz)
                        <option value="{{ $campuz['id_campus'] }}">{{ $campuz['Descripcion'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3 mt-3">
                <label>Pais</label>
                <select name="id_pais " id="id_pais " class="form-control" >
                <option value="">Seleccione </option>
                    @foreach ($paises as $pais)
                        <option value="{{ $pais['id_pais'] }}">{{ $pais['Descripcion'] }}</option>
                    @endforeach
                </select>
            </div>
            <a href="{{ url('estudiante/') }} "  class="btn btn-secondary" >Volver atras</a>
		   	<input type="submit" value="Registrar" class="btn btn-success">
            
            
	   </form>    
    
    </div>

</div>
        