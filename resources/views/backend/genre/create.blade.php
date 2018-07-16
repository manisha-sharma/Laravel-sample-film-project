@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Film Genre') }}</div>

                <div class="card-body">
					@if($errors->any())
						<div class="alert alert-danger">
							@foreach($errors->all() as $error)
								<p>{{ $error }}</p>
							@endforeach
						</div>
					@endif
					@if(Session::has('flash_message'))
						<div class="alert alert-success">
							{{ Session::get('flash_message') }}
						</div>
					@endif
                    <form method="POST" action="{{ route('filmgenre.store') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Genre title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="genre" value="{{ old('title') }}"  autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
