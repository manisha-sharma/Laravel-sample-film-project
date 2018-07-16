@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Genre Detail') }}</div>

                <div class="card-body">
						<h3>{{ $genre->genre }}</h3>
						<hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
