<?php

use Boyhagemann\Model\RepositoryInterface;

class ArticleRepository implements RepositoryInterface {

	/**
	 *
	 * @return Article
	 */
	public function find($id)
	{
		return Article::where('id', '=', $id)->first();
	}

	/**
	 *
	 * @return Collection
	 */
	public function all()
	{
		return Article::all();
	}
}