@extends('plantilla')
@section('content')
<div class="content-wrapper" id="app">
    <section class="content-header">
        <h2>Horarios</h2>
        <!-- Formulario para crear nuevo horario -->
        <form v-if="!horarios" @submit.prevent="guardarHorario">
            @csrf
            <div class="row">
                <div class="col-md-2">
                    Desde<input type="time" v-model="nuevoHorario.hora_inicio" class="form-control">
                </div>
                <div class="col-md-2">
                    Hasta<input type="time" v-model="nuevoHorario.hora_fin" class="form-control">
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </form>
        <!-- Formulario para mostrar/editar horario existente -->
        <form v-else v-for="hora in horarios" :key="hora.id" @submit.prevent="editarHorario(hora.id)">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-2">
                    Desde<input type="time" v-model="hora.hora_inicio" class="form-control">
                </div>
                <div class="col-md-2">
                    Hasta<input type="time" v-model="hora.hora_fin" class="form-control">
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-success">Editar</button>
                </div>
            </div>
        </form>
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

<!-- Vue.js -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            horarios: {!! json_encode($horarios) !!},
            nuevoHorario: {
                hora_inicio: '',
                hora_fin: ''
            }
        },
        methods: {
            guardarHorario() {
                // Lógica para guardar un nuevo horario
            },
            editarHorario(id) {
                // Lógica para editar un horario existente
            }
        }
    });
</script>
</body>
</html>
