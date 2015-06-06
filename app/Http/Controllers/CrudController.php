<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;


// use Illuminate\Http\Request;
use Request;

use \App\Crud as Crud;

class CrudController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cruds = Crud::all();

		return view('crud.index', compact('cruds'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('crud.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// dd(Request::all());

		//all
		$input = Request::all();

		//title
		// dd(Request::get('title'));

		//Manual Way
		//$crud = new Crud;
		//$crud->title = $input['title'];
		
		// $curd = new Crud(['title' => $input['title']]);

		Crud::create($input);

		return redirect('crud');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view('crud.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$crud = Crud::find($id);

		return view('crud.edit', compact('crud'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request) //Method injection (reflection)
	{
		$crud = Crud::find($id);
		
		$crud->update($request::all());

		return redirect('crud');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$crud = Crud::find($id);

		$crud->delete();

		return redirect('crud');
	}

}
