@if( session('primary-status') )

    <div class="alert alert-info">
        {{ session('primary-status') }}
    </div>

@endif

@if( session('info-status') )

    <div class="alert alert-info">
        {{ session('info-status') }}
    </div>

@endif

@if( session('danger-status') )

    <div class="alert alert-danger">
        {{ session('danger-status') }}
    </div>

@endif