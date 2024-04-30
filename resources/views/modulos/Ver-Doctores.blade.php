@extends('plantilla')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Doctores del consultorio: <br>
        <b>{{$consultorio->consultorio}}</b></h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nombre y Apellido</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Horario</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($doctores as $doctor)
                            <tr>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->email }}</td>

                                @if ( $doctor->telefono != "")
                                    <td>{{$doctor->doctor}}</td>
                                @else
                                    <td>No disponible</td>
                                @endif

                                @foreach ($hora as )

                                @endforeach

                            </tr>
                        @endforeach
                </table>
            </div>

        </div>
    </section>
</div>
@endsection


