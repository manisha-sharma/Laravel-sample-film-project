@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Genre List') }}</div>

                <div class="card-body">
                    @foreach($list as $task)
						<h3>{{ $task->genre }}</h3>
						<p>
							<a href="{{ route('filmgenre.show', $task->id) }}" class="btn btn-info">View Task</a>
							<!--<a href="{{ route('filmgenre.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>-->
						</p>
						<hr>
					@endforeach
                </div>
				
            </div>
        </div>
    </div>
</div>
@endsection
