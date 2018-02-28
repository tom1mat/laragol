@extends('template')

@section('main')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Jugador</th>
            <th>Equipo</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jugadores as $each)
            <tr>
                <td><?php echo $each->jugador; ?></td>
                <td><?php echo $each->equipo->equipo ?></td>
                <td>
                    <form action="{{ route("jugadores.destroy",$each->jugadorId)  }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button class="btn btn-danger" type="submit">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <a href="{{ route('jugadores.edit', $each->jugadorId) }}" class="btn btn-secondary btn-success"><span class="glyphicon glyphicon-edit"></span></a>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection