@extends('plantilla')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h2>Horarios</h2>
        @if ($horarios == null)
            <!-- Formulario para crear nuevo horario -->
            <form method="post" action="{{ url('Citas/' . auth()->user()->id) }}">
                @csrf
                <div class="row">
                    <div class="col-md-2">
                        Desde<input type="time" class="form-control" name="hora_inicio">
                    </div>

                    <div class="col-md-2">
                        Hasta<input type="time" class="form-control" name="hora_fin">
                    </div>

                    <br>
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </form>
        @else
            @foreach ($horarios as $hora)
                <!-- Formulario para mostrar/editar horario existente -->
                <form method="post" action="{{ url('editar-horario/' .$hora->id) }}">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-2">
                            Desde<input type="time" class="form-control" name="hora_inicioE"
                            value="{{ $hora->hora_inicio }}">
                        </div>

                        <div class="col-md-2">
                            Hasta<input type="time" class="form-control" name="hora_finE"
                            value="{{ $hora->hora_fin }}">
                        </div>

                        <br>
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-success">Editar</button>
                        </div>
                    </div>
                </form>
            @endforeach
        @endif
    </section>

    <section class="content">
        <div class="box">
            <div class="box-body">
                <div id="calendario">

                </div>

            </div>

        </div>
    </section>
</div>

<div class="modal fade" id="CitaModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Seleccionar</h2>
                            <select name="id_paciente" class="form-control input-lg" required>
                                <option value="">Pacientes...</option>
                                @foreach ($pacientes as $paciente)
                                    @if ($paciente->rol == 'Paciente')
                                        <option value="{{ $paciente->id }}">
                                            {{ $paciente->name }} - {{$paciente->documento}}</option>

                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h2>Fecha</h2>
                            <input type="button" class="form-control input-lg" id="Fecha" readonly="">
                        </div>
                        <div class="form-group">
                            <h2>Hora</h2>
                            <input type="button" class="form-control input-lg" id="Hora" readonly="">
                            <input type="hidden" name="FyHinicio" class="form-control input-lg" id="FyHinicio"
                            readonly="">
                            <input type="hidden" name="FyHfinal" class="form-control input-lg" id="FyHfinal"
                            readonly="">


                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-success btn-lg">Pedir cita</button>

                    <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
