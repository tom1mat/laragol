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