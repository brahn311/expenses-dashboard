<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\NameValidator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('category.index',[
			'categories' => Category::all()
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('category.create');
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
		$category = new Category();
		$category->name = $request->get('name');
		$category->save();
		return redirect('/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
		return view('category.edit',[
			'category' => $category
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Requests/NameValidator  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(NameValidator $request, Category $category)
    {
		$validated = $request->validated();
		$category->name = $request->get('name');
		$category->save();
		return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
		$category->delete();
		return redirect('/categories');
    }

	/**
	* Show confirm delete button the specified resource.
	*
	* @param  \App\Category  $category
	* @return \Illuminate\Http\Response
	*/
	public function confirmDelete(Category $category)
	{
		return view('category.confirmDelete',[
			'category' => $category
		]);
	}
}
