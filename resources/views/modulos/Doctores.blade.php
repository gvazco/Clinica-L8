@extends('plantilla')

@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <h1>Gestor de Doctores</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearDoctor">Crear
                    Doctor</button>
            </div>

            <div class="box-body">
                <table class="table table-bordered table-hover table-striped dt-responsive">
                    <thead>
                        <tr>
                            <th>TD</th>
                            <th>Nombre y Apellido</th>
                            <th>Consultorio</th>
                            <th>Email</th>
                            <th>Documento</th>
                            <th>Teléfono</th>

                            <th></th>

                        </tr>
                    </thead>

                    <tbody>

                        @foreach($doctores as $doctor)

                        @if ($doctor->rol == "Doctor")

                        <tr>
                            <td>{{$doctor->id}}</td>
                            <td>{{$doctor->name}}</td>

                            <td>{{$doctor->CON->consultorio}}</td>

                            <td>{{$doctor->email}}</td>

                            @if ($doctor->documento != "")

                            <td>{{$doctor->documento}}</td>

                            @else

                            <td>Aún no se ha registrado</td>

                            @endif

                            @if ($doctor->telefono != "")

                            <td>{{$doctor->telefono}}</td>

                            @else

                            <td>No disponible.</td>

                            @endif

                            <td>
                                <button class="btn btn-danger EliminarDoctor" Did="{{$doctor->id}}">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>

                        @endif

                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<div id="CrearDoctor" class="modal fade">

    <div class="modal-dialog">

        <div class="modal-content">

            <form method="post">

                @csrf

                <div class="modal-body">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                    <div class="box-body">
                        <div class="form-group">

                            <h2>Nombre y Apellido:</h2>

                            <input type="text" class="form-control input-lg" name="name"
                                placeholder="Escriba su nombre aquí..." required>

                        </div>

                        <div class="form-group">

                            <h2>Sexo:</h2>

                            <select class="form-control input-lg" name="sexo" required>
                                <option value="">Seleccionar...</option>

                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Binario">Binario</option>
                            </select>

                        </div>

                        <div class="form-group">

                            <h2>Consultorio:</h2>

                            <select class="form-control input-lg" name="id_consultorio" required>

                                <option value="">Seleccionar...</option>

                                @foreach ($consultorios as $consultorio)

                                <option value="{{ $consultorio->id}}">{{ $consultorio->consultorio}}</option>

                                @endforeach

                            </select>

                        </div>

                        <div class="form-group">

                            <h2>Email:</h2>

                            <input type="email" class="form-control input-lg" placeholder="doc_ejemplo@email.com"
                                name="email" value="{{old('email')}}">

                            @error('email')

                            <div class="alert alert-danger">El email ya existe en la base de datos.</div>

                            @enderror

                        </div>

                        <div class="form-group">

                            <h2>Contaseña:</h2>

                            <input type="text" class="form-control input-lg" placeholder="xxxx-xxxx" name="password"
                                value="">

                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <button type="button" data-dismiss="modal" class="btn btn-danger ">Cancelar</button>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection