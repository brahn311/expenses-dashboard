<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;
use App\Http\Requests\NameValidator;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('status.index', [
			'statuses' => Status::all()
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\NameValidator  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NameValidator $request)
    {
		$validated = $request->validated();
		$status = new Status();
		$status->name = $request->get('name');
		$status->save();
		return redirect('/statuses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
		return view('status.edit', [
			'status' => $status
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Requests\NameValidator  $request
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(NameValidator $request, Status $status)
    {
		$validated = $request->validated();
		$status->name = $request->get('name');
		$status->save();
		return redirect('/statuses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
		$status->delete();
		return redirect('/statuses');
    }

	/**
	* Show confirm delete button the specified resource.
	*
	* @param  \App\Status  $status
	* @return \Illuminate\Http\Response
	*/
	public function confirmDelete(Status $status)
	{
		return view('status.confirmDelete', [
			'status' => $status
		]);
	}
}
