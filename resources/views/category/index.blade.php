@extends('layout.base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Categories List</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="links">
					<a href="/">Home</a>
					<a href="/categories/create">New Category</a>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<table class="table">
					@foreach($categories as $category)
						<tr>
							<td>{{ $category->name }}</td>
							<td><a href="/categories/{{ $category->id }}/edit">Edit</a></td>
							<td><a href="/categories/{{ $category->id }}/confirm_delete">Delete</a></td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
@endsection('content')
