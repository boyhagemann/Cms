<?php

class CategoryController extends \BaseController {

	/**
	 * CategoryRepository $repository
	 */
	protected $repository;

	/**
	 * The model will automatically be injected when this class is instantiated.
	 *
	 * @param CategoryRepository $repository
	 */
	public function __construct(CategoryRepository $repository)
	{
		$this->repository = $repository;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('category.index', array(
			'collection' => $this->repository->all(),
		));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('category.show', array(
			'category' => $this->repository->find($id),
		));
	}

}