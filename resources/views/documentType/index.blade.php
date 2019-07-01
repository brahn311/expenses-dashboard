@extends('layout.base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Document Types List</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="links">
					<a href="/">Home</a>
					<a href="/document_types/create">New Document Type</a>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<table class="table">
					@foreach($documentTypes as $documentType)
						<tr>
							<td>{{ $documentType->id }}</td>
							<td>{{ $documentType->name }}</td>
							<td><a href="/document_types/{{ $documentType->id }}/edit">Edit</a></td>
							<td><a href="/document_types/{{ $documentType->id }}/confirm_delete">Delete</a></td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
@endsection('content')
