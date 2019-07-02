@extends('layout.base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Holders List</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="links">
					<a href="/">Home</a>
					<a href="/holders/create">New Holder</a>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<table class="table">
					@foreach($holders as $holder)
						<tr>
							<td>{{ $holder->id }}</td>
							<td>{{ $holder->first_name }}</td>
							<td>{{ $holder->last_name }}</td>
							<td>{{ $holder->type_id }}</td>
							<td>{{ $holder->document }}</td>
							<td><a href="/holders/{{ $holder->id }}/edit">Edit</a></td>
							<td><a href="/holders/{{ $holder->id }}/confirm_delete">Delete</a></td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
@endsection('content')
