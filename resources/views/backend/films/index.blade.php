@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
				@if(Session::has('flash_message'))
					<div class="alert alert-success">
						{{ Session::get('flash_message') }}
					</div>
				@endif
		   <div class="card">
                <div class="card-header">
					{{ __('Films List') }} 
					<a href="{{ route('backend.create') }}" class="btn btn-info text-right" style="float:right;">Create New Film</a>
				</div>
                <div class="card-body">
                    @foreach($list as $task)
						<h3>{{ $task->name }}</h3>
						<p>
							<a href="{{url('/films',$task->id)}}" class="btn btn-info">View Film</a>
							<a href="{{ route('backend.edit', $task->id) }}" class="btn btn-primary">Edit Film</a>
							<!--<a href="{{ route('backend.destroy', $task->id) }}" data-method="delete" name="delete_item">Delete</a>
							<a href="{{ route('backend.destroy', $task->id) }}" 
							class="btn btn-primary"  onclick="return confirm('Are you sure you want to delete this film?')">Delete Task</a>-->
						</p>
						<hr>
					@endforeach
					Pagination:
					{{ $list->links() }}	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
