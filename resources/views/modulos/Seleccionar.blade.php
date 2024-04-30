@extends('plantilla')
@section('contenido')
    <section class="content">
        <center>
            <h1>Seleccinar como quiere ingresar al sistema</h1>
        </center>

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box" style="background-color: #f781d8; color: white;">

                    <div class="inner">
                        <h3>Secretaria</h3>
                        <p>Inicie sesion</p>
                    </div>

                    <div class="icon">
                        <i class="fa fa-female"></i>
                    </div>

                    <a href="Ingresar" class="small-box-footer">
                        ingresar<i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box" style="background-color: #bdbdbd; color: white;">

                    <div class="inner">
                        <h3>Doctor</h3>
                        <p>Inicie sesion</p>
                    </div>

                    <div class="icon">
                        <i class="fa fa-user-md"></i>
                    </div>

                    <a href="Ingresar" class="small-box-footer">
                        ingresar<i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box" style="background-color: #ffca33; color: white;">

                    <div class="inner">
                        <h3>Pacientes</h3>
                        <p>Inicie sesion</p>
                    </div>

                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>

                    <a href="Ingresar" class="small-box-footer">
                        ingresar<i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box" style="background-color: #ff5541; color: white;">

                    <div class="inner">
                        <h3>Administrador</h3>
                        <p>Inicie sesion</p>
                    </div>

                    <div class="icon">
                        <i class="fa fa-male"></i>
                    </div>

                    <a href="Ingresar" class="small-box-footer">
                        ingresar<i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection