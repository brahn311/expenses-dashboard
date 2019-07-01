@extends('layout.base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Delete Category: {{ $category->name }}</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="links">
					<a href="/">Home</a>
					<a href="/categories">Back</a>
				</div>
			</div>
		</div>
		<hr>
		<form action="/categories/{{ $category->id }}" method="POST">
			<div class="row justify-content-md-center">
				<div class="col"></div>
				<div class="col">
					@csrf
					@method('delete')
					<div class="alert alert-warning">
						Are you sure you want to delete?
					</div>
				</div>
				<div class="col"></div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="comment">Add a comment:</label>
						<textarea type="text" class='form-control' id='comment' name="comment" rows="3" placeholder="Type a justification comment"></textarea>
						<small id="commentHelp" class="form-text text-muted">This is not working right now.</small>
					</div>
				</div>
			</div>
			<button class="btn btn-primary" type="submit" >Delete</button>
		</form>
	</div>
@endsection('content')
