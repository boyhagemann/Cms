<?php

class TestController extends \BaseController {

	/**
	 * TestRepository $repository
	 */
	protected $repository;

	/**
	 * The model will automatically be injected when this class is instantiated.
	 *
	 * @param TestRepository $repository
	 */
	public function __construct(TestRepository $repository)
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
		return View::make('test.index', array(
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
		return View::make('test.show', array(
			'test' => $this->repository->find($id),
		));
	}

}