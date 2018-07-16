@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Film Detail') }}</div>

                <div class="card-body">
						<table width="100%" border=1 class="table-responsive text-center">
							<thead>
								<tr>
									<th>Name</th>
									<th>Description</th>
									<th>Release Date</th>
									<th>Ticket Price</th>
									<th>Country</th>
									<th>Genre</th>
									<th>Photo</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{ $film->name }}</td>
									<td>{{ $film->description }}</td>
									<td>{{ $film->release_date }}</td>
									<td>{{ $film->ticket_price }}</td>
									<td>{{ $film->country }}</td>
									<td>{{ $film->genre_id }}</td>
									<td><img src={{url('/public/upload_photos',$film->photo)}} width="150px" height="150px" alt=""/></td>
								</tr>
							</tbody>
						</table>
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
					
					
					<h3 class="mt-3">User Comments</h3>
					<ul>
					@foreach($comment_list as $list)
						@if($list->film_id == $film->id)
							<li>{{$list->name}}: {{$list->comments}}</li>
						@endif
					@endforeach
					</ul>
					
					<form method="POST" action="{{ route('comment.store') }}">
                        @csrf
						<input type="hidden" name="film_id" value="{{$film->id}}"/>
						@guest
							<input type="hidden" name="user_id" value="0"/>
						@else
							<input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
						@endif
						<h3 class="mt-3">Please Comment</h3>
						 <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-left">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  autofocus>
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-left">{{ __('Comment') }}</label>

                            <div class="col-md-6">
                                <textarea name="comments">{{ old('comment') }}</textarea>
                            </div>
                        </div>
						<div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Comment') }}
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
