@extends('template')

    @section('main')
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Equipo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($equipos as $equipo)
                <tr>
                    <td><?php echo $equipo->equipo; ?></td>
                    <td><a href="{{ route('equipos.edit',$equipo->equipoId) }}"> <span class="glyphicon glyphicon-edit"></span></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endsection