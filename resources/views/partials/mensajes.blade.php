@if(session('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Éxito! </strong>{{ session('success') }}
    </div>
@endif

@if(count($errors) > 0)
    <div class="pad margin no-print">
        <div class="alert alert-danger alert-dismissible" style="margin-bottom: 0!important;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="fa fa-info"></i> Error:</h4>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

