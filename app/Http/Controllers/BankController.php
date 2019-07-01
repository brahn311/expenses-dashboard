<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NameValidator;
use App\Bank;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
	{
		return view('bank.index', [
			'banks' => Bank::all()
		]);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('bank.create');
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
		$bank = new Bank();
		$bank->name = $request->get('name');
		$bank->save();
		return redirect('/banks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		dd($id);
		$bank = Bank::findOrFail($id);
		return view('bank.edit', [
			'bank' => $bank
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Requests\NameValidator  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NameValidator $request, $id)
	{
		$validated = $request->validated();
		$bank = Bank::find($id);
		$bank->name = $request->get('name');
		$bank->save();
		return redirect('/banks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$bank = Bank::findOrFail($id);
		$bank->delete();
		return redirect('/banks');
    }

	/**
	* Show confirm delete button the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function confirmDelete($id)
	{
		// dd('confirmDelete ' . $id);
		$bank = Bank::findOrFail($id);
		return view('bank.delete',[
			'bank' => $bank
		]);
	}
}
