@extends('template')

@section('main')
    <form action="{{route('partidos.store')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token()  }}">
        <h2>Ingresar partido</h2>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label for="local">Local</label>
                        <select name="local" id="local">
                            @foreach($equipos as $each)
                                <option value="<?php echo $each->equipoId; ?>"> <?php echo $each->equipo ?></option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="local">Visitante</label>
                        <select name="visitante" id="visitante">
                            @foreach($equipos as $each)
                                <option value="<?php echo $each->equipoId; ?>"> <?php echo $each->equipo ?></option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label for="golesLocal">Local</label>
                        <input required type="number" name="cantGolesLocal" id="cantGolesLocal" placeholder="goleslocal">
                    </div>
                    <div class="col-md-4">
                        <label for="golesVisitante">Visitante</label>
                        <input required type="number" name="cantGolesVisitante" id="cantGolesVisitante" placeholder="golesVisitante">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="date">Fecha</label>
                <input name="fecha" type="date" id="date" value="<?php echo date('Y-m-d'); ?>">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3>Goles Local</h3>
                </div>
                <div class="col-md-4">
                    <h3>Goles Visitante</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 insertJugadoresLocal">

                </div>
                <div class="col-md-4 insertJugadoresVisitante">

                </div>
            </div>
            <br>
        <button type="submit" class="btn btn-primary">Cargar partido</button>
    </form>
    <script>
        $("#cantGolesLocal").bind('keyup mouseup', function (ev) {
            var cantGoles = $('#cantGolesLocal').val();
            var idLocal = $('#local').val();
            var jugadores = JSON.parse('<?php echo json_encode($jugadores); ?>');
            $('.insertJugadoresLocal').html('');
            var jugadoresLocal = [];
            jugadores.forEach(function(each){
                if(each.equipoId == idLocal)
                    jugadoresLocal.push(each);
            });

            var selectJugadoresLocal = '<p><select name="golesLocal[]">';
            jugadoresLocal.forEach(function(each){
                selectJugadoresLocal+= '<option value="'+each.jugadorId+'">'+each.jugador+'</option>'
            });
            selectJugadoresLocal += '</p></select>';

            for(var i=1; i<=cantGoles; i++){
                $('.insertJugadoresLocal').append('<label>Gol:'+i+'</label>');
                $('.insertJugadoresLocal').append(selectJugadoresLocal);
            }
        });

        $("#cantGolesVisitante").bind('keyup mouseup', function (ev) {
            var cantGoles = $('#cantGolesVisitante').val();
            var idVisitante = $('#visitante').val();
            var jugadores = JSON.parse('<?php echo json_encode($jugadores); ?>');
            $('.insertJugadoresVisitante').html('');
            var jugadoresVisitante = [];
            jugadores.forEach(function(each){
                if(each.equipoId == idVisitante)
                    jugadoresVisitante.push(each);
            });

            var selectJugadoresVisitante = '<p><select name="golesVisitante[]">';
            jugadoresVisitante.forEach(function(each){
                selectJugadoresVisitante+= '<option value="'+each.jugadorId+'">'+each.jugador+'</option>'
            });
            selectJugadoresVisitante += '</p></select>';

            for(var i=1; i<=cantGoles; i++){
                $('.insertJugadoresVisitante').append('<label>Gol:'+i+'</label>');
                $('.insertJugadoresVisitante').append(selectJugadoresVisitante);
            }
        });
    </script>
    <base href="{{ asset('assets') }}">
    <script src="assets/js/partidos_create.js"></script>
@endsection


