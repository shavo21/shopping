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

	/**
	 * Get products by type_id.
	 *
	 * @return products
	 */
	public function getProductByeType($id);

	/**
	 * Get products order by id desc.
	 *
	 * @return products
	 */
	public function getProductSlide($limit);

	/**
	* Get products by new_price.
	*
	* @return products
	*/
	public function getProductByPrice($limit);

	/**
	* Get products by price.
	*
	* @return products
	*/
	public function getProductMain($limit);

	/**
	* Get products group.
	*
	* @param $id integer
	* @return products
	*/
	public function getProductByType($id);

	/**
	* Get products by count.
	*
	* @param $count,$limot integer
	* @return products
	*/
	public function getProductByCount($count,$limit);

}