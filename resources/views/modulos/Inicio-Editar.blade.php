@extends('plantilla')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Editar Inicio</h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-body">
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <h2>Dias:</h2>
                            <input type="text" class="input-lg" name="dias" value="{{ $inicio->dias }}">
                            <div class="form-group">
                                <h2>Horarios:</h2>
                                Desde:<input type="time" class="input-lg" name="hora_inicio" value="{{
                                $inicio->hora_inicio }}">
                                Hasta:<input type="time" class="input-lg" name="hora_fin" value="{{
                                $inicio->hora_fin }}">
                            </div>
                            <h2>Direccion:</h2>
                            <input type="text" class="input-lg" name="direccion" value="{{
                            $inicio->direccion }}">
                            <h2>Telefono:</h2>
                            <input type="text" class="input-lg" name="telefono" value="{{
                            $inicio->telefono }}">
                            <h2>Correo:</h2>
                            <input type="email" class="input-lg" name="email" value="{{
                            $inicio->email }}">
                        </div>
                    </div>
                    <div class="cold-md-6 col-xs-12"></div>
                    <div class="cold-md-6 col-xs-12">
                        <br><br>
                        <button type="submit" class="btn btn-success">Guardar Cambios</button>
                    </div>
                </fotm>
            </div>
        </div>
    </section>
</div>
@endsection

