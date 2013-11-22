<?php

use Boyhagemann\Model\RepositoryInterface;

class TestRepository implements RepositoryInterface {

	/**
	 *
	 * @return Test
	 */
	public function find($id)
	{
		return Test::where('id', '=', $id)->first();
	}

	/**
	 *
	 * @return Collection
	 */
	public function all()
	{
		return Test::all();
	}
}