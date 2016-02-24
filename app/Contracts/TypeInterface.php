<?php namespace App\Contracts;

interface TypeInterface{

	/**
	 * Get List of all types.
	 *
	 * @return Collection
	 */
	public function getAll();

	/**
	 * Get List of all types.
	 *
	 * @return Collection
	 */
	public function getList();

	/**
	 * Get one type.
	 *
	 * @return Collection
	 */
	public function getOne($id);

	/**
	 * Get create new type.
	 *
	 * @return Collection
	 */
	public function create($data);

	/**
	 * Get edit type data.
	 *
	 * @return response
	 */
	public function update($data,$id);

	/**
	 * Get remove one type.
	 *
	 * @return response
	 */
	public function remove($id);

}