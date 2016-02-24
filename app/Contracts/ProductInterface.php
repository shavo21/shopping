<?php namespace App\Contracts;

interface ProductInterface{

	/**
	 * Get List of all products.
	 *
	 * @return Collection
	 */
	public function getAll();

	/**
	 * Get List of all products.
	 *
	 * @return Collection
	 */
	public function getList();

	/**
	 * Get one product.
	 *
	 * @return Collection
	 */
	public function getOne($id);

	/**
	 * Get create new product.
	 *
	 * @return Collection
	 */
	public function create($data);

	/**
	 * Get edit product data.
	 *
	 * @return response
	 */
	public function update($data,$id);

	/**
	 * Get remove one product.
	 *
	 * @return response
	 */
	public function remove($id);

}