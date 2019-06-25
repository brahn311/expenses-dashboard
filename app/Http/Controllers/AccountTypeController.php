<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccountType;

class AccountTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('accountType.index', [
			'account_types' => AccountType::all()
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accountType.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$account_type = new AccountType();
		$account_type->name = $request->get('name');
		$account_type->save();
		return redirect('/account_types');
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
		$type = AccountType::findOrFail($id);
		return view('accountType.edit', [
			'type' => $type
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$type = AccountType::find($id);
		$type->name = $request->get('name');
		$type->save();
		return redirect('/account_types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$type = AccountType::findOrFail($id);
		$type->delete();
		return redirect('/account_types');
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
		$type = AccountType::findOrFail($id);
		return view('accountType.delete', [
			'type' => $type
		]);
	}
}
