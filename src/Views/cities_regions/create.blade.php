@extends(config('cw_location.layout'))
@section('title', __('location::countries.countries'))
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title float-left">
                            {{ __($title ?? 'location::countries.create') }}
                        </h3>
                        @includeIf('location::partials.card_header_pills', ['nameRoute' => 'countries'])
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'admin.locations.countries.store', 'class' => 'horizontal-form']) !!}
                            @include('location::countries.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
