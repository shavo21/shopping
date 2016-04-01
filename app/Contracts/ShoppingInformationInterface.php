<?php namespace App\Contracts;

interface ProductInterface{
	/**
	 * Get List of all shoppingInformation.
	 *
	 * @return Collection
	 */
	public function getAll();
	
	/**
	 * Get one shoppingInformation.
	 *
	 * @return Collection
	 */
	public function getOne($id);
	
	/**
	 * Get create new shoppingInformation.
	 *
	 * @return Collection
	 */
	public function create($data);
	
	/**
	 * Get edit shoppingInformation data.
	 *
	 * @return response
	 */
	public function update($data,$id);
	
	/**
	 * Get remove one shoppingInformation.
	 *
	 * @return response
	 */
	public function remove($id);
	
	/**
	* Get shoppingInformations by id.
	*
	* @return shoppingInformations
	*/
	public function getShoppingInformation($id);
}