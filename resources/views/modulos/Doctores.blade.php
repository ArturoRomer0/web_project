@extends('plantilla')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Gestor de Doctores</h1>
        </section>

        <section class="content">
            <div class="box">
                <div class="box-header">
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target=
                    "#CrearDoctor">Crear Doctor</button>
                </div>

                <div class="box-body">
                    <table class="table table-bordered table-hover table-striped dt-responsive">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre Y Apeliido</th>
                                <th>Consultorio</th>
                                <th>Email</th>
                                <th>Documento</th>
                                <th>Telefono</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($doctores as $doctor)

                                @if($doctor->rol == "Doctor")

                                    <>
                                        <td>{{ $doctor->id }}</td>
                                        <td>{{ $doctor->name }}</td>
                                        <td>{{ $doctor->CON->consultorio }}</td>
                                        <td>{{ $doctor->email }}</td>

                                        @if($doctor->documento != "")

                                            <td>{{ $doctor->documento }}</td>
                                        @else

                                            <td>Aun no Registrado</td>

                                        @endif


                                        @if($doctor->telefono != "")

                                            <td>{{ $doctor->telefono }}</td>

                                        @else

                                            <td>No Disponble</td>

                                        @endif

                                        <td>
                                            <button class="btn btn-danger"> <i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>

                                @endif
                            @endforeach
                            <tr>
                                <td>2</td>
                                <td>Nombre Y Apeliido</td>
                                <td>Consultorio</td>
                                <td>Email</td>
                                <td>Documento</td>
                                <td>Telefono</td>

                                <td>
                                    <button class="btn btn-danger EliminarDoctor"
                                    Did="{{ $doctor->id}}"> <i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <div id="CrearDoctor" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post"">
                    @csrf
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group">
                                <h2>Nombre y Apellido</h2>
                                <input type="text" class="form-control input-lg" name="name" required>
                            </div>

                            <div class="form-group">
                                <h2>Sexo</h2>
                                <select  class="form-control input-lg" name="sexo" required="">
                                    <option value="">Seleccione</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <h2>Consultorio:</h2>
                                <select  class="form-control input-lg" name="id_consultorio" required="">
                                    <option value="">Seleccione</option>
                                    @foreach ($consultorios as $consultorio)
                                        <option value="{{ $consultorio->id }}">{{ $consultorio->consultorio }}</option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <h2>Email</h2>
                                <input type="email" class="form-control input-lg" name="email"
                                value=""{{old ('email')}}>
                                @error('email')
                                    <div class="alert alert-danger">El email ya existe</div>

                                @enderror
                            </div>

                            <div class="form-group">
                                <h2>Contrseña</h2>
                                <input type="text" class="form-control input-lg" name="password" required>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary btn-lg" type="submit">Guardar</button>
                        <button class="btn btn-danger btn-lg" data-dismiss="modal" type="button">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


