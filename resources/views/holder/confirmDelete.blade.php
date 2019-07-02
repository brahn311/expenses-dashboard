@extends('layout.base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Delete Document Type: {{ $documentType->name }}</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="links">
					<a href="/">Home</a>
					<a href="/document_types">Back</a>
				</div>
			</div>
		</div>
		<hr>
		<div class="row justify-content-md-center">
			<div class="col"></div>
			<div class="col">
				<form action="/document_types/{{ $documentType->id }}" method="POST">
					@csrf
					@method('delete')
					<div class="alert alert-warning">
						Are you sure you want to delete?
					</div>
					<button class="btn btn-primary" type="submit" >Delete</button>
				</form>
			</div>
			<div class="col"></div>
		</div>
	</div>
@endsection('content')
