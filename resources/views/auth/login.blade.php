@extends('plantilla')
@section('contenido')

    <div class="login-box">
        <div class="login-logo">
            <b> Mi Consu</b>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Ingresar al sistema</p>

            <form method="post" action="{{ route('login') }}">
                @csrf
                <div form-group has-feedback>
                    <input type="email" name="email" class="form-control" required="" value="">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div form-group has-feedback>
                    <input type="password" name="password" class="form-control" required="" value="">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

