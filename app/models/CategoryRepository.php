<?php

use Boyhagemann\Model\RepositoryInterface;

class CategoryRepository implements RepositoryInterface {

	/**
	 *
	 * @return Category
	 */
	public function find($id)
	{
		return Category::where('id', '=', $id)->first();
	}

	/**
	 *
	 * @return Collection
	 */
	public function all()
	{
		return Category::all();
	}
}