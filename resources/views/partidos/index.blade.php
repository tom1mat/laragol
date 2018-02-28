@extends('template')

@section('main')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Local</th>
            <th>Goles Local</th>
            <th>Goles Visitante</th>
            <th>Visitante</th>
            <th>Fecha</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($partidos as $each)
            <tr>
                <td><?php echo $each->local->equipo; ?></td>
                <td><?php echo $each->golesLocal; ?></td>
                <td><?php echo $each->golesVisitante; ?></td>
                <td><?php echo $each->visitante->equipo ?></td>
                <td><?php echo $each->fecha ?></td>
                <td>
                    <form action="{{ route("partidos.destroy",$each->id)  }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="btn btn-danger" type="submit">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection