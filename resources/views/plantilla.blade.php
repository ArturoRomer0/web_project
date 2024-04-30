<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mi-consu</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="http://localhost/miconsu/public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/miconsu/public/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://localhost/miconsu/public/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/miconsu/public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost/miconsu/public/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="http://localhost/miconsu/public/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="http://localhost/miconsu/public/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="http://localhost/miconsu/public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://localhost/miconsu/public/bower_components/bootstrap-daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="http://localhost/miconsu/public/bower_components/fullcalendar/dist/fullcalendar.min.css">
<link rel="stylesheet" href="http://localhost/miconsu/public/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print"




<link rel="stylesheet" href="http://localhost/miconsu/public/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">



<link rel="stylesheet"
href="http://localhost/miconsu/public/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini login-page">



@if(Auth::user())
    <div class="wrapper">

        @include('modulos.Cabecera')

        @if (auth()->user()->rol == "Secretaria")
        @include("modulos.MenuSecretaria")

        @elseif(auth()->user()->rol == "Doctor")
        @include("modulos.MenuDoctor")

        @elseif(auth()->user()->rol == "Paciente")
        @include("modulos.MenuPaciente")

        @else
        @include("modulos.MenuAdministrador")

        @endif
        @yield('content')
    </div>

@else
    @yield('contenido')
@endif
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="http://localhost/miconsu/public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://localhost/miconsu/public/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="http://localhost/miconsu/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="http://localhost/miconsu/public/bower_components/raphael/raphael.min.js"></script>
<script src="http://localhost/miconsu/public/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost/miconsu/public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost/miconsu/public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://localhost/miconsu/public/bower_components/moment/min/moment.min.js"></script>
<script src="http://localhost/miconsu/public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="http://localhost/miconsu/public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Slimscroll -->
<script src="http://localhost/miconsu/public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://localhost/miconsu/public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/miconsu/public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/miconsu/public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/miconsu/public/dist/js/demo.js"></script>



<script
src="http://localhost/miconsu/public/bower_components/datatables.net/js/jquery.dataTables.min.js">
</script>

<script
src="http://localhost/miconsu/public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
</script>

<script
src="http://localhost/miconsu/public/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"
></script>



<script src="http://localhost/miconsu/public/bower_components/moment/moment.js"></script>
<script src="http://localhost/miconsu/public/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="http://localhost/miconsu/public/bower_components/fullcalendar/dist/locale/es.js"></script>

<script type="texx/javascript">
    $(".table").DataTable(
        {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
        }
    );
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('registrado') == 'Si')
    <script class="text/javascript">
        Swal.fire(
            '¡Registrado!',
            'El Doctor se ha registrado correctamente.',
            'success'
        )
    </script>

    @elseif(session('Agregado') == 'Si')

        <script class="text/javascript">
            Swal.fire(
                '¡Registrado!',
                'El Paciente se ha aregado correctamente.',
                'success'
            )
        </script>

    @elseif(session('actualizadoP') == 'Si')

            <script class="text/javascript">
                Swal.fire(
                    '¡Actualizado!',
                    'El Paciente se ha actualizado correctamente.',
                    'success'
                )
            </script>

@endif

<script type="text/javascript">
    $(".table").on('click', '.EliminarDoctor', function() {
        var Did = $(this).attr("Did");
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonText: 'Cancelar',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "Eliminar-Doctor/" + Did;
            }
        });
    });


// eliminar paciente

$(".table").on('click', '.EliminarPaciente', function() {
        var Pid = $(this).attr("Pid");
        var Paciente = $(this).attr("Paciente");
        Swal.fire({
            title: '¿Estás seguro de eliminar a: ' + Paciente + '?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonText: 'Cancelar',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "Eliminar-Paciente/" + Pid;
            }
        });
    });

</script>

<script type="text/javascript">

    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();

    $('#calendario').fullCalendar({
        defaultView: 'agendaWeek',
        hiddenDays: [0,6],

        scrollTime: '08:00:00',
        minTime: '08:00:00',
        maxTime: '16:00:00',
        dayClick: function(date, jsEvent, view) {
                var horaInicio = date.format("HH:mm:ss");
                var horaFinal = parseInt(date.format("HH"), 10) + 1; // Asumiendo citas de 1 hora
                var horaFinalFormat = (horaFinal < 10 ? "0" : "") + horaFinal + ":00:00";

                // Formato correcto para mes y día
                var mesFormato = (date.month() + 1 < 10 ? "0" : "") + (date.month() + 1);
                var diaFormato = (date.date() < 10 ? "0" : "") + date.date();

                var diaActual = date.year() + "-" + mesFormato + "-" + diaFormato;

                // Obtener la fecha actual en el mismo formato
                var fechaActual = new Date();
                var fechaActualFormato = fechaActual.getFullYear() + '-' +
                                         ('0' + (fechaActual.getMonth() + 1)).slice(-2) + '-' +
                                         ('0' + fechaActual.getDate()).slice(-2);

                // Solo muestra el modal si la fecha seleccionada es igual o posterior a la actual
                if (diaActual >= fechaActualFormato) {
                    $('#CitaModal').modal();
                    $('#Fecha').val(diaActual);
                    $('#Hora').val(horaInicio + " - " + horaFinalFormat); // Muestra "HH:mm:ss - HH:mm:ss"
                    $('#FyHinicio').val(diaActual + " " + horaInicio); // Muestra "YYYY-MM-DD HH:mm:ss"
                    $('#FyHfinal').val(diaActual + " " + horaFinalFormat); // Muestra "YYYY-MM-DD HH:mm:ss"
                }
        }
    });


</script>


</body>
</html>
