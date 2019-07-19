<?php

namespace App\Http\Controllers;

use App\Holder;
use Illuminate\Http\Request;
use App\DocumentType;

class HolderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('holder.index', [
			'holders' => Holder::all()
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(DocumentType $types)
    {
		$types = DocumentType::all();
		return view('holder.create', [
			'types' => $types
		]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$validated = $request->validate([
			'first_name' => 'required',
			'last_name' => 'nullable',
			'document_type_id' => 'required',
			'document' => 'required'
		]);
		$holder = new Holder();
		$holder->first_name = $request->get('first_name');
		$holder->last_name = $request->get('last_name');
		$holder->document_type_id = $request->get('document_type_id');
		$holder->document = $request->get('document');
		$holder->save();
		return redirect('/holders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Holder  $holder
     * @return \Illuminate\Http\Response
     */
    public function show(Holder $holder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Holder  $holder
     * @param  \App\DocumentType  $types
     * @return \Illuminate\Http\Response
     */
    public function edit(Holder $holder, DocumentType $types)
    {
		$types = DocumentType::all();
		return view('holder.edit', [
			'holder' => $holder,
			'types' => $types
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Holder  $holder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Holder $holder)
    {
		$validated = $request->validate([
			'first_name' => 'required',
			'last_name' => 'nullable',
			'document_type_id' => 'required',
			'document' => 'required'
		]);
		$holder->first_name = $request->get('first_name');
		$holder->last_name = $request->get('last_name');
		$holder->document_type_id = $request->get('document_type_id');
		$holder->document = $request->get('document');
		$holder->save();
		return redirect('/holders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Holder  $holder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Holder $holder)
    {
        //
    }
}
