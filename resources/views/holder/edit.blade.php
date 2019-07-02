@extends('layout.base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Edit Document Type: {{ $documentType->name }}</h1>
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
					@method('put')
					<div class="form-group">
						<label for="name">Document Type name:</label>
						<input type="text" class="form-control" id="name" name="name" value="{{ $documentType->name }}" autocomplete="off" placeholder="Type a name">
					</div>
					@error('name')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<button class="btn btn-primary" type="submit" >Submit</button>
				</form>
			</div>
			<div class="col"></div>
		</div>
	</div>
@endsection('content')
