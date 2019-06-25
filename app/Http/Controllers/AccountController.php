<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Account, AccountType, Bank};

class AccountController extends Controller
{
	protected $types;
	protected $banks;

	/**
     * Create a new controller instance.
     *
     * @param  Banks  $types
     * @param  AccountType  $banks
     * @return void
     */
	public function __construct(AccountType $types, Bank $banks)
	{
		$this->types = $types;
		$this->banks = $banks;
	}

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('account.index', [
			'accounts' => Account::all()
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$types = AccountType::all();
		$banks = Bank::all();
		return view('account.create', [
			'types' => $types,
			'banks' => $banks
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
		$account = new Account();
		$account->number = $request->get('number');
		$account->type_id = $request->get('type_id');
		$account->bank_id = $request->get('bank_id');
		$account->branch = $request->get('branch');
		$account->save();
		return redirect('/accounts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$account = Account::findOrFail($id);
		$account->delete();
		return redirect('/accounts');
    }

	/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
	{
		$account = Account::findOrFail($id);
		$types = AccountType::all();
		$banks = Bank::all();
		return view('account.edit', [
			'account' => $account,
			'types' => $types,
			'banks' => $banks
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
		$account = Account::find($id);
		$account->number = $request->get('number');
		$account->type_id = $request->get('type_id');
		$account->bank_id = $request->get('bank_id');
		$account->branch = $request->get('branch');
		$account->save();
		return redirect('/accounts');
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$account = Account::findOrFail($id);
		$account->delete();
		return redirect('/accounts');
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
		$account = Account::findOrFail($id);
		return view('account.delete', [
			'account' => $account
		]);
	}
}
