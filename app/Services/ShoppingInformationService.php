<?php namespace App\Services;

use App\Contracts\ShoppingInformationInterface;
use App\ShoppingInformation;

class ShoppingInformationService implements ShoppingInformationInterface{

	/**
	 * Object of Type class.
	 *
	 * @var ShoppingInformation
	 */
	private $user;

	/**
	 * Create a new instance of ShoppingInformationService class.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->shoppingInformation = new ShoppingInformation();
	}

	/**
	 * Get List of all shoppingInformation.
	 *
	 * @return Collection
	 */
	public function getAll()
	{
		$shoppingInformations = $shoppingInformation->type;
		return $shoppingInformations->get();
	}

	/**
	 * Get one shoppingInformation.
	 *
	 * @return Collection
	 */
	public function getOne($id)
	{
		$shoppingInformation  = $this->shoppingInformation->find($id);
		return $shoppingInformation;
	}

	/**
	 * Get create new shoppingInformation.
	 *
	 * @return Collection
	 */
	public function create($data)
	{
		$shoppingInformation = $this->shoppingInformation->create($data);
		return $shoppingInformation;
	}

	/**
	 * Get edit shoppingInformation data.
	 *
	 * @return response
	 */
	public function update($data,$id)
	{
		$result = $this->getOne($id)->update($data);
		return $result;
	}

	/**
	 * Get remove one shoppingInformation.
	 *
	 * @return response
	 */
	public function remove($id)
	{
		$result = $this->getOne($id)->delete();
		return $result;
	}

	/**
	* Get shoppingInformations by id.
	*
	* @return shoppingInformations
	*/
	public function getShoppingInformation($id)
	{
		$result = $this->shoppingInformation->where('user_id',$id)->get();
		return $result;
	}
}