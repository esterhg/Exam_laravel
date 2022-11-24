@extends('estudiante.layout')
@section('content')
<div class="container">
        <div  style="margin:10px;">
            <div class="col-15">
                <div class="card">
                  <div class="card-header">
                  <h2>Crear regitro</h2>
                  <br>
                  <div>
                  <a href="{{ url('estudiante/create') }} " class='btn btn-success m-b-1em'>Crear un registro</a>
                  </div>
                  <br/>
                  <div class="table-responsive" class="row text-center">
                    <table class="table">
                            <thead>
                                <tr>
                                   <th>#</th>
                                   <th>Nombres</th>
                                   <th>Apellidos</th>
                                    <th>Fecha Nacimiento</th>
                                    <th>Id de carrera</th>
                                    <th>Estado civil</th>
                                    <th>Status</th>
                                    <th>Id de campus</th>
                                    <th>Id de pais</th>
                                </tr>
                          </thead>
                        <tbody>
                            @foreach($estudiante as $item)
                               <tr>
                                  <td>{{ $item->id }}</td>
                                  <td>{{ $item->Nombres}}</td>
                                  <td>{{ $item->Apellidos}}</td>
                                  <td>{{ $item->Fecha_Nacimiento}}</td>
                                  <td>{{ $item->id_carrera}}</td>
                                 <td>{{ $item->estado_civil}}</td>
                                 <td>{{ $item->Status}}</td>
                                 <td>{{ $item->id_campus}}</td>
                                 <td>{{ $item->id_pais}}</td>
                                 <td>
                                  <a href="{{ url('/estudiante/' . $item->id) }}" title="View"><button class="btn btn-success btn-sm "><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                  </td>
                                  <td>
                                  <a href="{{ url('/estudiante/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary active btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                  </td>
                                  <td>
                                  <form method="POST" action="{{ url('/estudiante' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete empleados" onclick="return confirm('Confirm delete?');"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>
                                    </td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
               </div>
           </div>
        </div>
    </div>
</div>