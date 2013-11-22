<?php

class ArticleController extends \BaseController {

	/**
	 * ArticleRepository $repository
	 */
	protected $repository;

	/**
	 * The model will automatically be injected when this class is instantiated.
	 *
	 * @param ArticleRepository $repository
	 */
	public function __construct(ArticleRepository $repository)
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
		return View::make('article.index', array(
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
		return View::make('article.show', array(
			'article' => $this->repository->find($id),
		));
	}

}