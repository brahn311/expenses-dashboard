<?php

namespace App\Http\Controllers;

use App\DocumentType;
use Illuminate\Http\Request;
use App\Http\Requests\NameValidator;

class DocumentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('documentType.index', [
			'documentTypes' => DocumentType::all()
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('documentType.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$validator = $request->validate([
			'name' => 'required|min:2|max:2'
		]);
		$document_type = new DocumentType();
		$document_type->name = $request->get('name');
		$document_type->save();
		return redirect('/document_types');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DocumentType  $documentType
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentType $documentType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DocumentType  $documentType
     * @return \Illuminate\Http\Response
     */
    public function edit(DocumentType $documentType)
    {
		return view('documentType.edit', [
			'documentType' => $documentType
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DocumentType  $documentType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocumentType $documentType)
    {
		$validator = $request->validate([
			'name' => 'required|min:2|max:2'
		]);
		$documentType->name = $request->get('name');
		$documentType->save();
		return redirect('/document_types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DocumentType  $documentType
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocumentType $documentType)
    {
		$documentType->delete();
		return redirect('/document_types');
    }

	/**
	* Show button to confirm delete the specified resource.
	*
	* @param  \App\DocumentType  $documentType
	* @return \Illuminate\Http\Response
	*/
	public function confirmDelete(DocumentType $documentType)
	{
		return view('documentType.confirmDelete', [
			'documentType' => $documentType
		]);
	}
}
