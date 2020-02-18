@extends('layouts.app')
@section('title')
	{{$todo->name}}
@endsection
@section('content')
<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card card-default">
					<div class="card-header">
						<h3>Todo Item</h3>
					</div>
					<div class="card-body">
						{{$todo->name}}
					</div>
					<div class="row justify-content-center">						
						<a href="/todos/{{$todo->id}}/edit" class="btn btn-primary m-2">Update</a>
						<a href="/todos/{{$todo->id}}/delete-todos" class="btn btn-danger m-2">Delete</a>
					</div>
				</div>
				
			</div>
			
		</div>
@endsection
