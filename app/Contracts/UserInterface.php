<?php namespace App\Contracts;

interface UserInterface{
	/**
	 * Get List of all users.
	 *
	 * @param array $formData search data
	 * @return Collection
	 */
	public function getAll($id);

	public function getAllUsers($id,$web_id);

	/**
	 * Get number of all users.
	 *
	 * 
	 * @return count
	 */
	public function getAllCount();

	/**
	 * Get one user.
	 *
	 * @param integer $id
	 * @return User
	 */
	public function getOne($id);

	/**
	 * Create new user.
	 *
	 * @param array $userData
	 * @return User
	 */
	public function createOne($userData);

	/**
	 * Update user data.
	 *
	 * @param integer $id
	 * @param array $userData
	 * @return bool
	 */
	public function updateOne($id, $userData);

	/**
	 * Remove user from storage.
	 *
	 * @param integer $id
	 * @return bool
	 */
	public function deleteOne($id);

	/**
	* Update user coordinate
	*
	*@param integer $id
	*@param array $coord
	*@return bool
	*/
	public function updateCoord($id, $coord);

	/**
	 * update grant.
	 *
	 * @param $id, $grant
	 * @return response
	 */
	public function removeGrant($id, $grant);

	/**
	 * update giftcard.
	 *
	 * @param $id, $giftcard
	 * @return response
	 */
	public function removeGiftCard($id, $giftcard);

		/**
	 * update grant.
	 *
	 * @param $id, $grant
	 * @return response
	 */
	public function addeGrant($id, $grant);

	/**
	 * update giftcard.
	 *
	 * @param $id, $giftcard
	 * @return response
	 */
	public function addeGiftCard($id, $giftcard);

}