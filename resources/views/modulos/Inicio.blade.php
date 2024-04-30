@extends('plantilla')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Inicio</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-body">
                <div class="col-md-6 bg-primary">
                    <h1>Bienvenidos</h1>
                    <hr>
                    <h2>Dias</h2>
                    <h3>{{ $inicio->dias }}</h3>
                    <hr>
                    <h2>Horarios</h2>
                    <h3>Desde: {{ $inicio->hora_inicio }}</h3>
                    <h3>Hasta: {{ $inicio->hora_fin }}</h3>
                    <hr>
                    <h2>Direccion</h2>
                    <h3>{{ $inicio->direccion }}/h3>
                    <hr>
                    <h2>Contactos</h2>
                    <h3>Telefono {{ $inicio->telefono }}<br>
                    correo: {{ $inicio->email }}</h3>
                </div>
                <div class="col-md-6">


                </div>
            </div>
            @if(auth()->user()->rol == "Administrador")
                <div class="box-footer">
                    <a href="{{ url('Inicio-Editar') }}">
                        <button class="btn btn-success btn-lg">Editar</button>
                </div>
            @endif
        </div>
    </section>
</div>
@endsection


