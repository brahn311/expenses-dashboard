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
        //
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
     * @return \Illuminate\Http\Response
     */
    public function edit(Holder $holder)
    {
        //
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
        //
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
